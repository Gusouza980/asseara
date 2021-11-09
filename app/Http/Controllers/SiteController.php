<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\Engenheiro;
use App\Models\ComprovanteRegistro;
use Illuminate\Support\Str;
use App\Classes\Email;

class SiteController extends Controller
{

    //
    public function index(){
        return redirect()->route("site.responsavel");
    }

    public function responsavel(){
        $responsavel = Engenheiro::find(session()->get("engenheiro"));
        return view("site.index", ["responsavel" => $responsavel]);
    }

    public function emissao(){
        return view("site.emitir");
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
        $aprovados = Engenheiro::where("aprovado", 1)->get();
        
        if($aprovados->where("cpf", $request->cpf)->first()){
            session()->flash("erro", "Já existe um usuário com o cpf informado.");
            return redirect()->back();
        }

        if($aprovados->where("email", $request->email)->first()){
            session()->flash("erro", "Já existe um usuário com o email informado.");
            return redirect()->back();
        }

        $engenheiro = new Engenheiro;

        $engenheiro->cpf = $request->cpf;
        $engenheiro->senha = Hash::make($request->senha);
        $engenheiro->nome = strtoupper($request->nome);
        $engenheiro->telefone = strtoupper($request->telefone);
        $engenheiro->titulo = strtoupper($request->titulo);
        $engenheiro->registro = strtoupper($request->registro);
        $engenheiro->inscricao = strtoupper($request->inscricao);
        $engenheiro->rua = strtoupper($request->rua);
        $engenheiro->numero = strtoupper($request->numero);
        $engenheiro->complemento = strtoupper($request->complemento);
        $engenheiro->cidade = strtoupper($request->cidade);
        $engenheiro->uf = strtoupper($request->uf);
        $engenheiro->email = $request->email;
        $engenheiro->cep = strtoupper($request->cep);

        $engenheiro->save();

        if($request->file("comprovante")){
            foreach($request->file("comprovante") as $file){
                $comprovante = new ComprovanteRegistro;
                $comprovante->caminho = $file->store(
                    'admin/images/comprovantes/'.Str::slug($engenheiro->cpf), 'local'
                );
                $comprovante->engenheiro_id = $engenheiro->id;
                $comprovante->save();
            }
            
        }


        $file = file_get_contents('site/emails/novo_registro.html');
        $file = str_replace("{{nome}}", $engenheiro->nome, $file);
        $file = str_replace("{{titulo}}", $engenheiro->titulo, $file);
        Email::enviar($file, "Novo registro", "", true);

        session()->flash("sucesso", "Recebemos seu pedido de cadastro. Por favor, aguarde enquanto verificamos seus dados para aprová-lo.");
        return redirect()->route("site.login");
    }

    public function  recuperar_senha(){
        return view("site.senha");
    }

    public function senha_temporaria(Request $request){
        $responsavel = Engenheiro::where([["cpf", $request->cpf], ["aprovado", true]])->first();
        if($responsavel){
            $nova_senha = Str::random(6);
            $responsavel->senha = Hash::make($nova_senha);
            $responsavel->save();
            $file = file_get_contents('site/emails/nova_senha.html');
            $file = str_replace("{{senha}}", $nova_senha, $file);
            if(Email::enviar($file, "Nova senha", $responsavel->email)){
                session()->flash("sucesso", "Uma senha temporária foi enviada para o e-mail informado no seu cadastro.");
                return redirect()->route("site.login");
            }else{
                session()->flash("erro", "Não foi possível enviar um e-mail com sua nova senha temporária no momento. Por favor, tente mais tarde.");
                return redirect()->back();
            }
        }else{
            session()->flash("erro", "Este cpf não está cadastrado para nenhum usuário.");
            return redirect()->back();
        }
    }

    public function alterar_senha(Request $request){
        $responsavel = Engenheiro::find(session()->get("engenheiro"));
        if(Hash::check($request->senha_atual, $responsavel->senha)){
            $responsavel->senha = Hash::make($request->nova_senha);
            $responsavel->save();
            session()->flash("sucesso", "Sua senha foi alterada com sucesso!");
            return redirect()->back();
        }else{
            session()->flash("erro", "A senha atual informada não está correta.");
            return redirect()->back();
        }
        
    }

    public function sair(){
        session()->forget("engenheiro");
        return redirect()->route("site.index");
    }
}
