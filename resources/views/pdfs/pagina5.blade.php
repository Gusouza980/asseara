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
        <span style="font-family: Calibri, sans-serif; font-size: 19px; font-weight: bold; position: absolute; top: 20px; left: 140px;">02 - Nomeação do Preposto</span>
    </div>

    <div style="font-family: Calibri, sans-serif; font-size: 25px;position: absolute; top: 80px; left: 530px; height: 60px; width: 100%; border: 1px solid #D6D6D6;">
        <span style="font-family: Calibri, sans-serif; font-size: 12px; position: absolute; top: 5px; left: 5px;">Livro n°</span>
        <span style="font-family: Calibri, sans-serif; font-size: 15px; font-weight: bold; position: absolute; top: 35px; left: 35px; color: #C00000;">{{$rt}} {{config("globals.rts")[$conselho]}}</span>
    </div>

    <div style="font-family: Calibri, sans-serif; position: absolute; top: 140px; width: 100%; text-align: center;">
        <span style="font-family: Calibri, sans-serif; font-size: 12px; position: absolute; top: 25px; text-align: left;">
            Eu, {{$nome_proprietario}}, portador do RG nº {{$rg_proprietario}} e CPF nº {{$cpf_proprietario}}, na qualidade
            de proprietário da obra localizada à {{$endereco}} nº {{$numero}} no bairro {{$bairro}}, no
            Município de {{$cidade}} , venho por meio desta nomear como meu preposto o Sr(as):
        </span>
    </div>

    <div style="position: absolute; top: 250px; width: 100%;">
        <div  style="position: absolute; top: 0px; width: 100%;">
            <div style="position: absolute; top: 5px; width: 100%; height: 40px; border: 1px solid #d6d6d6; font-size: 12px; background-color: white;">
                <span style="font-family: Calibri, sans-serif;position: absolute; top: 3px; left: 5px;">Nome 01:</span>
                <span style="font-family: Calibri, sans-serif;position: absolute; top: 18px; left: 5px; font-weight: bold;"></span>
            </div>
        </div>
        <div style="position: absolute; top: 45px; width: 100%;">
            <div style="position: absolute; top: 5px; width: 50%; height: 40px; border: 1px solid #d6d6d6; font-size: 12px; background-color: white;">
                <span style="font-family: Calibri, sans-serif;position: absolute; top: 3px; left: 5px;">RG nº:</span>
                <span style="font-family: Calibri, sans-serif;position: absolute; top: 18px; left: 5px; font-weight: bold;"></span>
            </div>
            <div style="position: absolute; top: 5px; left: 49.7%; width: 50%; height: 40px; border: 1px solid #d6d6d6; font-size: 12px; background-color: white;">
                <span style="font-family: Calibri, sans-serif;position: absolute; top: 3px; left: 5px;">CPF nº:</span>
                <span style="font-family: Calibri, sans-serif;position: absolute; top: 18px; left: 5px; font-weight: bold;"></span>
            </div>
        </div>
        <span style="font-family: Calibri, sans-serif;position: absolute; top: 95px; font-size: 12px;">Assinatura do preposto</span>
        <div style="position: absolute; top: 140px; width:100%; border-bottom: 1px solid #D6D6D6;">
        </div>
    </div>

    <div style="position: absolute; top: 400px; width: 100%;">
        <div  style="position: absolute; top: 0px; width: 100%;">
            <div style="position: absolute; top: 5px; width: 100%; height: 40px; border: 1px solid #d6d6d6; font-size: 12px; background-color: white;">
                <span style="font-family: Calibri, sans-serif;position: absolute; top: 3px; left: 5px;">Nome 02:</span>
                <span style="font-family: Calibri, sans-serif;position: absolute; top: 18px; left: 5px; font-weight: bold;"></span>
            </div>
        </div>
        <div style="position: absolute; top: 45px; width: 100%;">
            <div style="position: absolute; top: 5px; width: 50%; height: 40px; border: 1px solid #d6d6d6; font-size: 12px; background-color: white;">
                <span style="font-family: Calibri, sans-serif;position: absolute; top: 3px; left: 5px;">RG nº:</span>
                <span style="font-family: Calibri, sans-serif;position: absolute; top: 18px; left: 5px; font-weight: bold;"></span>
            </div>
            <div style="position: absolute; top: 5px; left: 49.7%; width: 50%; height: 40px; border: 1px solid #d6d6d6; font-size: 12px; background-color: white;">
                <span style="font-family: Calibri, sans-serif;position: absolute; top: 3px; left: 5px;">CPF nº:</span>
                <span style="font-family: Calibri, sans-serif;position: absolute; top: 18px; left: 5px; font-weight: bold;"></span>
            </div>
        </div>
        <span style="font-family: Calibri, sans-serif;position: absolute; top: 95px; font-size: 12px;">Assinatura do preposto</span>
        <div style="position: absolute; top: 140px; width:100%; border-bottom: 1px solid #D6D6D6;">
        </div>
    </div>

    <div style="position: absolute; top: 550px; width: 100%;">
        <div  style="position: absolute; top: 0px; width: 100%;">
            <div style="position: absolute; top: 5px; width: 100%; height: 40px; border: 1px solid #d6d6d6; font-size: 12px; background-color: white;">
                <span style="font-family: Calibri, sans-serif;position: absolute; top: 3px; left: 5px;">Nome 03:</span>
                <span style="font-family: Calibri, sans-serif;position: absolute; top: 18px; left: 5px; font-weight: bold;"></span>
            </div>
        </div>
        <div style="position: absolute; top: 45px; width: 100%;">
            <div style="position: absolute; top: 5px; width: 50%; height: 40px; border: 1px solid #d6d6d6; font-size: 12px; background-color: white;">
                <span style="font-family: Calibri, sans-serif;position: absolute; top: 3px; left: 5px;">RG nº:</span>
                <span style="font-family: Calibri, sans-serif;position: absolute; top: 18px; left: 5px; font-weight: bold;"></span>
            </div>
            <div style="position: absolute; top: 5px; left: 49.7%; width: 50%; height: 40px; border: 1px solid #d6d6d6; font-size: 12px; background-color: white;">
                <span style="font-family: Calibri, sans-serif;position: absolute; top: 3px; left: 5px;">CPF nº:</span>
                <span style="font-family: Calibri, sans-serif;position: absolute; top: 18px; left: 5px; font-weight: bold;"></span>
            </div>
        </div>
        <span style="font-family: Calibri, sans-serif;position: absolute; top: 95px; font-size: 12px;">Assinatura do preposto</span>
        <div style="position: absolute; top: 140px; width:100%; border-bottom: 1px solid #D6D6D6;">
        </div>
    </div>

    <div style="font-family: Calibri, sans-serif; position: absolute; top: 680px; width: 100%; text-align: center;">
        <span style="font-family: Calibri, sans-serif; font-size: 12px; position: absolute; top: 25px; text-align: left;">
            para receber todas as orientações a serem executadas em minha obra.
        </span>
    </div>
    
    <div style="font-family: Calibri, sans-serif; position: absolute; top: 790px; width: 100%; text-align: center;">
        <span style="font-family: Calibri, sans-serif; font-size: 13px;">
            Alfenas - MG, ___ ___ / ___ ___ ___ / ___ ___ ___ ___
        </span>
    </div>

    <div style="position: absolute; top: 870px; width: 100%;">
        <div style="margin-left: auto; margin-right: auto; width:270px; border-bottom: 1px solid black;">
        </div>
    </div>
    

    <span style="font-family: Calibri, sans-serif;position: absolute; top: 875px; width: 100%; text-align: center; font-size: 12px; font-weight: bold;">{{$nome_proprietario}}</span>



    <span style="font-family: Calibri, sans-serif;position: absolute; top: 1020px; left: 40px; font-size: 11px;">1ª Via Proprietário - 2º Via Entidade/Conselho - 3ª Via Profissional Responsável</span>
    <span style="font-family: Calibri, sans-serif;position: absolute; top: 1020px; right: 0; font-size: 11px;">Página 2 / 12</span>

</body>
</html>