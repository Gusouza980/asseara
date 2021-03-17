<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ordem;
use App\Classes\Email;

class OrdensController extends Controller
{

    public function analise(){
        $ordens = Ordem::where("aprovado", 0)->get();
        return view("painel.ordens.consultar", ["ordens" => $ordens, "tipo" => "Em Análise"]);
    }

    public function aprovadas(){
        $ordens = Ordem::where("aprovado", 1)->get();
        return view("painel.ordens.consultar", ["ordens" => $ordens, "tipo" => "Aprovadas"]);
    }

    public function reprovadas(){
        $ordens = Ordem::where("aprovado", -1)->get();
        return view("painel.ordens.consultar", ["ordens" => $ordens, "tipo" => "Reprovadas"]);
    }
    //
    public function aprovar(Ordem $ordem){
        $ordem->aprovado = 1;
        $ordem->save();
        $file = file_get_contents('site/emails/ordem_aprovada.html');
        $file = str_replace("{{nome}}", $ordem->responsavel->nome, $file);
        $file = str_replace("{{numero}}", $ordem->numero, $file);
        $teste = Email::enviar($file, "Ordem Aprovada", $ordem->responsavel->email);
        toastr()->success("Emissão aprovada com sucesso!");
        return redirect()->back();
    }

    public function reprovar(Ordem $ordem){
        $ordem->aprovado = -1;
        $ordem->save();
        $file = file_get_contents('site/emails/ordem_reprovada.html');
        $file = str_replace("{{nome}}", $ordem->responsavel->nome, $file);
        $file = str_replace("{{numero}}", $ordem->numero, $file);
        Email::enviar($file, "Ordem Reprovada", $ordem->responsavel->email);
        toastr()->success("Emissão reprovada com sucesso!");
        return redirect()->back();
    }


    public function bloquear(Ordem $ordem){
        $ordem->aprovado = -1;
        $ordem->save();
        toastr()->success("Emissão bloqueada com sucesso!");
        return redirect()->back();
    }
}
