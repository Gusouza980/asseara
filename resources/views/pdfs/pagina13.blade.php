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

    <div style="text-align:center; font-family: Calibri, sans-serif; font-size: 25px; font-weight: bold; position: absolute; top: 80px; left: 0px; height: 60px; width: 70%; border: 1px solid #D6D6D6;">
        <span style="font-family: Calibri, sans-serif; font-size: 19px; font-weight: bold; position: absolute; top: 8px; left: 80px;">08 - Observações Complementares do Profissional</span>
    </div>

    <div style="font-family: Calibri, sans-serif; font-size: 25px;position: absolute; top: 80px; left: 530px; height: 60px; width: 100%; border: 1px solid #D6D6D6;">
        <span style="font-family: Calibri, sans-serif; font-size: 12px; position: absolute; top: 5px; left: 5px;">Livro n°</span>
        <span style="font-family: Calibri, sans-serif; font-size: 15px; font-weight: bold; position: absolute; top: 35px; left: 35px; color: #C00000;">10101010 ART</span>
    </div>

    <span style="font-family: Calibri, sans-serif;position: absolute; top: 155px; font-size: 13px; font-weight: bold;">Relação das Pessoas Físicas e Jurídicas Participantes dos Serviços Técnicos</span>
    <div style="font-family: Calibri, sans-serif; position: absolute; top: 150px; width: 100%; text-align: center;">
        <span style="font-family: Calibri, sans-serif; font-size: 13px; position: absolute; top: 25px; text-align: left;">
            <b>Atividades:</b> descrever os demais projetos desenvolvidos vinculados ao projeto principal, as empresas e
            prestadores de serviço contratados/subcontratados caracterizando seus encargos e as atividades com
            data de inicio e conclusão e número de ART/RRT/TRT respectivamente.

        </span>
    </div>

    @for($cont = 0; $cont < 3; $cont++)
        <div style="font-family: Calibri, sans-serif; position: absolute; top: {{230 + (260 * $cont)}}px; width: 100%;">
            <div style="font-family: Calibri, sans-serif; position: absolute; top: 0px; width: 50%; border: 1px solid black; height: 260px;">
                <span style="font-family: Calibri, sans-serif; font-size: 13px; position: absolute; top: 15px; left: 2px; text-align: center;">
                    Atividade 01:
                </span>
                <div style="position: absolute; top: 29px; left: 80px; width:100%; border-bottom: 1px solid black;">
                </div>
                <div style="position: absolute; top: 60px; left: 0; width:100%; border-bottom: 1px solid black;">
                </div>
                
                <div style="font-family: Calibri, sans-serif; font-size: 13px; position: absolute; top: 75px; left: 2px; text-align: center;">
                    <span style="font-family: Calibri, sans-serif; font-size: 13px; position: absolute; top: 0px; left: 0px; text-align: center;">
                        CPF/CNPJ:
                    </span>
                    <div style="position: absolute; top: 14px; left: 70px; width:100%; border-bottom: 1px solid black;">
                    </div>
                </div>

                <div style="font-family: Calibri, sans-serif; font-size: 13px; position: absolute; top: 105px; left: 2px; text-align: center;">
                    <span style="font-family: Calibri, sans-serif; font-size: 13px; position: absolute; top: 0px; left: 0px; text-align: center;">
                        CPF/CNPJ:
                    </span>
                    <div style="position: absolute; top: 14px; left: 70px; width:100%; border-bottom: 1px solid black;">
                    </div>
                </div>

                <div style="font-family: Calibri, sans-serif; font-size: 13px; position: absolute; top: 135px; left: 2px; text-align: center;">
                    <span style="font-family: Calibri, sans-serif; font-size: 13px; position: absolute; top: 0px; left: 0px; text-align: center;">
                        CONFEA/CAU/CFT nº:
                    </span>
                    <div style="position: absolute; top: 14px; left: 135px; width:100%; border-bottom: 1px solid black;">
                    </div>
                </div>

                <div style="font-family: Calibri, sans-serif; font-size: 13px; position: absolute; top: 165px; left: 2px; text-align: center;">
                    <span style="font-family: Calibri, sans-serif; font-size: 13px; position: absolute; top: 0px; left: 0px; text-align: center;">
                        ART/RRT/CFT nº:
                    </span>
                    <div style="position: absolute; top: 14px; left: 105px; width:100%; border-bottom: 1px solid black;">
                    </div>
                </div>

                <div style="font-family: Calibri, sans-serif; font-size: 13px; position: absolute; top: 195px; left: 2px; text-align: center;">
                    <span style="font-family: Calibri, sans-serif; font-size: 13px; position: absolute; top: 0px; left: 0px; text-align: center;">
                        Data Inicio:
                    </span>
                    <span style="font-family: Calibri, sans-serif; font-size: 13px; position: absolute; top: 0px; left: 130px; text-align: center;">
                        ___ ___ / ___ ___ / ___ ___
                    </span>
                </div>

                <div style="font-family: Calibri, sans-serif; font-size: 13px; position: absolute; top: 225px; left: 2px; text-align: center;">
                    <span style="font-family: Calibri, sans-serif; font-size: 13px; position: absolute; top: 0px; left: 0px; text-align: center;">
                        Data Conclusão:
                    </span>
                    <span style="font-family: Calibri, sans-serif; font-size: 13px; position: absolute; top: 0px; left: 130px; text-align: center;">
                        ___ ___ / ___ ___ / ___ ___
                    </span>
                </div>
            </div>
            <div style="font-family: Calibri, sans-serif; position: absolute; top: 0px; left: 50%; width: 50%; border: 1px solid black; height: 260px;">
                <span style="font-family: Calibri, sans-serif; font-size: 13px; position: absolute; top: 15px; left: 2px; text-align: center;">
                    Atividade 01:
                </span>
                <div style="position: absolute; top: 29px; left: 80px; width:100%; border-bottom: 1px solid black;">
                </div>
                <div style="position: absolute; top: 60px; left: 0; width:100%; border-bottom: 1px solid black;">
                </div>
                
                <div style="font-family: Calibri, sans-serif; font-size: 13px; position: absolute; top: 75px; left: 2px; text-align: center;">
                    <span style="font-family: Calibri, sans-serif; font-size: 13px; position: absolute; top: 0px; left: 0px; text-align: center;">
                        CPF/CNPJ:
                    </span>
                    <div style="position: absolute; top: 14px; left: 70px; width:100%; border-bottom: 1px solid black;">
                    </div>
                </div>

                <div style="font-family: Calibri, sans-serif; font-size: 13px; position: absolute; top: 105px; left: 2px; text-align: center;">
                    <span style="font-family: Calibri, sans-serif; font-size: 13px; position: absolute; top: 0px; left: 0px; text-align: center;">
                        CPF/CNPJ:
                    </span>
                    <div style="position: absolute; top: 14px; left: 70px; width:100%; border-bottom: 1px solid black;">
                    </div>
                </div>

                <div style="font-family: Calibri, sans-serif; font-size: 13px; position: absolute; top: 135px; left: 2px; text-align: center;">
                    <span style="font-family: Calibri, sans-serif; font-size: 13px; position: absolute; top: 0px; left: 0px; text-align: center;">
                        CONFEA/CAU/CFT nº:
                    </span>
                    <div style="position: absolute; top: 14px; left: 135px; width:100%; border-bottom: 1px solid black;">
                    </div>
                </div>

                <div style="font-family: Calibri, sans-serif; font-size: 13px; position: absolute; top: 165px; left: 2px; text-align: center;">
                    <span style="font-family: Calibri, sans-serif; font-size: 13px; position: absolute; top: 0px; left: 0px; text-align: center;">
                        ART/RRT/CFT nº:
                    </span>
                    <div style="position: absolute; top: 14px; left: 105px; width:100%; border-bottom: 1px solid black;">
                    </div>
                </div>

                <div style="font-family: Calibri, sans-serif; font-size: 13px; position: absolute; top: 195px; left: 2px; text-align: center;">
                    <span style="font-family: Calibri, sans-serif; font-size: 13px; position: absolute; top: 0px; left: 0px; text-align: center;">
                        Data Inicio:
                    </span>
                    <span style="font-family: Calibri, sans-serif; font-size: 13px; position: absolute; top: 0px; left: 130px; text-align: center;">
                        ___ ___ / ___ ___ / ___ ___
                    </span>
                </div>

                <div style="font-family: Calibri, sans-serif; font-size: 13px; position: absolute; top: 225px; left: 2px; text-align: center;">
                    <span style="font-family: Calibri, sans-serif; font-size: 13px; position: absolute; top: 0px; left: 0px; text-align: center;">
                        Data Conclusão:
                    </span>
                    <span style="font-family: Calibri, sans-serif; font-size: 13px; position: absolute; top: 0px; left: 130px; text-align: center;">
                        ___ ___ / ___ ___ / ___ ___
                    </span>
                </div>
            </div>
        </div>
    @endfor

    <span style="font-family: Calibri, sans-serif;position: absolute; top: 1030px; left: 40px; font-size: 11px;">1ª Via Proprietário - 2º Via Entidade/Conselho - 3ª Via Profissional Responsável</span>
    <span style="font-family: Calibri, sans-serif;position: absolute; top: 1030px; right: 0; font-size: 11px;">Página 10 / 12</span>

</body>
</html>