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
        <span style="font-family: Calibri, sans-serif; font-size: 19px; font-weight: bold; position: absolute; top: 20px; left: 50px;">05 - Acidentes e Danos Materiais Ocorridos</span>
    </div>

    <div style="font-family: Calibri, sans-serif; font-size: 25px;position: absolute; top: 80px; left: 530px; height: 60px; width: 100%; border: 1px solid #D6D6D6;">
        <span style="font-family: Calibri, sans-serif; font-size: 12px; position: absolute; top: 5px; left: 5px;">Livro n°</span>
        <span style="font-family: Calibri, sans-serif; font-size: 15px; font-weight: bold; position: absolute; top: 35px; left: 35px; color: #C00000;">{{$rt}} {{config("globals.rts")[$conselho]}}</span>
    </div>

    <div style="position: absolute; top: 150px; left: 20px; width: 100%;">
        <div style="position: absolute; top: 5px; width: 130px; height: 35px; border: 1.5px solid black;font-size: 12px;background-color: white;">
            <span style="font-family: Calibri, sans-serif; font-size: 14px; font-weight: bold; position: absolute; top: 8px; left: 50px;">Data:</span>
        </div>
        <div style="position: absolute; top: 5px; width: 350px; height: 35px; left: 130px; border: 1.5px solid black; font-size: 12px;background-color: white;">
            <span style="font-family: Calibri, sans-serif; font-size: 14px; font-weight: bold; position: absolute; top: 8px; left: 80px;">Observações/Determinações:</span>
        </div>
        <div style="position: absolute; top: 5px; width: 100px; height: 35px; left: 480px; border: 1.5px solid black; font-size: 12px; background-color: white; text-align: center;">
            <span style="font-family: Calibri, sans-serif; font-size: 14px; font-weight: bold; position: absolute; left: 15px;">Rubrica do RT:</span>
        </div>
        <div style="position: absolute; top: 5px; width: 100px; height: 35px; left: 580px; border: 1.5px solid black; font-size: 12px;background-color: white; text-align: center;">
            <span style="font-family: Calibri, sans-serif; font-size: 14px; font-weight: bold; position: absolute; left: 15px;">Rubrica do Cliente:</span>
        </div>
    </div>
    @for($cont = 1; $cont < 24; $cont++)
        <div style="position: absolute; top: {{(150) + (35 * $cont)}}px; left: 20px; width: 100%;">
            <div style="position: absolute; top: 5px; width: 130px; height: 35px; border: 1.5px solid black;font-size: 12px;background-color: white;">
                <span style="font-family: Calibri, sans-serif; font-size: 14px; position: absolute; top: 10px; left: 10px;">____/____ /____</span>
            </div>
            <div style="position: absolute; top: 5px; width: 350px; height: 35px; left: 130px; border: 1.5px solid black; font-size: 12px;background-color: white;">
                <span style="font-family: Calibri, sans-serif; font-size: 14px; font-weight: bold; position: absolute; top: 8px; left: 80px;"></span>
            </div>
            <div style="position: absolute; top: 5px; width: 100px; height: 35px; left: 480px; border: 1.5px solid black; font-size: 12px; background-color: white; text-align: center;">
                <span style="font-family: Calibri, sans-serif; font-size: 14px; font-weight: bold; position: absolute; left: 15px;"></span>
            </div>
            <div style="position: absolute; top: 5px; width: 100px; height: 35px; left: 580px; border: 1.5px solid black; font-size: 12px;background-color: white; text-align: center;">
                <span style="font-family: Calibri, sans-serif; font-size: 14px; font-weight: bold; position: absolute; left: 15px;"></span>
            </div>
        </div>
    @endfor

    <span style="font-family: Calibri, sans-serif;position: absolute; top: 1020px; left: 40px; font-size: 11px;">1ª Via Proprietário - 2º Via Entidade/Conselho - 3ª Via Profissional Responsável</span>
    <span style="font-family: Calibri, sans-serif;position: absolute; top: 1020px; right: 0; font-size: 11px;">Página 3 / 12</span>

</body>
</html>