<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;
use App\Models\Engenheiro;
use Illuminate\Support\Facades\Storage;
use App\Models\Ordem;
use Illuminate\Support\Str;
use App\Models\ComprovanteOrdem;
use App\Classes\Email;

class PdfController extends Controller
{
    //
    public function criar(Request $request){
        // dd($request->all());
        $responsavel = Engenheiro::find(session()->get("engenheiro"));

        $data = $request->all();
        \Date::setLocale('pt-br');
        $data["data_atual"] = \Date::now();

        Storage::makeDirectory('site/pdfs/'.$responsavel->id);

        $fileArray = array();
        $datadir = public_path() . "/site/pdfs/" . $responsavel->id . "/";

        for($i = 1; $i <= 18; $i++){
            if($i == 3) continue;
            $pdf_directory = $datadir . 'pagina'.$i.'.pdf';
            $pdf = app()->make('dompdf.wrapper');
            $pdf->loadView('pdfs.pagina' . $i, $data)->save($pdf_directory);
            $fileArray[] = $pdf_directory;
        }
        
	    $name = date("YmdHis") . "_" .  Str::random(10) . ".pdf";
        $caminho = "/site/pdfs/" . $responsavel->id . "/" . $name;
        $outputName = $datadir . $name;

        $cmd = "gs -q -dNOPAUSE -dBATCH -sDEVICE=pdfwrite -sOutputFile=$outputName ";
        //Add each pdf file to the end of the command
        foreach($fileArray as $file) {
            $cmd .= $file." ";
        }
        $result = shell_exec($cmd);

        $ordem = new Ordem;
        $ordem->proprietario = $request->nome_proprietario;
        $ordem->numero = config("globals.rts")[$request->conselho] . " " .  $request->rt;
        $ordem->engenheiro_id = $responsavel->id;
        $ordem->caminho = $caminho;
        $ordem->save();

        if($request->file("comprovante")){
            foreach($request->file("comprovante") as $file){
                $comprovante = new ComprovanteOrdem;
                $comprovante->caminho = $file->store(
                    'admin/images/comprovantes/'.Str::slug($responsavel->cpf).'/ordens', 'local'
                );
                $comprovante->ordem_id = $ordem->id;
                $comprovante->save();
            }
            
        }

        $file = file_get_contents('site/emails/nova_emissao.html');
        $file = str_replace("{{nome_responsavel}}", $responsavel->nome, $file);
        Email::enviar($file, "Nova emissão", "", true);
        //dd($result);
        session()->flash('sucesso', 'Sua emissão está em análise. Aguarde aprovação.');
        return redirect()->route('site.index');
        // return Storage::download("/site/pdfs/".$responsavel->id."/".$name, "Ordem - " . date("d-m-Y") . ".pdf");
        // return $pdf->stream();
    }

    public function baixar(Ordem $ordem){
        if($ordem->aprovado){
            return Storage::download($ordem->caminho, "Ordem " . date("d-m-Y", strtotime($ordem->created_at)) . ".pdf");
        }
    }
}
