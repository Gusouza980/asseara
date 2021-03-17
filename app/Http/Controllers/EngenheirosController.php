<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Engenheiro;
use App\Classes\Email;

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
        $responsavel->aprovado = 1;
        $responsavel->save();
        $file = file_get_contents('site/emails/registro_aprovado.html');
        $file = str_replace("{{nome}}", $responsavel->nome, $file);
        Email::enviar($file, "Registro Aprovado", $responsavel->email);
        toastr()->success("Engenheiro aprovado com sucesso!");
        return redirect()->back();
    }

    public function reprovar(Engenheiro $responsavel){
        $responsavel->aprovado = -1;
        $responsavel->save();
        $file = file_get_contents('site/emails/registro_reprovado.html');
        $file = str_replace("{{nome}}", $responsavel->nome, $file);
        Email::enviar($file, "Registro Reprovado", $responsavel->email);
        toastr()->success("Engenheiro aprovado com sucesso!");
        return redirect()->back();
    }

    public function bloquear(Engenheiro $responsavel){
        $responsavel->aprovado = -1;
        $responsavel->save();
        toastr()->success("Engenheiro bloqueado com sucesso!");
        return redirect()->back();
    }
}
