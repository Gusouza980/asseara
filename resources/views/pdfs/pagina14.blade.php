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
        <span style="font-family: Calibri, sans-serif; font-size: 19px; font-weight: bold; position: absolute; top: 8px; left: 80px;">09 - Declaração de Entrega das Vias Correspondentes ao Proprietário</span>
    </div>

    <div style="font-family: Calibri, sans-serif; font-size: 25px;position: absolute; top: 80px; left: 530px; height: 60px; width: 100%; border: 1px solid #D6D6D6;">
        <span style="font-family: Calibri, sans-serif; font-size: 12px; position: absolute; top: 5px; left: 5px;">Livro n°</span>
        <span style="font-family: Calibri, sans-serif; font-size: 15px; font-weight: bold; position: absolute; top: 35px; left: 35px; color: #C00000;">{{$rt}} {{config("globals.rts")[$conselho]}}</span>
    </div>

    <div style="font-family: Calibri, sans-serif; position: absolute; top: 160px; width: 100%; text-align: center;">
        <span style="font-family: Calibri, sans-serif; font-size: 13px; position: absolute; top: 0px; text-align: justify;">
            Eu, {{$nome_proprietario}} (proprietário), declaro que nesta data recebi do profissional, Sr(a) {{$responsavel->nome}}, todas as vias correspondentes ao proprietário (1ª Via) deste livro de
            ordem, contendo todo o histórico do andamento da obra/serviço, segundo informações de
            responsabilidade do profissional, em função do término do mesmo.
        </span>
    </div>

    <div style="font-family: Calibri, sans-serif; position: absolute; top: 305px; width: 100%; text-align: center;">
        <span style="font-family: Calibri, sans-serif; font-size: 13px;">
            Alfenas - MG, ___ ___ / ___ ___ ___ / ___ ___ ___ ___
        </span>
    </div>

    <div style="position: absolute; top: 400px; width: 100%;">
        <div style="margin-left: auto; margin-right: auto; width:270px; border-bottom: 1px solid black;">
        </div>
    </div>

    {{--  <div style="position: absolute; top: 400px; left: 34%; width:270px; border-bottom: 1px solid black;">
    </div>  --}}

    <span style="font-family: Calibri, sans-serif;position: absolute; top: 405px; width: 100%; text-align: center; font-size: 12px; font-weight: bold;">{{$nome_proprietario}}</span>
    <span style="font-family: Calibri, sans-serif;position: absolute; top: 425px; width: 100%; text-align: center; font-size: 12px;">Proprietário</span>

    <div style="position: absolute; top: 500px; width: 100%;">
        <div style="margin-left: auto; margin-right: auto; width:270px; border-bottom: 1px solid black;">
        </div>
    </div>

    <span style="font-family: Calibri, sans-serif;position: absolute; top: 505px; width: 100%; text-align: center; font-size: 12px; font-weight: bold;">{{$responsavel->nome}}</span>
    <span style="font-family: Calibri, sans-serif;position: absolute; top: 525px; width: 100%; text-align: center; font-size: 12px;">Profissional RT</span>

    <span style="font-family: Calibri, sans-serif;position: absolute; top: 1030px; left: 40px; font-size: 11px;">1ª Via Proprietário - 2º Via Entidade/Conselho - 3ª Via Profissional Responsável</span>
    <span style="font-family: Calibri, sans-serif;position: absolute; top: 1030px; right: 0; font-size: 11px;">Página 11 / 12</span>

</body>
</html>