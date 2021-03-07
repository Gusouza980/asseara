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
        return $pdf->stream();
    }
}
