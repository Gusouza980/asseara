<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ordem;

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
        toastr()->success("Emissão aprovada com sucesso!");
        return redirect()->back();
    }

    public function reprovar(Ordem $ordem){
        $ordem->aprovado = -1;
        $ordem->save();
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
