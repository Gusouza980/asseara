<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;
use App\Models\Engenheiro;
use Illuminate\Support\Facades\Storage;

class PdfController extends Controller
{
    //
    public function criar(Request $request){
        // dd($request->all());
        $responsavel = Engenheiro::find(session()->get("engenheiro"));

        $data = $request->all();

        Storage::makeDirectory('site/pdfs/'.$responsavel->id);

        $fileArray = array();
        $datadir = public_path() . "/site/pdfs/" . $responsavel->id . "/";

        for($i = 1; $i <= 18; $i++){
            $pdf_directory = $datadir . 'pagina'.$i.'.pdf';
            $pdf = app()->make('dompdf.wrapper');
            $pdf->loadView('pdfs.pagina' . $i, $data)->save($pdf_directory);
            $fileArray[] = $pdf_directory;
        }
        
        $outputName = $datadir . date("YmdHis") . ".pdf";

        $cmd = "gs -q -dNOPAUSE -dBATCH -sDEVICE=pdfwrite -sOutputFile=$outputName ";
        //Add each pdf file to the end of the command
        foreach($fileArray as $file) {
            $cmd .= $file." ";
        }
	    echo $cmd;
        $result = shell_exec($cmd);
        // dd($result);
        return Storage::download($outputName, "Ordem - " . date("d/m/Y"));
        // return $pdf->stream();
    }
}
