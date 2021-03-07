<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\Engenheiro;

class SiteController extends Controller
{

    //
    public function index(){
        return view("site.index");
    }

    public function login(){
        return view("site.login");
    }

    public function logar(Request $request){
        $engenheiro = Engenheiro::where([["cpf", $request->cpf], ["aprovado", true]])->first();
        if($engenheiro){
            if(Hash::check($request->senha, $engenheiro->senha)){
                session()->put(["engenheiro" => $engenheiro->id]);
                return redirect()->route("site.index");
            }else{
                session()->flash("erro", "Senha incorreta!");
                return redirect()->back();
            }
        }else{
            session()->flash("erro", "O CPF não está ligado a um usuário aprovado!");
            return redirect()->back();
        }
    }

    public function registro(){
        return view("site.registro");
    }

    public function registrar(Request $request){
        $request->validate([
            'cpf' => 'unique:engenheiros,cpf',
            'email' => 'unique:engenheiros,email'
        ]);

        $engenheiro = new Engenheiro;

        $engenheiro->cpf = $request->cpf;
        $engenheiro->senha = Hash::make($request->senha);
        $engenheiro->nome = $request->nome;
        $engenheiro->telefone = $request->telefone;
        $engenheiro->titulo = $request->titulo;
        $engenheiro->registro = $request->registro;
        $engenheiro->inscricao = $request->inscricao;
        $engenheiro->rua = $request->rua;
        $engenheiro->numero = $request->numero;
        $engenheiro->complemento = $request->complemento;
        $engenheiro->cidade = $request->cidade;
        $engenheiro->uf = $request->uf;
        $engenheiro->email = $request->email;
        $engenheiro->cep = $request->cep;

        $engenheiro->save();

        session()->flash("sucesso", "Recebemos seu pedido de cadastro. Por favor, aguarde enquanto verificamos seus dados para aprová-lo.");
        return redirect()->route("site.login");
    }
}
