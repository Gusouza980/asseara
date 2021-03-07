<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;
class PdfController extends Controller
{
    //
    public function criar(Request $request){
        // dd($request->all());
        $pdf = app()->make('dompdf.wrapper');
        // $pdf->loadHTML(view("templates.pagina" . $pagina)->render() . view("templates.pagina2")->render());
        $data = $request->all();
        $pdf->loadView('pdfs.pagina1', $data)->save('site/pdfs/pagina1.pdf');
        $pdf = app()->make('dompdf.wrapper');
        $pdf->loadView('pdfs.pagina2', $data)->save('site/pdfs/pagina2.pdf');
        $pdf = app()->make('dompdf.wrapper');
        $pdf->loadView('pdfs.pagina3', $data)->save('site/pdfs/pagina3.pdf');
        $pdf = app()->make('dompdf.wrapper');
	    $pdf->loadView('pdfs.pagina2', $data)->save('site/pdfs/pagina2.pdf');
	    $pdf = app()->make('dompdf.wrapper');
	    $pdf->loadView('pdfs.pagina3', $data)->save('site/pdfs/pagina3.pdf');
        $pdf = app()->make('dompdf.wrapper');
	    $pdf->loadView('pdfs.pagina4', $data)->save('site/pdfs/pagina4.pdf');
        $pdf = app()->make('dompdf.wrapper');
        $pdf->loadView('pdfs.pagina5', $data)->save('site/pdfs/pagina5.pdf');
        $pdf = app()->make('dompdf.wrapper');
        $pdf->loadView('pdfs.pagina6', $data)->save('site/pdfs/pagina6.pdf');
        $pdf = app()->make('dompdf.wrapper');
        $pdf->loadView('pdfs.pagina7', $data)->save('site/pdfs/pagina7.pdf');

        $fileArray= array(public_path() . "/site/pdfs/pagina1.pdf",public_path() . "/site/pdfs/pagina2.pdf",public_path() . "/site/pdfs/pagina3.pdf",public_path() . "/site/pdfs/pagina4.pdf");

        $datadir = public_path() . "/site/pdfs/";
        $outputName = $datadir."merged.pdf";

        $cmd = "gs -q -dNOPAUSE -dBATCH -sDEVICE=pdfwrite -sOutputFile=$outputName ";
        //Add each pdf file to the end of the command
        foreach($fileArray as $file) {
            $cmd .= $file." ";
        }
	echo $cmd;
        $result = shell_exec($cmd);
        dd($result);
        return $pdf->stream();
    }
}
