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

    public function analise(){
        $responsaveis = Engenheiro::where("aprovado", 0)->get();
        return view("painel.responsaveis.consultar", ["responsaveis" => $responsaveis, "tipo" => "Em Análise"]);
    }

    public function aprovados(){
        $responsaveis = Engenheiro::where("aprovado", 1)->get();
        return view("painel.responsaveis.consultar", ["responsaveis" => $responsaveis, "tipo" => "Aprovadas"]);
    }

    public function reprovados(){
        $responsaveis = Engenheiro::where("aprovado", -1)->get();
        return view("painel.responsaveis.consultar", ["responsaveis" => $responsaveis, "tipo" => "Reprovadas"]);
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

    public function reprovar(Request $request, Engenheiro $responsavel){
        $anteriormente_aprovado = false;
        if($responsavel->aprovado == 1){
            $anteriormente_aprovado = true;
        }
        $responsavel->aprovado = -1;
        $responsavel->motivo = $request->motivo;
        $responsavel->save();

        $file = file_get_contents('site/emails/registro_reprovado.html');
        $file = str_replace("{{nome}}", $responsavel->nome, $file);
        $file = str_replace("{{motivo}}", $responsavel->motivo, $file);
        Email::enviar($file, "Registro Reprovado", $responsavel->email);

        if($anteriormente_aprovado){
            $file = file_get_contents('site/emails/registro_reprovado_secretaria.html');
            $file = str_replace("{{nome}}", $responsavel->nome, $file);
            $file = str_replace("{{cpf}}", $responsavel->cpf, $file);
            $file = str_replace("{{motivo}}", $responsavel->motivo, $file);
            Email::enviar($file, "Registro Reprovado", "katiaiunes@alfenas.mg.gov.br");
        }

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
