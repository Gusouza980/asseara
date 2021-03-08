<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Engenheiro;

class EngenheirosController extends Controller
{
    //
    public function index(){
        $responsaveis = Engenheiro::all();
        return view("painel.responsaveis.consultar", ["responsaveis" => $responsaveis]);
    }

    public function visualizar(Engenheiro $responsavel){
        return view("painel.responsaveis.visualizar", ["responsavel" => $responsavel]);
    }

    public function aprovar(Engenheiro $responsavel){
        $responsavel->aprovado = true;
        $responsavel->save();
        toastr()->success("Engenheiro aprovado com sucesso!");
        return redirect()->back();
    }

    public function bloquear(Engenheiro $responsavel){
        $responsavel->aprovado = false;
        $responsavel->save();
        toastr()->success("Engenheiro bloqueado com sucesso!");
        return redirect()->back();
    }
}
