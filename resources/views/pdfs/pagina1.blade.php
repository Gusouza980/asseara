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
    <img style="position: absolute; top: 10px; right: 30px; width: 150px;" src="{{asset('site/images/asseara-logo.png')}}" alt="">
    <div style="position: absolute; top: 105px; width: 100%; background-color: #0060A8; height: 60px; text-align: right; padding-right: 30px;">
        <h1 style="color: white; font-family: Calibri, sans-serif; font-size: 35px; font-weight: bold; position: absolute; top: -25px; right: 30;">LIVRO DE ORDEM</h1>
        <h3 style="color: white; font-family: Calibri, sans-serif; font-size: 11px;  position: absolute; top: 30px; right: 30;">CADERNETA DE OBRAS do Município de Alfenas (atende a Lei Municipal 3839/2005 e a Res. Confea 1094/2017)</h3>
    </div>
    <div style="background-color: #C00000; position: absolute; top: 180px; height: 30px; width: 100%;">
        <h3 style="position: absolute; top:-5px; left: 37mm; color: white; font-family: Calibri, sans-serif; font-size: 13px; font-weight: bolder;">FICHA DE ABERTURA: (DADOS DE PREENCHIMENTO OBRIGATÓRIO)</h3>
    </div>

    <div style="position: absolute; top: 220px; left: 40px; width: 100%;">
        <div style="position: absolute; top: 5px; width: 220px; height: 35px; border: 1px solid #d6d6d6;font-size: 12px;background-color: #f2f2f2;">
            <span style="font-family: Calibri, sans-serif;position: absolute; top: 3px; left: 5px;">Sequência ao Livro de Ordem nº:</span>
            <span style="font-family: Calibri, sans-serif;position: absolute; top: 18px; left: 5px; font-weight: bold; color: #1161A8;">{{$sequencia}}</span>
        </div>
        <div style="position: absolute; top: 5px; width: 220px; height: 35px; left: 220px; border: 1px solid #d6d6d6;font-size: 12px;background-color: #f2f2f2;">
            <span style="font-family: Calibri, sans-serif;position: absolute; top: 3px; left: 5px;">Conselho de Origem:</span>
            <span style="font-family: Calibri, sans-serif;position: absolute; top: 18px; left: 5px; font-weight: bold; color: #1161A8;">{{$conselho}}</span>
        </div>
        <div style="position: absolute; top: 5px; width: 220px; height: 35px; left: 440px; border: 1px solid #d6d6d6;font-size: 12px;background-color: #f2f2f2;">
            <span style="font-family: Calibri, sans-serif;position: absolute; top: 3px; left: 5px;">Documento de RT:</span>
            <span style="font-family: Calibri, sans-serif;position: absolute; top: 18px; left: 5px; font-weight: bold;">{{config("globals.rts")[$conselho]}} N° <span style="color: #1161A8;">{{$rt}}</span></span>
        </div>
    </div>

    <div style="position: absolute; top: 260px; left: 40px; width: 100%;">
        <div style="position: absolute; top: 5px; width: 220px; height: 35px; border: 1px solid #d6d6d6;font-size: 12px;background-color: #FFF;">
            <span style="font-family: Calibri, sans-serif;position: absolute; top: 3px; left: 5px;">Livro nº:</span>
            <span style="font-family: Calibri, sans-serif;position: absolute; top: 18px; left: 5px; font-weight: bold; color: #C00000;">{{$rt}} {{config("globals.rts")[$conselho]}}</span>
        </div>
        <div style="position: absolute; top: 5px; width: 220px; height: 35px; left: 220px; border: 1px solid #d6d6d6;font-size: 12px;background-color: #FFF;">
            <span style="font-family: Calibri, sans-serif;position: absolute; top: 3px; left: 5px;">Data Início:</span>
            <span style="font-family: Calibri, sans-serif;position: absolute; top: 18px; left: 5px; font-weight: bold; color: #C00000;">{{date("d/m/Y", strtotime($inicio))}}</span>
        </div>
        <div style="position: absolute; top: 5px; width: 220px; height: 35px; left: 440px; border: 1px solid #d6d6d6;font-size: 12px;background-color: #f2f2f2;">
            <span style="font-family: Calibri, sans-serif;position: absolute; top: 3px; left: 5px;">Data Conclusão:</span>
            <span style="font-family: Calibri, sans-serif;position: absolute; top: 18px; left: 5px; font-weight: bold; color: #1161A8;">{{date("d/m/Y", strtotime($conclusao))}}</span>
        </div>
    </div>

    <div style="position: absolute; top: 300px; left: 40px; width: 662px;">
        <div style="position: absolute; top: 5px; width: 100%; height: 45px; border: 1px solid #d6d6d6;font-size: 12px;background-color: #f2f2f2;">
            <span style="font-family: Calibri, sans-serif;position: absolute; top: 3px; left: 5px;">Área Atuação - Sub Área de atuação - Obra/Serviço - Complemento:</span>
            <span style="font-family: Calibri, sans-serif;position: absolute; top: 20px; left: 5px; font-weight: bold; color: #1161A8;">{{$atuacao}}</span>
        </div>
    </div>

    <div style="position: absolute; top: 350px; left: 40px; width: 100%;">
        <div style="position: absolute; top: 5px; width: 380px; height: 35px; border: 1px solid #d6d6d6;font-size: 12px;background-color: #f2f2f2;">
            <span style="font-family: Calibri, sans-serif;position: absolute; top: 3px; left: 5px;">Endereço:</span>
            <span style="font-family: Calibri, sans-serif;position: absolute; top: 18px; left: 5px; font-weight: bold; color: #1161A8;">{{$endereco}}</span>
        </div>
        <div style="position: absolute; top: 5px; width: 220px; height: 35px; left: 380px; border: 1px solid #d6d6d6;font-size: 12px;background-color: #f2f2f2;">
            <span style="font-family: Calibri, sans-serif;position: absolute; top: 3px; left: 5px;">N°:</span>
            <span style="font-family: Calibri, sans-serif;position: absolute; top: 18px; left: 5px; font-weight: bold; color: #1161A8;">{{$numero}}</span>
        </div>
        <div style="position: absolute; top: 5px; width: 220px; height: 35px; left: 440px; border: 1px solid #d6d6d6;font-size: 12px;background-color: #f2f2f2;">
            <span style="font-family: Calibri, sans-serif;position: absolute; top: 3px; left: 5px;">Bairro:</span>
            <span style="font-family: Calibri, sans-serif;position: absolute; top: 18px; left: 5px; font-weight: bold;color: #1161A8;">{{$bairro}}</span>
        </div>
    </div>

    <div style="position: absolute; top: 390px; left: 40px; width: 100%;">
        <div style="position: absolute; top: 5px; width: 150px; height: 35px; border: 1px solid #d6d6d6;font-size: 12px;background-color: #f2f2f2;">
            <span style="font-family: Calibri, sans-serif;position: absolute; top: 3px; left: 5px;">CEP:</span>
            <span style="font-family: Calibri, sans-serif;position: absolute; top: 18px; left: 5px; font-weight: bold; color: #1161A8;">{{$cep}}</span>
        </div>
        <div style="position: absolute; top: 5px; width: 200px; height: 35px; left: 150px; border: 1px solid #d6d6d6;font-size: 12px;background-color: #f2f2f2;">
            <span style="font-family: Calibri, sans-serif;position: absolute; top: 3px; left: 5px;">Cidade:</span>
            <span style="font-family: Calibri, sans-serif;position: absolute; top: 18px; left: 5px; font-weight: bold; color: #1161A8;">{{$cidade}}</span>
        </div>
        <div style="position: absolute; top: 5px; width: 60px; height: 35px; left: 350px; border: 1px solid #d6d6d6;font-size: 12px;background-color: #f2f2f2;">
            <span style="font-family: Calibri, sans-serif;position: absolute; top: 3px; left: 5px;">UF:</span>
            <span style="font-family: Calibri, sans-serif;position: absolute; top: 18px; left: 5px; font-weight: bold;color: #1161A8;">{{$uf}}</span>
        </div>
        <div style="position: absolute; top: 5px; width: 250px; height: 35px; left: 410px; border: 1px solid #d6d6d6;font-size: 12px;background-color: #f2f2f2;">
            <span style="font-family: Calibri, sans-serif;position: absolute; top: 3px; left: 5px;">Quantidade/Unidade:</span>
            <span style="font-family: Calibri, sans-serif;position: absolute; top: 18px; left: 5px; font-weight: bold;color: #1161A8;">{{$quantidade}} {{$unidade}}</span>
        </div>
    </div>

    <span style="font-family: Calibri, sans-serif;transform: rotate(270deg); position: absolute; top: 320px; left: -65px; font-size: 12px; font-weight: bold;">DADOS DO EMPREENDIMENTO</span>

    <div style="position: absolute; top: 445px; left: 40px; width: 100%;">
        <div style="position: absolute; top: 5px; width: 220px; height: 35px; border: 1px solid #d6d6d6;font-size: 12px;background-color: #f2f2f2;">
            <span style="font-family: Calibri, sans-serif;position: absolute; top: 3px; left: 5px;">Proprietário:</span>
            <span style="font-family: Calibri, sans-serif;position: absolute; top: 18px; left: 5px; font-weight: bold; color: #1161A8;">{{$nome_proprietario}}</span>
        </div>
        <div style="position: absolute; top: 5px; width: 220px; height: 35px; left: 220px; border: 1px solid #d6d6d6;font-size: 12px;background-color: #f2f2f2;">
            <span style="font-family: Calibri, sans-serif;position: absolute; top: 3px; left: 5px;">RG:</span>
            <span style="font-family: Calibri, sans-serif;position: absolute; top: 18px; left: 5px; font-weight: bold; color: #1161A8;">{{$rg_proprietario}}</span>
        </div>
        <div style="position: absolute; top: 5px; width: 220px; height: 35px; left: 440px; border: 1px solid #d6d6d6;font-size: 12px;background-color: #f2f2f2;">
            <span style="font-family: Calibri, sans-serif;position: absolute; top: 3px; left: 5px;">CPF:</span>
            <span style="font-family: Calibri, sans-serif;position: absolute; top: 18px; left: 5px; font-weight: bold; color: #1161A8;">{{$rg_proprietario}}</span>
        </div>
    </div>

    <div style="position: absolute; top: 485px; left: 40px; width: 100%;">
        <div style="position: absolute; top: 5px; width: 380px; height: 35px; border: 1px solid #d6d6d6;font-size: 12px;background-color: #f2f2f2;">
            <span style="font-family: Calibri, sans-serif;position: absolute; top: 3px; left: 5px;">Endereço:</span>
            <span style="font-family: Calibri, sans-serif;position: absolute; top: 18px; left: 5px; font-weight: bold; color: #1161A8;">{{$endereco_proprietario}}</span>
        </div>
        <div style="position: absolute; top: 5px; width: 220px; height: 35px; left: 380px; border: 1px solid #d6d6d6;font-size: 12px;background-color: #f2f2f2;">
            <span style="font-family: Calibri, sans-serif;position: absolute; top: 3px; left: 5px;">N°:</span>
            <span style="font-family: Calibri, sans-serif;position: absolute; top: 18px; left: 5px; font-weight: bold; color: #1161A8;">{{$numero_proprietario}}</span>
        </div>
        <div style="position: absolute; top: 5px; width: 220px; height: 35px; left: 440px; border: 1px solid #d6d6d6;font-size: 12px;background-color: #f2f2f2;">
            <span style="font-family: Calibri, sans-serif;position: absolute; top: 3px; left: 5px;">Compl.:</span>
            <span style="font-family: Calibri, sans-serif;position: absolute; top: 18px; left: 5px; font-weight: bold;color: #1161A8;">{{$complemento_proprietario}}</span>
        </div>
    </div>

    <div style="position: absolute; top: 525px; left: 40px; width: 100%;">
        <div style="position: absolute; top: 5px; width: 190px; height: 35px; border: 1px solid #d6d6d6;font-size: 12px;background-color: #f2f2f2;">
            <span style="font-family: Calibri, sans-serif;position: absolute; top: 3px; left: 5px;">Telefone:</span>
            <span style="font-family: Calibri, sans-serif;position: absolute; top: 18px; left: 5px; font-weight: bold; color: #1161A8;">{{$telefone_proprietario}}</span>
        </div>
        <div style="position: absolute; top: 5px; width: 160px; height: 35px; left: 190px; border: 1px solid #d6d6d6;font-size: 12px;background-color: #f2f2f2;">
            <span style="font-family: Calibri, sans-serif;position: absolute; top: 3px; left: 5px;">CEP:</span>
            <span style="font-family: Calibri, sans-serif;position: absolute; top: 18px; left: 5px; font-weight: bold; color: #1161A8;">{{$cep_proprietario}}</span>
        </div>
        <div style="position: absolute; top: 5px; width: 190px; height: 35px; left: 350px; border: 1px solid #d6d6d6;font-size: 12px;background-color: #f2f2f2;">
            <span style="font-family: Calibri, sans-serif;position: absolute; top: 3px; left: 5px;">Cidade:</span>
            <span style="font-family: Calibri, sans-serif;position: absolute; top: 18px; left: 5px; font-weight: bold;color: #1161A8;">{{$cidade_proprietario}}</span>
        </div>
        <div style="position: absolute; top: 5px; width: 120px; height: 35px; left: 541px; border: 1px solid #d6d6d6;font-size: 12px;background-color: #f2f2f2;">
            <span style="font-family: Calibri, sans-serif;position: absolute; top: 3px; left: 5px;">UF:</span>
            <span style="font-family: Calibri, sans-serif;position: absolute; top: 18px; left: 5px; font-weight: bold;color: #1161A8;">{{$uf_proprietario}}</span>
        </div>
    </div>

    <span style="font-family: Calibri, sans-serif;transform: rotate(270deg); position: absolute; top: 500px; left: -20px; font-size: 12px; font-weight: bold;">PROPRIETÁRIO</span>

    <div style="position: absolute; top: 580px; left: 40px; width: 100%;">
        <div style="position: absolute; top: 5px; width: 440px; height: 35px; border: 1px solid #d6d6d6;font-size: 12px;background-color: #f2f2f2;">
            <span style="font-family: Calibri, sans-serif;position: absolute; top: 3px; left: 5px;">Autor do Projeto:</span>
            <span style="font-family: Calibri, sans-serif;position: absolute; top: 18px; left: 5px; font-weight: bold; color: #1161A8;">{{$nome_autor}}</span>
        </div>
        <div style="position: absolute; top: 5px; width: 220px; height: 35px; left: 440px; border: 1px solid #d6d6d6;font-size: 12px;background-color: #f2f2f2;">
            <span style="font-family: Calibri, sans-serif;position: absolute; top: 3px; left: 5px;">Título:</span>
            <span style="font-family: Calibri, sans-serif;position: absolute; top: 18px; left: 5px; font-weight: bold; color: #1161A8;">{{$titulo_autor}}</span>
        </div>
    </div>

    <div style="position: absolute; top: 620px; left: 40px; width: 100%;">
        <div style="position: absolute; top: 5px; width: 220px; height: 35px; border: 1px solid #d6d6d6;font-size: 12px;background-color: #f2f2f2;">
            <span style="font-family: Calibri, sans-serif;position: absolute; top: 3px; left: 5px;">Registro no Conselho nº:</span>
            <span style="font-family: Calibri, sans-serif;position: absolute; top: 18px; left: 5px; font-weight: bold; color: #1161A8;">{{$registro_autor}}</span>
        </div>
        <div style="position: absolute; top: 5px; width: 220px; height: 35px; left: 220px; border: 1px solid #d6d6d6;font-size: 12px;background-color: #f2f2f2;">
            <span style="font-family: Calibri, sans-serif;position: absolute; top: 3px; left: 5px;">Documento de RT nº:</span>
            <span style="font-family: Calibri, sans-serif;position: absolute; top: 18px; left: 5px; font-weight: bold; color: #1161A8;">{{$documento_autor}}</span>
        </div>
        <div style="position: absolute; top: 5px; width: 220px; height: 35px; left: 440px; border: 1px solid #d6d6d6;font-size: 12px;background-color: #f2f2f2;">
            <span style="font-family: Calibri, sans-serif;position: absolute; top: 3px; left: 5px;">Inscr. Mun.:</span>
            <span style="font-family: Calibri, sans-serif;position: absolute; top: 18px; left: 5px; font-weight: bold; color: #1161A8;">{{$inscricao_autor}}</span>
        </div>
    </div>

    <div style="position: absolute; top: 660px; left: 40px; width: 100%;">
        <div style="position: absolute; top: 5px; width: 380px; height: 35px; border: 1px solid #d6d6d6;font-size: 12px;background-color: #f2f2f2;">
            <span style="font-family: Calibri, sans-serif;position: absolute; top: 3px; left: 5px;">Endereço:</span>
            <span style="font-family: Calibri, sans-serif;position: absolute; top: 18px; left: 5px; font-weight: bold; color: #1161A8;">{{$endereco_autor}}</span>
        </div>
        <div style="position: absolute; top: 5px; width: 220px; height: 35px; left: 380px; border: 1px solid #d6d6d6;font-size: 12px;background-color: #f2f2f2;">
            <span style="font-family: Calibri, sans-serif;position: absolute; top: 3px; left: 5px;">N°:</span>
            <span style="font-family: Calibri, sans-serif;position: absolute; top: 18px; left: 5px; font-weight: bold; color: #1161A8;">{{$numero_autor}}</span>
        </div>
        <div style="position: absolute; top: 5px; width: 220px; height: 35px; left: 440px; border: 1px solid #d6d6d6;font-size: 12px;background-color: #f2f2f2;">
            <span style="font-family: Calibri, sans-serif;position: absolute; top: 3px; left: 5px;">Compl.:</span>
            <span style="font-family: Calibri, sans-serif;position: absolute; top: 18px; left: 5px; font-weight: bold;color: #1161A8;">{{$complemento_autor}}</span>
        </div>
    </div>

    <div style="position: absolute; top: 700px; left: 40px; width: 100%;">
        <div style="position: absolute; top: 5px; width: 190px; height: 35px; border: 1px solid #d6d6d6;font-size: 12px;background-color: #f2f2f2;">
            <span style="font-family: Calibri, sans-serif;position: absolute; top: 3px; left: 5px;">Telefone:</span>
            <span style="font-family: Calibri, sans-serif;position: absolute; top: 18px; left: 5px; font-weight: bold; color: #1161A8;">{{$telefone_autor}}</span>
        </div>
        <div style="position: absolute; top: 5px; width: 160px; height: 35px; left: 190px; border: 1px solid #d6d6d6;font-size: 12px;background-color: #f2f2f2;">
            <span style="font-family: Calibri, sans-serif;position: absolute; top: 3px; left: 5px;">CEP:</span>
            <span style="font-family: Calibri, sans-serif;position: absolute; top: 18px; left: 5px; font-weight: bold; color: #1161A8;">{{$cep_autor}}</span>
        </div>
        <div style="position: absolute; top: 5px; width: 190px; height: 35px; left: 350px; border: 1px solid #d6d6d6;font-size: 12px;background-color: #f2f2f2;">
            <span style="font-family: Calibri, sans-serif;position: absolute; top: 3px; left: 5px;">Cidade:</span>
            <span style="font-family: Calibri, sans-serif;position: absolute; top: 18px; left: 5px; font-weight: bold;color: #1161A8;">{{$cidade_autor}}</span>
        </div>
        <div style="position: absolute; top: 5px; width: 120px; height: 35px; left: 541px; border: 1px solid #d6d6d6;font-size: 12px;background-color: #f2f2f2;">
            <span style="font-family: Calibri, sans-serif;position: absolute; top: 3px; left: 5px;">UF:</span>
            <span style="font-family: Calibri, sans-serif;position: absolute; top: 18px; left: 5px; font-weight: bold;color: #1161A8;">{{$uf_autor}}</span>
        </div>
    </div>

    <span style="font-family: Calibri, sans-serif;transform: rotate(270deg); position: absolute; top: 655px; left: -37px; font-size: 12px; font-weight: bold;">AUTOR DO PROJETO</span>

    <div style="position: absolute; top: 755px; left: 40px; width: 100%;">
        <div style="position: absolute; top: 5px; width: 440px; height: 35px; border: 1px solid #d6d6d6;font-size: 12px;background-color: #f2f2f2;">
            <span style="font-family: Calibri, sans-serif;position: absolute; top: 3px; left: 5px;">Responsável Técnico:</span>
            <span style="font-family: Calibri, sans-serif;position: absolute; top: 18px; left: 5px; font-weight: bold; color: #1161A8;">{{$responsavel->nome}}</span>
        </div>
        <div style="position: absolute; top: 5px; width: 220px; height: 35px; left: 440px; border: 1px solid #d6d6d6;font-size: 12px;background-color: #f2f2f2;">
            <span style="font-family: Calibri, sans-serif;position: absolute; top: 3px; left: 5px;">Título:</span>
            <span style="font-family: Calibri, sans-serif;position: absolute; top: 18px; left: 5px; font-weight: bold; color: #1161A8;">{{$responsavel->titulo}}</span>
        </div>
    </div>

    <div style="position: absolute; top: 795px; left: 40px; width: 100%;">
        <div style="position: absolute; top: 5px; width: 220px; height: 35px; border: 1px solid #d6d6d6;font-size: 12px;background-color: #f2f2f2;">
            <span style="font-family: Calibri, sans-serif;position: absolute; top: 3px; left: 5px;">Registro no Conselho nº:</span>
            <span style="font-family: Calibri, sans-serif;position: absolute; top: 18px; left: 5px; font-weight: bold; color: #1161A8;">{{$responsavel->registro}}</span>
        </div>
        <div style="position: absolute; top: 5px; width: 220px; height: 35px; left: 220px; border: 1px solid #d6d6d6;font-size: 12px;background-color: #f2f2f2;">
            <span style="font-family: Calibri, sans-serif;position: absolute; top: 3px; left: 5px;">Documento de RT nº:</span>
            <span style="font-family: Calibri, sans-serif;position: absolute; top: 18px; left: 5px; font-weight: bold; color: #1161A8;">{{config("globals.rts")[$conselho]}} N° {{$rt}}</span>
        </div>
        <div style="position: absolute; top: 5px; width: 220px; height: 35px; left: 440px; border: 1px solid #d6d6d6;font-size: 12px;background-color: #f2f2f2;">
            <span style="font-family: Calibri, sans-serif;position: absolute; top: 3px; left: 5px;">Inscr. Mun.:</span>
            <span style="font-family: Calibri, sans-serif;position: absolute; top: 18px; left: 5px; font-weight: bold; color: #1161A8;">{{$responsavel->inscricao}}</span>
        </div>
    </div>

    <div style="position: absolute; top: 835px; left: 40px; width: 100%;">
        <div style="position: absolute; top: 5px; width: 380px; height: 35px; border: 1px solid #d6d6d6;font-size: 12px;background-color: #f2f2f2;">
            <span style="font-family: Calibri, sans-serif;position: absolute; top: 3px; left: 5px;">Endereço:</span>
            <span style="font-family: Calibri, sans-serif;position: absolute; top: 18px; left: 5px; font-weight: bold; color: #1161A8;">{{$responsavel->rua}}</span>
        </div>
        <div style="position: absolute; top: 5px; width: 220px; height: 35px; left: 380px; border: 1px solid #d6d6d6;font-size: 12px;background-color: #f2f2f2;">
            <span style="font-family: Calibri, sans-serif;position: absolute; top: 3px; left: 5px;">N°:</span>
            <span style="font-family: Calibri, sans-serif;position: absolute; top: 18px; left: 5px; font-weight: bold; color: #1161A8;">{{$responsavel->numero}}</span>
        </div>
        <div style="position: absolute; top: 5px; width: 220px; height: 35px; left: 440px; border: 1px solid #d6d6d6;font-size: 12px;background-color: #f2f2f2;">
            <span style="font-family: Calibri, sans-serif;position: absolute; top: 3px; left: 5px;">Compl.:</span>
            <span style="font-family: Calibri, sans-serif;position: absolute; top: 18px; left: 5px; font-weight: bold;color: #1161A8;">{{$responsavel->complemento}}</span>
        </div>
    </div>

    <div style="position: absolute; top: 875px; left: 40px; width: 100%;">
        <div style="position: absolute; top: 5px; width: 190px; height: 35px; border: 1px solid #d6d6d6;font-size: 12px;background-color: #f2f2f2;">
            <span style="font-family: Calibri, sans-serif;position: absolute; top: 3px; left: 5px;">Telefone:</span>
            <span style="font-family: Calibri, sans-serif;position: absolute; top: 18px; left: 5px; font-weight: bold; color: #1161A8;">{{$responsavel->telefone}}</span>
        </div>
        <div style="position: absolute; top: 5px; width: 160px; height: 35px; left: 190px; border: 1px solid #d6d6d6;font-size: 12px;background-color: #f2f2f2;">
            <span style="font-family: Calibri, sans-serif;position: absolute; top: 3px; left: 5px;">CEP:</span>
            <span style="font-family: Calibri, sans-serif;position: absolute; top: 18px; left: 5px; font-weight: bold; color: #1161A8;">{{$responsavel->cep}}</span>
        </div>
        <div style="position: absolute; top: 5px; width: 190px; height: 35px; left: 350px; border: 1px solid #d6d6d6;font-size: 12px;background-color: #f2f2f2;">
            <span style="font-family: Calibri, sans-serif;position: absolute; top: 3px; left: 5px;">Cidade:</span>
            <span style="font-family: Calibri, sans-serif;position: absolute; top: 18px; left: 5px; font-weight: bold;color: #1161A8;">{{$responsavel->cidade}}</span>
        </div>
        <div style="position: absolute; top: 5px; width: 120px; height: 35px; left: 541px; border: 1px solid #d6d6d6;font-size: 12px;background-color: #f2f2f2;">
            <span style="font-family: Calibri, sans-serif;position: absolute; top: 3px; left: 5px;">UF:</span>
            <span style="font-family: Calibri, sans-serif;position: absolute; top: 18px; left: 5px; font-weight: bold;color: #1161A8;">{{$responsavel->uf}}</span>
        </div>
    </div>

    <span style="font-family: Calibri, sans-serif;transform: rotate(270deg); position: absolute; top: 830px; left: -49px; font-size: 12px; font-weight: bold;">RESPONSÁVEL TÉCNICO</span>

    <div style="position: absolute; top: 970px; left: 40px; width:270px; border-bottom: 1px solid black;">
    </div>

    <div style="position: absolute; top: 970px; left: 430px; width:270px; border-bottom: 1px solid black;">
    </div>

    <span style="font-family: Calibri, sans-serif;position: absolute; top: 980px; left: 40px; font-size: 12px; font-weight: bold;">{{$responsavel->nome}}</span>
    <span style="font-family: Calibri, sans-serif;position: absolute; top: 995px; left: 40px; font-size: 12px;">Profissional RT:</span>

    <span style="font-family: Calibri, sans-serif;position: absolute; top: 980px; left: 430px; font-size: 12px; font-weight: bold;">ASSEARA</span>
    
</body>
</html>