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
        <span style="font-family: Calibri, sans-serif; font-size: 19px; font-weight: bold; position: absolute; top: 8px; left: 100px;">07 - Anotações da Fiscalização da Prefeitura Municipal</span>
    </div>

    <div style="font-family: Calibri, sans-serif; font-size: 25px;position: absolute; top: 80px; left: 530px; height: 60px; width: 100%; border: 1px solid #D6D6D6;">
        <span style="font-family: Calibri, sans-serif; font-size: 12px; position: absolute; top: 5px; left: 5px;">Livro n°</span>
        <span style="font-family: Calibri, sans-serif; font-size: 15px; font-weight: bold; position: absolute; top: 35px; left: 35px; color: #C00000;">{{$rt}} {{config("globals.rts")[$conselho]}}</span>
    </div>

    <span style="font-family: Calibri, sans-serif;position: absolute; top: 155px; font-size: 13px; font-weight: bold;">Senhor Proprietário e Profissionais Responsáveis</span>
    <div style="font-family: Calibri, sans-serif; position: absolute; top: 150px; width: 100%; text-align: center;">
        <span style="font-family: Calibri, sans-serif; font-size: 13px; position: absolute; top: 25px; text-align: left;">
            Efetuamos vistoria na obra/serviço correspondente a este Livro de Ordem, conforme procedimentos
            legais, caso necessite o resultado desta vistoria encontra-se em nosso Conselho
        </span>
    </div>

    @for($cont = 0; $cont < 4; $cont++)
        <div style="font-family: Calibri, sans-serif; position: absolute; top: {{220 + (200 * $cont)}}px; width: 100%;">
            <div style="font-family: Calibri, sans-serif; position: absolute; top: 0px; width: 50%; border: 1px solid black; height: 200px;">
                <span style="font-family: Calibri, sans-serif; font-size: 13px; position: absolute; top: 15px; left: 55px; text-align: center;">
                    Anotações/Observações/Determinações:
                </span>
                <div style="position: absolute; top: 60px; left: 10%; width:80%; border-bottom: 1px solid black;">
                </div>
                <div style="position: absolute; top: 95px; left: 10%; width:80%; border-bottom: 1px solid black;">
                </div>
                <div style="position: absolute; top: 130px; left: 10%; width:80%; border-bottom: 1px solid black;">
                </div>
                <span style="font-family: Calibri, sans-serif; font-size: 13px; position: absolute; top: 135px; left: 60px; text-align: center;">
                    Assinatura Fiscal / Carimbo Identificação
                </span>
                <span style="font-family: Calibri, sans-serif; font-size: 13px; position: absolute; top: 170px; left: 75px; text-align: center;">
                    ___ ___ / ___ ___ / ___ ___ ___ ___
                </span>
            </div>
            <div style="font-family: Calibri, sans-serif; position: absolute; top: 0px; left: 50%; width: 50%; border: 1px solid black; height: 200px;">
                <span style="font-family: Calibri, sans-serif; font-size: 13px; position: absolute; top: 15px; left: 55px; text-align: center;">
                    Anotações/Observações/Determinações:
                </span>
                <div style="position: absolute; top: 60px; left: 10%; width:80%; border-bottom: 1px solid black;">
                </div>
                <div style="position: absolute; top: 95px; left: 10%; width:80%; border-bottom: 1px solid black;">
                </div>
                <div style="position: absolute; top: 130px; left: 10%; width:80%; border-bottom: 1px solid black;">
                </div>
                <span style="font-family: Calibri, sans-serif; font-size: 13px; position: absolute; top: 135px; left: 60px; text-align: center;">
                    Assinatura Fiscal / Carimbo Identificação
                </span>
                <span style="font-family: Calibri, sans-serif; font-size: 13px; position: absolute; top: 170px; left: 75px; text-align: center;">
                    ___ ___ / ___ ___ / ___ ___ ___ ___
                </span>
            </div>
        </div>
    @endfor

    <span style="font-family: Calibri, sans-serif;position: absolute; top: 1030px; left: 40px; font-size: 11px;">1ª Via Proprietário - 2º Via Entidade/Conselho - 3ª Via Profissional Responsável</span>
    <span style="font-family: Calibri, sans-serif;position: absolute; top: 1030px; right: 0; font-size: 11px;">Página 9 / 12</span>

</body>
</html>