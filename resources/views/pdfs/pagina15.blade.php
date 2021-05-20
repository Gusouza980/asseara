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

    <div style="text-align:center; font-family: Calibri, sans-serif; font-size: 25px; font-weight: bold; position: absolute; top: 80px; left: 0px; height: 60px; width: 70%; border: 1px solid #D6D6D6;">
        <span style="font-family: Calibri, sans-serif; font-size: 19px; font-weight: bold; position: absolute; top: 8px; left: 40px;">10 - Termo de Conclusão e/ou Encerramento (outros procedimentos)</span>
    </div>

    <div style="font-family: Calibri, sans-serif; font-size: 25px;position: absolute; top: 80px; left: 530px; height: 60px; width: 100%; border: 1px solid #D6D6D6;">
        <span style="font-family: Calibri, sans-serif; font-size: 12px; position: absolute; top: 5px; left: 5px;">Livro n°</span>
        <span style="font-family: Calibri, sans-serif; font-size: 15px; font-weight: bold; position: absolute; top: 35px; left: 35px; color: #C00000;">{{$rt}} {{config("globals.rts")[$conselho]}}</span>
    </div>

    <div style="position: absolute; top: 150px; left: 40px; width: 100%;">
        <div style="position: absolute; top: 5px; width: 40%; height: 35px; border: 1px solid #d6d6d6;font-size: 12px;background-color: white;">
            <span style="font-family: Calibri, sans-serif;position: absolute; top: 3px; left: 5px;">Proprietário:</span>
            <span style="font-family: Calibri, sans-serif;position: absolute; top: 18px; left: 5px; font-weight: bold;">{{$nome_proprietario}}</span>
        </div>
        <div style="position: absolute; top: 5px; width: 30%; height: 35px; left: 40%; border: 1px solid #d6d6d6;font-size: 12px;background-color: white;">
            <span style="font-family: Calibri, sans-serif;position: absolute; top: 3px; left: 5px;">RG: </span>
            <span style="font-family: Calibri, sans-serif;position: absolute; top: 18px; left: 5px; font-weight: bold;">{{$rg_proprietario}}</span>
        </div>
        <div style="position: absolute; top: 5px; width: 30%; height: 35px; left: 70%; border: 1px solid #d6d6d6;font-size: 12px;background-color: white;">
            <span style="font-family: Calibri, sans-serif;position: absolute; top: 3px; left: 5px;">CPF:</span>
            <span style="font-family: Calibri, sans-serif;position: absolute; top: 18px; left: 5px; font-weight: bold;">{{$cpf_proprietario}}</span>
        </div>
    </div>

    <div style="position: absolute; top: 190px; left: 40px; width: 662px;">
        <div style="position: absolute; top: 5px; width: 27%; height: 35px; border: 1px solid #d6d6d6;font-size: 12px;background-color: white;">
            <span style="font-family: Calibri, sans-serif;position: absolute; top: 3px; left: 5px;">Nº Processo ou CNO:</span>
            <span style="font-family: Calibri, sans-serif;position: absolute; top: 18px; left: 5px; font-weight: bold;"></span>
        </div>
        <div style="position: absolute; top: 5px; width: 73%; left: 27%; height: 35px; border: 1px solid #d6d6d6;font-size: 12px;background-color: white;">
            <span style="font-family: Calibri, sans-serif;position: absolute; top: 3px; left: 5px;">Área Atuação - Sub Área de atuação - Obra/Serviço - Complemento:</span>
            <span style="font-family: Calibri, sans-serif;position: absolute; top: 18px; left: 5px; font-weight: bold;">{{mb_strtoupper($atuacao, 'UTF-8')}}</span>
        </div>
    </div>

    <div style="position: absolute; top: 230px; left: 40px; width: 100%;">
        <div style="position: absolute; top: 5px; width: 60%; height:35px; border: 1px solid #d6d6d6;font-size: 12px;background-color: white;">
            <span style="font-family: Calibri, sans-serif;position: absolute; top: 3px; left: 5px;">Endereço:</span>
            <span style="font-family: Calibri, sans-serif;position: absolute; top: 18px; left: 5px; font-weight: bold;">{{$endereco}}</span>
        </div>
        <div style="position: absolute; top: 5px; width: 15%; height:35px; left: 60%; border: 1px solid #d6d6d6;font-size: 12px;background-color: white;">
            <span style="font-family: Calibri, sans-serif;position: absolute; top: 3px; left: 5px;">N°:</span>
            <span style="font-family: Calibri, sans-serif;position: absolute; top: 18px; left: 5px; font-weight: bold;">{{$numero}}</span>
        </div>
        <div style="position: absolute; top: 5px; width: 25%; height:35px; left: 75%; border: 1px solid #d6d6d6;font-size: 12px;background-color: white;">
            <span style="font-family: Calibri, sans-serif;position: absolute; top: 3px; left: 5px;">Bairro:</span>
            <span style="font-family: Calibri, sans-serif;position: absolute; top: 18px; left: 5px; font-weight: bold;">{{$bairro}}</span>
        </div>
    </div>

    <div style="position: absolute; top: 270px; left: 40px; width: 100%;">
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
        <div style="position: absolute; top: 5px; width: 35%; height:35px; left: 65%; border: 1px solid #d6d6d6;font-size: 12px;background-color: white;">
            <span style="font-family: Calibri, sans-serif;position: absolute; top: 3px; left: 5px;">Quantidade/Unidade:</span>
            <span style="font-family: Calibri, sans-serif;position: absolute; top: 18px; left: 5px; font-weight: bold;">{{$quantidade}} {{$unidade}}</span>
        </div>
    </div>

    <span style="font-family: Calibri, sans-serif;transform: rotate(270deg); position: absolute; top: 235px; left: -17px; font-size: 12px; font-weight: bold;">IDENTIFICAÇÃO</span>

    <div style="font-family: Calibri, sans-serif; position: absolute; top: 330px; width: 100%; text-align: justify; padding-left: 10px; padding-right: 10px;">
        <span style="font-family: Calibri, sans-serif; font-size: 13px; line-height: 17px;">
            <b>DECLARAÇÃO</b><br>
            Abaixo assinados, PROPRIETÁRIO E PROFISSIONAL RESPONSÁVEL TÉCNICO pela execução acima
            mencionada declaram que a OBRA/SERVIÇO foi vistoriado minunciosamente a olho nu no dia ___ ___ /
            ___ ___ / ___ ___ , às ___ ___ h:___ ___ min, apresentando uma das condições abaixo.<br>
            Têm ainda o conhecimento na íntegra sobre as Sanções Legais previstas nas Legislações Vigêntes às
            quais estarão inclusos na hipótese de ficar comprovado que a(s) obra(s)/serviço(s) não se encontra(m)
            nesta data de acordo com a presente declaração.<br><br>
            Condições técnicas para uso e seus devidos fins:<br>
            (&nbsp;&nbsp;&nbsp;) Obtenção de novo Livro de Ordem em sequência ao atual que se encontra encerrado;<br>
            (&nbsp;&nbsp;&nbsp;) Conclusão parcial, devido a obra/serviço estar parcialmente concluída (especificar no Item - Posição
            Física do Empreendimento);<br>
            (&nbsp;&nbsp;&nbsp;) Conclusão de obra/serviço;<br>
            (&nbsp;&nbsp;&nbsp;) Conclusão de montagem de estrutura e/ou parque de diversão;<br>
            (&nbsp;&nbsp;&nbsp;) Baixa de Responsabilidade Técnica (especificar no Item - Observações e Determinações do
            Profissional);<br>
            (&nbsp;&nbsp;&nbsp;) Distrato (especificar no Item - Observações e Determinações do Profissional);<br>
            (&nbsp;&nbsp;&nbsp;) Outro: _____________________________________________________________________________________<br><br>
            Declaro ter conhecimento das sanções previstas em Lei, Penal e da Regulamentação do exercício do
            profissional a que estarei incluso na hipótese da obra/serviço estar em desacordo com a presente.

        </span>
    </div>

    <div style="font-family: Calibri, sans-serif; position: absolute; top: 720px; width: 100%; text-align: center;">
        <span style="font-family: Calibri, sans-serif; font-size: 13px;">
            Alfenas - MG, ___ ___ / ___ ___ ___ / ___ ___ ___ ___
        </span>
    </div>

    <span style="font-family: Calibri, sans-serif;position: absolute; top: 810px; left: 40px; font-size: 12px; font-weight: bold;">{{$responsavel->nome}}</span>
    <span style="font-family: Calibri, sans-serif;position: absolute; top: 830px; left: 40px; font-size: 12px;">Profissional RT:</span>

    <span style="font-family: Calibri, sans-serif;position: absolute; top: 810px; left: 430px; font-size: 12px; font-weight: bold;">{{$nome_proprietario}}</span>
    <span style="font-family: Calibri, sans-serif;position: absolute; top: 830px; left: 430px; font-size: 12px;">Proprietário:</span>

    <div style="position: absolute; top: 805px; left: 40px; width:270px; border-bottom: 1px solid black;">
    </div>

    <div style="position: absolute; top: 805px; left: 430px; width:270px; border-bottom: 1px solid black;">
    </div>

    <div style="font-family: Calibri, sans-serif; position: absolute; top: 880px; width: 100%; text-align: center;">
        <span style="font-family: Calibri, sans-serif; font-size: 13px;">
            Alfenas - MG, ___ ___ / ___ ___ ___ / ___ ___ ___ ___
        </span>
    </div>

    <div style="font-family: Calibri, sans-serif; position: absolute; top: 960px; width: 100%; text-align: center;">
        <div style="margin-left: auto; margin-right: auto; width:270px; border-bottom: 1px solid black;">
        </div>
    </div>

    <div style="font-family: Calibri, sans-serif; position: absolute; top: 965px; width: 100%; text-align: center;">
        <span style="font-family: Calibri, sans-serif; font-size: 12px;">
            Autenticação | Nome e Carimbo (se necessário)
        </span>
    </div>


    <span style="font-family: Calibri, sans-serif;position: absolute; top: 1030px; left: 40px; font-size: 11px;">1ª Via Proprietário - 2º Via Entidade/Conselho - 3ª Via Profissional Responsável</span>
    <span style="font-family: Calibri, sans-serif;position: absolute; top: 1030px; right: 0; font-size: 11px;">Página 12 / 12</span>

</body>
</html>