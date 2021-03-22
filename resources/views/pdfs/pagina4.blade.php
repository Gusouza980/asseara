@php

$responsavel = \App\Models\Engenheiro::find(session()->get("engenheiro"));

@endphp

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <span style="font-family: Calibri, sans-serif; font-size: 25px; font-weight: bold; position: absolute; top: 0px; left: 250px;">LIVRO DE ORDEM</span>
    <img style="position: absolute; top: 0px; right: 30px; width: 110px;" src="{{asset('site/images/asseara-logo.png')}}" alt="">

    <div style="font-family: Calibri, sans-serif; font-size: 25px; font-weight: bold; position: absolute; top: 80px; left: 0px; height: 60px; width: 70%; border: 1px solid #D6D6D6;">
        <span style="font-family: Calibri, sans-serif; font-size: 19px; font-weight: bold; position: absolute; top: 20px; left: 150px;">01 - Termo de Abertura</span>
    </div>

    <div style="font-family: Calibri, sans-serif; font-size: 25px;position: absolute; top: 80px; left: 530px; height: 60px; width: 100%; border: 1px solid #D6D6D6;">
        <span style="font-family: Calibri, sans-serif; font-size: 12px; position: absolute; top: 5px; left: 5px;">Livro n°</span>
        <span style="font-family: Calibri, sans-serif; font-size: 15px; font-weight: bold; position: absolute; top: 35px; left: 35px; color: #C00000;">{{$rt}} {{config("globals.rts")[$conselho]}}</span>
    </div>

    <div style="position: absolute; top: 150px; left: 40px; width: 100%;">
        <div style="position: absolute; top: 5px; width: 18%; height: 35px; border: 1px solid #d6d6d6;font-size: 12px;background-color: white;">
            <span style="font-family: Calibri, sans-serif;position: absolute; top: 3px; left: 5px;">Data Início:</span>
            <span style="font-family: Calibri, sans-serif;position: absolute; top: 18px; left: 5px; font-weight: bold;">{{date('d/m/Y', strtotime($inicio))}}</span>
        </div>
        <div style="position: absolute; top: 5px; width: 18%; height: 35px; left: 18%; border: 1px solid #d6d6d6;font-size: 12px;background-color: white;">
            <span style="font-family: Calibri, sans-serif;position: absolute; top: 3px; left: 5px;">Data Conclusão: </span>
            <span style="font-family: Calibri, sans-serif;position: absolute; top: 18px; left: 5px; font-weight: bold;">{{date('d/m/Y', strtotime($conclusao))}}</span>
        </div>
        <div style="position: absolute; top: 5px; width: 18%; height: 35px; left: 36%; border: 1px solid #d6d6d6;font-size: 12px;background-color: white;">
            <span style="font-family: Calibri, sans-serif;position: absolute; top: 3px; left: 5px;">Seq. ao Livro:</span>
            <span style="font-family: Calibri, sans-serif;position: absolute; top: 18px; left: 5px; font-weight: bold;">{{$sequencia}}</span>
        </div>
        <div style="position: absolute; top: 5px; width: 18%; height: 35px;  left: 54%; border: 1px solid #d6d6d6;font-size: 12px;background-color: white;">
            <span style="font-family: Calibri, sans-serif;position: absolute; top: 3px; left: 5px;">Conselho Origem:</span>
            <span style="font-family: Calibri, sans-serif;position: absolute; top: 18px; left: 5px; font-weight: bold;">{{$conselho}}</span>
        </div>
        <div style="position: absolute; top: 5px; width: 183px; height: 35px; left: 72%; border: 1px solid #d6d6d6;font-size: 12px;background-color: white;">
            <span style="font-family: Calibri, sans-serif;position: absolute; top: 3px; left: 5px;">Vinculada ao Doc. RT:</span>
            <span style="font-family: Calibri, sans-serif;position: absolute; top: 18px; left: 5px; font-weight: bold;">{{config("globals.rts")[$conselho]}} N° {{$rt}}</span>
        </div>
    </div>

    <div style="position: absolute; top: 190px; left: 40px; width: 662px;">
        <div style="position: absolute; top: 5px; width: 100%; height: 45px; border: 1px solid #d6d6d6;font-size: 12px;background-color: white;">
            <span style="font-family: Calibri, sans-serif;position: absolute; top: 3px; left: 5px;">Área Atuação - Sub Área de atuação - Obra/Serviço - Complemento:</span>
            <span style="font-family: Calibri, sans-serif;position: absolute; top: 25px; left: 5px; font-weight: bold;">{{$atuacao}}</span>
        </div>
    </div>

    <div style="position: absolute; top: 240px; left: 40px; width: 100%;">
        <div style="position: absolute; top: 5px; width: 380px; height:35px; border: 1px solid #d6d6d6;font-size: 12px;background-color: white;">
            <span style="font-family: Calibri, sans-serif;position: absolute; top: 3px; left: 5px;">Endereço:</span>
            <span style="font-family: Calibri, sans-serif;position: absolute; top: 18px; left: 5px; font-weight: bold;">{{$endereco}}</span>
        </div>
        <div style="position: absolute; top: 5px; width: 220px; height:35px; left: 380px; border: 1px solid #d6d6d6;font-size: 12px;background-color: white;">
            <span style="font-family: Calibri, sans-serif;position: absolute; top: 3px; left: 5px;">N°:</span>
            <span style="font-family: Calibri, sans-serif;position: absolute; top: 18px; left: 5px; font-weight: bold;">{{$numero}}</span>
        </div>
        <div style="position: absolute; top: 5px; width: 220px; height:35px; left: 440px; border: 1px solid #d6d6d6;font-size: 12px;background-color: white;">
            <span style="font-family: Calibri, sans-serif;position: absolute; top: 3px; left: 5px;">Bairro:</span>
            <span style="font-family: Calibri, sans-serif;position: absolute; top: 18px; left: 5px; font-weight: bold;">{{$bairro}}</span>
        </div>
    </div>

    <div style="position: absolute; top: 280px; left: 40px; width: 100%;">
        <div style="position: absolute; top: 5px; width: 20%; height:35px; border: 1px solid #d6d6d6;font-size: 12px;background-color: white;">
            <span style="font-family: Calibri, sans-serif;position: absolute; top: 3px; left: 5px;">CEP:</span>
            <span style="font-family: Calibri, sans-serif;position: absolute; top: 18px; left: 5px; font-weight: bold;">{{$cep}} </span>
        </div>
        <div style="position: absolute; top: 5px; width: 30%; height:35px; left: 20%; border: 1px solid #d6d6d6;font-size: 12px;background-color: white;">
            <span style="font-family: Calibri, sans-serif;position: absolute; top: 3px; left: 5px;">Cidade:</span>
            <span style="font-family: Calibri, sans-serif;position: absolute; top: 18px; left: 5px; font-weight: bold;">{{$cidade}}</span>
        </div>
        <div style="position: absolute; top: 5px; width: 15%; height:35px; left:50%; border: 1px solid #d6d6d6;font-size: 12px;background-color: white;">
            <span style="font-family: Calibri, sans-serif;position: absolute; top: 3px; left: 5px;">UF:</span>
            <span style="font-family: Calibri, sans-serif;position: absolute; top: 18px; left: 5px; font-weight: bold;">{{$uf}}</span>
        </div>
        <div style="position: absolute; top: 5px; width: 229px; height:35px; left: 65%; border: 1px solid #d6d6d6;font-size: 12px;background-color: white;">
            <span style="font-family: Calibri, sans-serif;position: absolute; top: 3px; left: 5px;">Quantidade/Unidade:</span>
            <span style="font-family: Calibri, sans-serif;position: absolute; top: 18px; left: 5px; font-weight: bold;">{{$quantidade}} {{$unidade}}</span>
        </div>
    </div>

    <span style="font-family: Calibri, sans-serif;transform: rotate(270deg); position: absolute; top: 235px; left: -50px; font-size: 10px; font-weight: bold;">DADOS DO EMPREENDIMENTO</span>


    {{--  PROPRIETARIO  --}}
    <div style="position: absolute; top: 330px; left: 40px; width: 100%;">
        <div style="position: absolute; top: 5px; width: 220px; height: 35px; border: 1px solid #d6d6d6;font-size: 12px;background-color: white;">
            <span style="font-family: Calibri, sans-serif;position: absolute; top: 3px; left: 5px;">Proprietário:</span>
            <span style="font-family: Calibri, sans-serif;position: absolute; top: 18px; left: 5px; font-weight: bold;">{{$nome_proprietario}}</span>
        </div>
        <div style="position: absolute; top: 5px; width: 220px; height: 35px; left: 220px; border: 1px solid #d6d6d6;font-size: 12px;background-color: white;">
            <span style="font-family: Calibri, sans-serif;position: absolute; top: 3px; left: 5px;">RG:</span>
            <span style="font-family: Calibri, sans-serif;position: absolute; top: 18px; left: 5px; font-weight: bold;">{{$rg_proprietario}}</span>
        </div>
        <div style="position: absolute; top: 5px; width: 220px; height: 35px; left: 440px; border: 1px solid #d6d6d6;font-size: 12px;background-color: white;">
            <span style="font-family: Calibri, sans-serif;position: absolute; top: 3px; left: 5px;">CPF:</span>
            <span style="font-family: Calibri, sans-serif;position: absolute; top: 18px; left: 5px; font-weight: bold;">{{$cpf_proprietario}}</span>
        </div>
    </div>

    <div style="position: absolute; top: 370px; left: 40px; width: 100%;">
        <div style="position: absolute; top: 5px; width: 380px; height: 35px; border: 1px solid #d6d6d6;font-size: 12px;background-color: white;">
            <span style="font-family: Calibri, sans-serif;position: absolute; top: 3px; left: 5px;">Endereço:</span>
            <span style="font-family: Calibri, sans-serif;position: absolute; top: 18px; left: 5px; font-weight: bold;">{{$endereco_proprietario}}</span>
        </div>
        <div style="position: absolute; top: 5px; width: 220px; height: 35px; left: 380px; border: 1px solid #d6d6d6;font-size: 12px;background-color: white;">
            <span style="font-family: Calibri, sans-serif;position: absolute; top: 3px; left: 5px;">N°:</span>
            <span style="font-family: Calibri, sans-serif;position: absolute; top: 18px; left: 5px; font-weight: bold;">{{$numero_proprietario}}</span>
        </div>
        <div style="position: absolute; top: 5px; width: 220px; height: 35px; left: 440px; border: 1px solid #d6d6d6;font-size: 12px;background-color: white;">
            <span style="font-family: Calibri, sans-serif;position: absolute; top: 3px; left: 5px;">Compl.:</span>
            <span style="font-family: Calibri, sans-serif;position: absolute; top: 18px; left: 5px; font-weight: bold;">{{$complemento_proprietario}}</span>
        </div>
    </div>

    <div style="position: absolute; top: 410px; left: 40px; width: 100%;">
        <div style="position: absolute; top: 5px; width: 190px; height: 35px; border: 1px solid #d6d6d6;font-size: 12px;background-color: white;">
            <span style="font-family: Calibri, sans-serif;position: absolute; top: 3px; left: 5px;">Telefone:</span>
            <span style="font-family: Calibri, sans-serif;position: absolute; top: 18px; left: 5px; font-weight: bold;">{{$telefone_proprietario}}</span>
        </div>
        <div style="position: absolute; top: 5px; width: 160px; height: 35px; left: 190px; border: 1px solid #d6d6d6;font-size: 12px;background-color: white;">
            <span style="font-family: Calibri, sans-serif;position: absolute; top: 3px; left: 5px;">CEP:</span>
            <span style="font-family: Calibri, sans-serif;position: absolute; top: 18px; left: 5px; font-weight: bold;">{{$cep_proprietario}}</span>
        </div>
        <div style="position: absolute; top: 5px; width: 190px; height: 35px; left: 350px; border: 1px solid #d6d6d6;font-size: 12px;background-color: white;">
            <span style="font-family: Calibri, sans-serif;position: absolute; top: 3px; left: 5px;">Cidade:</span>
            <span style="font-family: Calibri, sans-serif;position: absolute; top: 18px; left: 5px; font-weight: bold;">{{$cidade_proprietario}}</span>
        </div>
        <div style="position: absolute; top: 5px; width: 120px; height: 35px; left: 541px; border: 1px solid #d6d6d6;font-size: 12px;background-color: white;">
            <span style="font-family: Calibri, sans-serif;position: absolute; top: 3px; left: 5px;">UF:</span>
            <span style="font-family: Calibri, sans-serif;position: absolute; top: 18px; left: 5px; font-weight: bold;">{{$uf_proprietario}}</span>
        </div>
    </div>

    <span style="font-family: Calibri, sans-serif;transform: rotate(270deg); position: absolute; top: 385px; left: -12px; font-size: 10px; font-weight: bold;">PROPRIETÁRIO</span>

    {{--  AUTOR DO PROJETO  --}}

    <div style="position: absolute; top: 460px; left: 40px; width: 100%;">
        <div style="position: absolute; top: 5px; width: 440px; height: 35px; border: 1px solid #d6d6d6;font-size: 12px;background-color: white;">
            <span style="font-family: Calibri, sans-serif;position: absolute; top: 3px; left: 5px;">Autor do Projeto:</span>
            <span style="font-family: Calibri, sans-serif;position: absolute; top: 18px; left: 5px; font-weight: bold;">{{$nome_autor}}</span>
        </div>
        <div style="position: absolute; top: 5px; width: 220px; height: 35px; left: 440px; border: 1px solid #d6d6d6;font-size: 12px;background-color: white;">
            <span style="font-family: Calibri, sans-serif;position: absolute; top: 3px; left: 5px;">Título:</span>
            <span style="font-family: Calibri, sans-serif;position: absolute; top: 18px; left: 5px; font-weight: bold;">{{$titulo_autor}}</span>
        </div>
    </div>

    <div style="position: absolute; top: 500px; left: 40px; width: 100%;">
        <div style="position: absolute; top: 5px; width: 220px; height: 35px; border: 1px solid #d6d6d6;font-size: 12px;background-color: white;">
            <span style="font-family: Calibri, sans-serif;position: absolute; top: 3px; left: 5px;">Registro no Conselho nº:</span>
            <span style="font-family: Calibri, sans-serif;position: absolute; top: 18px; left: 5px; font-weight: bold;">{{$registro_autor}}</span>
        </div>
        <div style="position: absolute; top: 5px; width: 220px; height: 35px; left: 220px; border: 1px solid #d6d6d6;font-size: 12px;background-color: white;">
            <span style="font-family: Calibri, sans-serif;position: absolute; top: 3px; left: 5px;">Documento de RT nº:</span>
            <span style="font-family: Calibri, sans-serif;position: absolute; top: 18px; left: 5px; font-weight: bold;">{{$documento_autor}}</span>
        </div>
        <div style="position: absolute; top: 5px; width: 220px; height: 35px; left: 440px; border: 1px solid #d6d6d6;font-size: 12px;background-color: white;">
            <span style="font-family: Calibri, sans-serif;position: absolute; top: 3px; left: 5px;">Inscr. Mun.:</span>
            <span style="font-family: Calibri, sans-serif;position: absolute; top: 18px; left: 5px; font-weight: bold;">{{$inscricao_autor}}</span>
        </div>
    </div>

    <div style="position: absolute; top: 540px; left: 40px; width: 100%;">
        <div style="position: absolute; top: 5px; width: 380px; height: 35px; border: 1px solid #d6d6d6;font-size: 12px;background-color: white;">
            <span style="font-family: Calibri, sans-serif;position: absolute; top: 3px; left: 5px;">Endereço:</span>
            <span style="font-family: Calibri, sans-serif;position: absolute; top: 18px; left: 5px; font-weight: bold;">{{$endereco_autor}}</span>
        </div>
        <div style="position: absolute; top: 5px; width: 220px; height: 35px; left: 380px; border: 1px solid #d6d6d6;font-size: 12px;background-color: white;">
            <span style="font-family: Calibri, sans-serif;position: absolute; top: 3px; left: 5px;">N°:</span>
            <span style="font-family: Calibri, sans-serif;position: absolute; top: 18px; left: 5px; font-weight: bold;">{{$numero_autor}}</span>
        </div>
        <div style="position: absolute; top: 5px; width: 220px; height: 35px; left: 440px; border: 1px solid #d6d6d6;font-size: 12px;background-color: white;">
            <span style="font-family: Calibri, sans-serif;position: absolute; top: 3px; left: 5px;">Compl.:</span>
            <span style="font-family: Calibri, sans-serif;position: absolute; top: 18px; left: 5px; font-weight: bold;">{{$complemento_autor}}</span>
        </div>
    </div>

    <div style="position: absolute; top: 580px; left: 40px; width: 100%;">
        <div style="position: absolute; top: 5px; width: 190px; height: 35px; border: 1px solid #d6d6d6;font-size: 12px;background-color: white;">
            <span style="font-family: Calibri, sans-serif;position: absolute; top: 3px; left: 5px;">Telefone:</span>
            <span style="font-family: Calibri, sans-serif;position: absolute; top: 18px; left: 5px; font-weight: bold;">{{$telefone_autor}}</span>
        </div>
        <div style="position: absolute; top: 5px; width: 160px; height: 35px; left: 190px; border: 1px solid #d6d6d6;font-size: 12px;background-color: white;">
            <span style="font-family: Calibri, sans-serif;position: absolute; top: 3px; left: 5px;">CEP:</span>
            <span style="font-family: Calibri, sans-serif;position: absolute; top: 18px; left: 5px; font-weight: bold;">{{$cep_autor}}</span>
        </div>
        <div style="position: absolute; top: 5px; width: 190px; height: 35px; left: 350px; border: 1px solid #d6d6d6;font-size: 12px;background-color: white;">
            <span style="font-family: Calibri, sans-serif;position: absolute; top: 3px; left: 5px;">Cidade:</span>
            <span style="font-family: Calibri, sans-serif;position: absolute; top: 18px; left: 5px; font-weight: bold;">{{$cidade_autor}}</span>
        </div>
        <div style="position: absolute; top: 5px; width: 120px; height: 35px; left: 541px; border: 1px solid #d6d6d6;font-size: 12px;background-color: white;">
            <span style="font-family: Calibri, sans-serif;position: absolute; top: 3px; left: 5px;">UF:</span>
            <span style="font-family: Calibri, sans-serif;position: absolute; top: 18px; left: 5px; font-weight: bold;">{{$uf_autor}}</span>
        </div>
    </div>

    <span style="font-family: Calibri, sans-serif;transform: rotate(270deg); position: absolute; top: 540px; left: -25px; font-size: 10px; font-weight: bold;">AUTOR DO PROJETO</span>

    {{--  Responsável Técnico  --}}

    <div style="position: absolute; top: 630px; left: 40px; width: 100%;">
        <div style="position: absolute; top: 5px; width: 440px; height: 35px; border: 1px solid #d6d6d6;font-size: 12px;background-color: white;">
            <span style="font-family: Calibri, sans-serif;position: absolute; top: 3px; left: 5px;">Responsável Técnico:</span>
            <span style="font-family: Calibri, sans-serif;position: absolute; top: 18px; left: 5px; font-weight: bold;">{{$responsavel->nome}}</span>
        </div>
        <div style="position: absolute; top: 5px; width: 220px; height: 35px; left: 440px; border: 1px solid #d6d6d6;font-size: 12px;background-color: white;">
            <span style="font-family: Calibri, sans-serif;position: absolute; top: 3px; left: 5px;">Título:</span>
            <span style="font-family: Calibri, sans-serif;position: absolute; top: 18px; left: 5px; font-weight: bold;">{{$responsavel->titulo}}</span>
        </div>
    </div>

    <div style="position: absolute; top: 670px; left: 40px; width: 100%;">
        <div style="position: absolute; top: 5px; width: 220px; height: 35px; border: 1px solid #d6d6d6;font-size: 12px;background-color: white;">
            <span style="font-family: Calibri, sans-serif;position: absolute; top: 3px; left: 5px;">Registro no Conselho nº:</span>
            <span style="font-family: Calibri, sans-serif;position: absolute; top: 18px; left: 5px; font-weight: bold;">{{$responsavel->registro}}</span>
        </div>
        <div style="position: absolute; top: 5px; width: 220px; height: 35px; left: 220px; border: 1px solid #d6d6d6;font-size: 12px;background-color: white;">
            <span style="font-family: Calibri, sans-serif;position: absolute; top: 3px; left: 5px;">Documento de RT nº:</span>
            <span style="font-family: Calibri, sans-serif;position: absolute; top: 18px; left: 5px; font-weight: bold;">{{config("globals.rts")[$conselho]}} N° {{$rt}}</span>
        </div>
        <div style="position: absolute; top: 5px; width: 220px; height: 35px; left: 440px; border: 1px solid #d6d6d6;font-size: 12px;background-color: white;">
            <span style="font-family: Calibri, sans-serif;position: absolute; top: 3px; left: 5px;">Inscr. Mun.:</span>
            <span style="font-family: Calibri, sans-serif;position: absolute; top: 18px; left: 5px; font-weight: bold;">{{$responsavel->inscricao}}</span>
        </div>
    </div>

    <div style="position: absolute; top: 710px; left: 40px; width: 100%;">
        <div style="position: absolute; top: 5px; width: 380px; height: 35px; border: 1px solid #d6d6d6;font-size: 12px;background-color: white;">
            <span style="font-family: Calibri, sans-serif;position: absolute; top: 3px; left: 5px;">Endereço:</span>
            <span style="font-family: Calibri, sans-serif;position: absolute; top: 18px; left: 5px; font-weight: bold;">{{$responsavel->rua}}</span>
        </div>
        <div style="position: absolute; top: 5px; width: 220px; height: 35px; left: 380px; border: 1px solid #d6d6d6;font-size: 12px;background-color: white;">
            <span style="font-family: Calibri, sans-serif;position: absolute; top: 3px; left: 5px;">N°:</span>
            <span style="font-family: Calibri, sans-serif;position: absolute; top: 18px; left: 5px; font-weight: bold;">{{$responsavel->numero}}</span>
        </div>
        <div style="position: absolute; top: 5px; width: 220px; height: 35px; left: 440px; border: 1px solid #d6d6d6;font-size: 12px;background-color: white;">
            <span style="font-family: Calibri, sans-serif;position: absolute; top: 3px; left: 5px;">Compl.:</span>
            <span style="font-family: Calibri, sans-serif;position: absolute; top: 18px; left: 5px; font-weight: bold;">{{$responsavel->complemento}}</span>
        </div>
    </div>

    <div style="position: absolute; top: 750px; left: 40px; width: 100%;">
        <div style="position: absolute; top: 5px; width: 190px; height: 35px; border: 1px solid #d6d6d6;font-size: 12px;background-color: white;">
            <span style="font-family: Calibri, sans-serif;position: absolute; top: 3px; left: 5px;">Telefone:</span>
            <span style="font-family: Calibri, sans-serif;position: absolute; top: 18px; left: 5px; font-weight: bold;">{{$responsavel->telefone}}</span>
        </div>
        <div style="position: absolute; top: 5px; width: 160px; height: 35px; left: 190px; border: 1px solid #d6d6d6;font-size: 12px;background-color: white;">
            <span style="font-family: Calibri, sans-serif;position: absolute; top: 3px; left: 5px;">CEP:</span>
            <span style="font-family: Calibri, sans-serif;position: absolute; top: 18px; left: 5px; font-weight: bold;">{{$responsavel->cep}}</span>
        </div>
        <div style="position: absolute; top: 5px; width: 190px; height: 35px; left: 350px; border: 1px solid #d6d6d6;font-size: 12px;background-color: white;">
            <span style="font-family: Calibri, sans-serif;position: absolute; top: 3px; left: 5px;">Cidade:</span>
            <span style="font-family: Calibri, sans-serif;position: absolute; top: 18px; left: 5px; font-weight: bold;">{{$responsavel->cidade}}</span>
        </div>
        <div style="position: absolute; top: 5px; width: 120px; height: 35px; left: 541px; border: 1px solid #d6d6d6;font-size: 12px;background-color: white;">
            <span style="font-family: Calibri, sans-serif;position: absolute; top: 3px; left: 5px;">UF:</span>
            <span style="font-family: Calibri, sans-serif;position: absolute; top: 18px; left: 5px; font-weight: bold;">{{$responsavel->uf}}</span>
        </div>
    </div>

    <span style="font-family: Calibri, sans-serif;transform: rotate(270deg); position: absolute; top: 705px; left: -35px; font-size: 10px; font-weight: bold;">RESPONSÁVEL TÉCNICO</span>

    <div style="font-family: Calibri, sans-serif; position: absolute; top: 780px; left: 40px; width: 100%; text-align: center;">
        <span style="font-family: Calibri, sans-serif; font-size: 13px; position: absolute; top: 25px; text-align: left;">
            DECLARO que, em cumprimento à legislação vigente, retirei o presente Livro de Ordem completo, e que&nbsp;efetuarei a baixa da correspondente {{config("globals.rts")[$conselho]}} junto ao {{$conselho}} na ocasião do término da Atividade.
        </span>
    </div>

    <div style="font-family: Calibri, sans-serif; position: absolute; top: 840px; width: 100%; text-align: center;">
        <span style="font-family: Calibri, sans-serif; font-size: 13px; position: absolute; top: 25px; left: 35%;">
            Alfenas - MG, {{$data_atual->format('d / F / Y')}}
        </span>
    </div>

    <div style="position: absolute; top: 930px; left: 40px; width:270px; border-bottom: 1px solid black;">
    </div>

    <div style="position: absolute; top: 930px; left: 430px; width:270px; border-bottom: 1px solid black;">
    </div>

    <span style="font-family: Calibri, sans-serif;position: absolute; top: 935px; left: 40px; font-size: 12px; font-weight: bold;">{{$responsavel->nome}}</span>
    <span style="font-family: Calibri, sans-serif;position: absolute; top: 950px; left: 40px; font-size: 12px;">Profissional RT:</span>

    <span style="font-family: Calibri, sans-serif;position: absolute; top: 935px; left: 430px; font-size: 12px; font-weight: bold;">ASSEARA</span>

    <div style="position: absolute; top: 990px; left: 40px; width:270px; border-bottom: 1px solid black;">
    </div>

    <div style="position: absolute; top: 990px; left: 430px; width:270px; border-bottom: 1px solid black;">
    </div>

    <span style="font-family: Calibri, sans-serif;position: absolute; top: 995px; left: 40px; font-size: 12px;">1 - Nome e Carimbo</span>

    <span style="font-family: Calibri, sans-serif;position: absolute; top: 995px; left: 430px; font-size: 12px;">2 - Nome e Carimbo</span>

    <span style="font-family: Calibri, sans-serif;position: absolute; top: 1020px; left: 40px; font-size: 11px;">1ª Via Proprietário - 2º Via Entidade/Conselho - 3ª Via Profissional Responsável</span>
    <span style="font-family: Calibri, sans-serif;position: absolute; top: 1020px; right: 0; font-size: 11px;">Página 1 / 12</span>

</body>
</html>