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
        <span style="font-family: Calibri, sans-serif; font-size: 19px; font-weight: bold; position: absolute; top: 8px; left: 80px;">08 - Observações Complementares do Profissional</span>
    </div>

    <div style="font-family: Calibri, sans-serif; font-size: 25px;position: absolute; top: 80px; left: 530px; height: 60px; width: 100%; border: 1px solid #D6D6D6;">
        <span style="font-family: Calibri, sans-serif; font-size: 12px; position: absolute; top: 5px; left: 5px;">Livro n°</span>
        <span style="font-family: Calibri, sans-serif; font-size: 15px; font-weight: bold; position: absolute; top: 35px; left: 35px; color: #C00000;">{{$rt}} {{config("globals.rts")[$conselho]}}</span>
    </div>

    <div style="font-family: Calibri, sans-serif; position: absolute; top: 160px; width: 100%; text-align: center;">
        <span style="font-family: Calibri, sans-serif; font-size: 13px; position: absolute; top: 0px; text-align: justify;">
            <b>Recibo</b><br>
            Servirá como comprovante de beneficio recebido ou de pagamento do serviço prestado pela entidade de classe
            ao profissional.<br>
            
            <b>01 - Termo de Abertura</b><br>
            É destinado à identificação geral da obra/serviço a ser executado, do seu proprietário e dos profissionais
            envolvidos em autoria e responsabilidade técnica. É preenchido totalmente no ato da retirada do Livro de
            Ordem, sendo conferido e assinado pelo profissional, que se utilizará do documento junto à Orgãos Públicos.<br>
            
            <b>02 - Nomeação de Preposto</b><br>
            O proprietário nomeia um preposto para receber as orientações do profissional.<br>
            
            <b>03 - Posição Física do Empreendimento</b><br>
            O profissional fará o apontamernto da Etapa que se encontra a obra/serviço no dia da visita. Sendo necessário
            o preenchimento de no mínimo 1 etapa semanal.<br>
            
            <b>04 - Observações e Determinações do Profissional</b><br>
            O profissional relaciona as observações e/ou determinações que julgue necessárias, podendo usar mais de uma
            linha por anotação.<br>
            a) Data da observação e/ou determinação.<br>
            b) Observações/determinações utilizando o número de linhas que julgar necessário.<br>
            c) Rubrica do profissional ao final de observação/determinação.<br>
            d) Assinatura de quem a recebe (identificar)<br>
            
            <b>05 - Acidentes e Danos Materiais</b><br>
            O profissional descreve a ocorrência utilizando as linhas necessárias.<br>
            
            <b>06 - Anotação da Fiscalização do CONFEA ou CAU ou CFT</b><br>
            De uso exclusivo do fiscal do CONFEA ou CAU ou CFT, que registra: a data da visita, anotações, observações,
            determinações e assinatura.<br>
            
            <b>07 - Anotação da Fiscalização da Prefeitura Municipal</b><br>
            De uso exclusivo da fiscalização da Prefeitura Municipal, que registra: a data da visita, anotações, observações,
            determinações e assinatura.<br>
            
            <b>08 - Observações Complementares do Profissional</b><br>
            É destinado à identificação de pessoas físicas e jurídicas (empresas e prestadores) participantes dos serviços
            técnicos realizados na obra/serviço. Identifica autores e responsáveis por projetos, e os contratados e
            subcontratados caracterizando seus encargos e as atividades, com a data de início e a data de conclusão, e os
            números de ART respectivamente.<br>
            
            <b>09 - Declaração de Entrega das Vias Correspondentes ao Proprietário</b><br>
            É a comprovação de entrega das vias correspondentes ao proprietário, após a conclusão da obra/serviço do
            profissional.<br>
            
            <b>10 - Termo de Conclusão e/ou Encerramento (outros procedimentos)</b><br>
            Contém a identificação da obra/serviço e declaração da etapa em que se encontra a mesma (parcial ou
            concluída), tendo as seguintes finalidades:<br>
            <b>I)</b> Obtenção de novo Livro de Ordem em seqüencia ao atual, que se encontra totalmente preenchido, sem
            espaço para novas anotações; 
            <b>II)</b> Obtenção de conclusão parcial de obra/serviço; 
            <b>III)</b> Obtenção de conclusão
            de obra/serviço; 
            <b>IV)</b> Conclusão de montagem de estrutura e/ou parque de diversão; 
            <b>V)</b> Baixa da
            Responsabilidade Técnica; 
            <b>VI)</b> Distrato; ou 
            <b>VII)</b> Outro motivo a especificar.<br>
            <b>a)</b> O livro de ordem, com todas as vias preenchidas deverá ser arquivo para uso futuro em casos que determina
            a legislação. 
            <b>b)</b> A primeira via será entregue a ASSEARA que informará à Prefeitura dando ciência do término.
            <b>c)</b> No caso da Baixa de Responsabilidade Técnica, especificar no item 04 - Observações e Determinações do
            Profissional; 
            <b>d)</b> Após a entrega do termo, requerer junto ao CONFEA ou CAU ou CFT a baixa da ART ou RRT ou
            TRT correspondente. 
            <b>e)</b> Boletim de Ocorrência (BO) deverá ser emitido pelo Responsável Técnico (RT do Termo
            de Abertura) para fornecimento de novo livro de ordem, no caso de alegação de impossibilidade de apresentar
            a anterior completa. 
            <b>f)</b> O profissional datará este documento.

        </span>
    </div>

    <span style="font-family: Calibri, sans-serif;position: absolute; top: 1030px; right: 0; font-size: 11px;">Página - i</span>

</body>
</html>