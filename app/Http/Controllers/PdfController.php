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
	$pdf->loadView('pdfs.pagina2', $data)->save('site/pdfs/pagina2.pdf');
	$pdf->loadView('pdfs.pagina3', $data)->save('site/pdfs/pagina3.pdf');
        $pdf->loadView('pdfs.pagina4', $data)->save('site/pdfs/pagina4.pdf');
        $pdf->loadView('pdfs.pagina5', $data)->save('site/pdfs/pagina5.pdf');
        $pdf->loadView('pdfs.pagina6', $data)->save('site/pdfs/pagina6.pdf');
        $pdf->loadView('pdfs.pagina7', $data)->save('site/pdfs/pagina7.pdf');

        $fileArray= array("pagina1.pdf","pagina2.pdf","pagina3.pdf","pagina4.pdf");

        $datadir = "site/pdfs/";
        $outputName = $datadir."merged.pdf";

        $cmd = "gs -q -dNOPAUSE -dBATCH -sDEVICE=pdfwrite -sOutputFile=$outputName ";
        //Add each pdf file to the end of the command
        foreach($fileArray as $file) {
            $cmd .= $file." ";
        }
        $result = shell_exec($cmd);
        dd($result);
        return $pdf->stream();
    }
}
