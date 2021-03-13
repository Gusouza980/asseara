<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;
use App\Models\Engenheiro;
use App\Models\Ordem;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;


class PainelController extends Controller
{

    public function teste(){
        
    }
    //
    public function index(){
        $responsaveis_cadastros = [];
        for($i = 14; $i >= 0; $i--){
            $data = date_create()->modify("-$i day")->format("d/m");
            $data_full_inicio = date_create()->modify("-$i day")->format("Y-m-d 00:00:0");
            $data_full_fim = date_create()->modify("-$i day")->format("Y-m-d 23:59:59");
            // dd($data_full);
            $quantidade = Engenheiro::where([["created_at", ">=", $data_full_inicio], ["created_at", "<=", $data_full_fim]])->count();
            $responsaveis_cadastros[$data] = $quantidade;
        }

        $ordens_cadastros = [];
        for($i = 14; $i >= 0; $i--){
            $data = date_create()->modify("-$i day")->format("d/m");
            $data_full_inicio = date_create()->modify("-$i day")->format("Y-m-d 00:00:0");
            $data_full_fim = date_create()->modify("-$i day")->format("Y-m-d 23:59:59");
            // dd($data_full);
            $quantidade = Ordem::where([["created_at", ">=", $data_full_inicio], ["created_at", "<=", $data_full_fim]])->count();
            $ordens_cadastros[$data] = $quantidade;
        }

        $ordens_status = [];

        $data_inicio = date_create()->modify("-29 day")->format("Y-m-d 00:00:0");
        $data_fim = date_create()->format("Y-m-d 23:59:59");
        $ordens = Ordem::where([["created_at", ">=", $data_inicio], ["created_at", "<=", $data_fim]])->get();
        $ordens_status["aprovado"] = $ordens->where("aprovado", "1")->count();
        $ordens_status["reprovado"] = $ordens->where("aprovado", "-1")->count();
        $ordens_status["análise"] = $ordens->where("aprovado", "0")->count();
        
        return view("painel.index", ["responsaveis_cadastros" => $responsaveis_cadastros, "ordens_cadastros" => $ordens_cadastros, "ordens_status" => $ordens_status]);
    }

    public function login(){
        if(session()->get("usuario")){
            return redirect()->route("painel.index");
        }
        return view("painel.login");
    }

    public function logar(Request $request){
        if(session()->get("usuario")){
            return redirect()->route("painel.index");
        }

        $usuario = Usuario::where("usuario", $request->usuario)->first();
        
        if($usuario){
            if(Hash::check($request->senha, $usuario->senha)){
                session()->put(["usuario" => $usuario->toArray()]);
                return redirect()->route("painel.index");
            }else{
                toastr()->error("Informações de usuário incorretas!");
            }
        }else{
            toastr()->error("Informações de usuário incorretas!");
        }

        return redirect()->back();
    }

    public function sair(){
        session()->forget("usuario");
        return redirect()->route("painel.login");
    }
}
