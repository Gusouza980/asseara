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

    <div style="text-align:center; font-family: Calibri, sans-serif; font-size: 25px; font-weight: bold; position: absolute; top: 80px; left: 0px; height: 60px; width: 100%; border: 1px solid #D6D6D6; text-align: center;">
        <span style="font-family: Calibri, sans-serif; font-size: 19px; font-weight: bold; position: absolute; top: 20px; left: 296px;">Expediente</span>
    </div>

    <div style="font-family: Calibri, sans-serif; position: absolute; top: 170px; width: 100%; text-align: center;">
        <img style="width: 150px;" src="{{asset('site/images/asseara-logo.png')}}" alt="">
    </div>

    <div style="font-family: Calibri, sans-serif; font-size: 12px; position: absolute; top: 290px; width: 100%; text-align: center;">
        <b>Diretoria Executiva 2020/2022</b><br>
        Presidente Engenheiro Civil Eduardo Luiz Souza Ribeiro<br>
        Vice-presidente Engenheiro Eletricista Valter Aparecido de Carvalho<br>
        1º Diretor Secretário Engenheiro de Produção Mecânica Glauber Martins Legatti<br>
        2º Diretor Secretário Engenheiro Civil Ricardo Ávila Brabosa Guarda<br>
        1º Diretor Tesoureiro Engenheiro Agrônomo Marco Aurélio Gomes Schuffner<br>
        2º Diretor Tesoureiro Engenheiro Civil Wagner de Lima Gonçalves<br>
    </div>

    <div style="font-family: Calibri, sans-serif; font-size: 12px; position: absolute; top: 410px; width: 100%; text-align: center;">
        <b>Projeto Gráfico e Desenvolvimento</b><br>
        Engenheiro Civil Eduardo Luiz Souza Ribeiroo<br>
        eduardo_lsr@hotmail.com | +55 35 9 9957 7259<br>
    </div>

    <div style="font-family: Calibri, sans-serif; font-size: 12px; position: absolute; top: 475px; width: 100%; text-align: center;">
        <b>Edição, Tiragem e Impressão</b><br>
        janeiro/2020 &nbsp;&nbsp;|&nbsp;&nbsp; conforme solicitação por profissional &nbsp;&nbsp;|&nbsp;&nbsp; numerado pela ASSEARA
    </div>

    <div style="font-family: Calibri, sans-serif; font-size: 12px; position: absolute; top: 530px; width: 100%; text-align: center;">
        <b>Atendimento ao Proprietário/Profissional/Fiscalização</b><br>
        ASSEARA<br>
        Rua Doutor Luiz Libânio do Prado, 400 &nbsp;&nbsp;|&nbsp;&nbsp; Jardim São Lucas &nbsp;&nbsp;|&nbsp;&nbsp; Alfenas &nbsp;&nbsp;|&nbsp;&nbsp; MG &nbsp;&nbsp;|&nbsp;&nbsp; 37.131-504<br>
        www.asseara.org.br &nbsp;&nbsp;|&nbsp;&nbsp; assearaalfenas@hotmail.com &nbsp;&nbsp;|&nbsp;&nbsp; +55 35 3291 1915<br>
    </div>

    <div style="position: absolute; top: 620px; width:100%; border-bottom: 1px dotted black;">
    </div>

    <div style="font-family: Calibri, sans-serif; font-size: 12px; position: absolute; top: 640px; width: 100%; text-align: left;">
        <b>ORIENTAÇÃO</b><br><br>
        Este Livro de Ordem tem os seguintes objetivos:<br><br>
        <b>1 -</b> Registrar o acompanhamento da obra/serviço pelo profissional responsável pelo mesmo.<br><br>
        <b>2 -</b> Beneficiar o proprietário da obra/serviço com a qualidade de um serviço prestado através de informações
        técnicas e a fiscalização permanente dos serviços.<br><br>
        <b>3 -</b> Servir como documento que comprova a presença do responsável técnico pela obra/serviço em questões
        jurídicas referentes à qualidade dos serviços.<br><br>
        <b>4 -</b> Separar projeto (vulgarmente chamado de planta) de acompanhamento de obra/serviço. O profissional
        responsável pela execução da obra/serviço orientará toda a mão de obra contratada na aplicação dos projetos.<br><br>
        <b>5 -</b> Evitar que profissionais com outras qualificações assumam funções na obra/serviço diferentes das
        destinadas à agrônomos, arquitetos e engenheiros.<br><br>
    </div>

    <span style="font-family: Calibri, sans-serif;position: absolute; top: 1030px; right: 0; font-size: 11px;">Página - iii</span>

</body>
</html>