@extends('painel.template.main')

@section('styles')
    <!-- DataTables -->
    <link href="{{asset('admin/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('admin/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />
@endsection

@section('botoes')
@endsection

@section('conteudo')
<div class="row">
    <div class="col-12">
        @if(!$responsavel->aprovado)
            <div class="alert alert-danger">
                Você ainda não provou este responsável técnico. Para aprová-lo, <a href="{{route('painel.responsavel.aprovar', ['responsavel' => $responsavel])}}">clique aqui</a>.
            </div>
        @else
            <a name="" id="" class="btn btn-primary mb-3" href="{{route('painel.responsavel.bloquear', ['responsavel' => $responsavel])}}" role="button">Bloquear</a>
        @endif
    </div>
</div>
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body" style="overflow-x: scroll; font-size: 14px;">
                <h5>{{$responsavel->nome}}</h5>
                <hr>
                <p><b>CPF</b>: {{$responsavel->cpf}}</p>
                <p><b>Telefone</b>: {{$responsavel->telefone}}</p>
                <p><b>Registro</b>: {{$responsavel->cpf}}</p>
                <p><b>Título</b>: {{$responsavel->titulo}}</p>
                <p><b>Registro</b>: {{$responsavel->registro}}</p>
                <p><b>Inscrição</b>: {{$responsavel->inscricao}}</p>
                <p><b>Endereco</b>: {{$responsavel->rua . ", " . $responsavel->numero . " - " . $responsavel->complemento . " - " . $responsavel->cidade . "/" . $responsavel->uf}}</p>
                <p><b>CEP</b>: {{$responsavel->cep}}</p>
                <p><b>Email</b>: {{$responsavel->email}}</p>
            </div>
        </div>
    </div> <!-- end col -->
</div> <!-- end row -->

<div class="row mt-3">
    <div class="col-12">
        <div class="card">
            <div class="card-body" style="overflow-x: scroll; font-size: 14px;">
                <h5>Emissões</h5>
                <table id="datatable" class="table table-bordered dt-responsive  nowrap w-100">
                    <thead>
                        <tr>
                            <th>Data</th>
                            <th>Aprovado</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach($responsavel->ordens as $ordem)
                            <tr>
                                <td>{{date("d/m/Y H:i:s", strtotime($ordem->created_at))}}</td>
                                <td>
                                    @if($ordem->aprovado)
                                        Sim
                                    @else
                                        Não
                                    @endif
                                </td>
                                <td>
                                    <a href="{{asset($ordem->caminho)}}" target="_blank" class="btn btn-primary" role="button">Visualizar</a>
                                    @if(!$ordem->aprovado)
                                        <a href="{{route('painel.ordem.aprovar', ['ordem' => $ordem])}}" id="" class="btn btn-success" role="button">Aprovar</a>
                                    @else
                                        <a href="{{route('painel.ordem.bloquear', ['ordem' => $ordem])}}" id="" class="btn btn-danger" role="button">Bloquear</a>
                                    @endif
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection

@section('scripts')
<!-- Required datatable js -->
    <script src="{{asset('admin/libs/datatables.net/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('admin/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
    <script>
        $(document).ready(function() {
            $('#datatable').DataTable( {
                language:{
                    "emptyTable": "Nenhum registro encontrado",
                    "info": "Mostrando de _START_ até _END_ de _TOTAL_ registros",
                    "infoEmpty": "Mostrando 0 até 0 de 0 registros",
                    "infoFiltered": "(Filtrados de _MAX_ registros)",
                    "infoThousands": ".",
                    "loadingRecords": "Carregando...",
                    "processing": "Processando...",
                    "zeroRecords": "Nenhum registro encontrado",
                    "search": "Pesquisar",
                    "paginate": {
                        "next": "Próximo",
                        "previous": "Anterior",
                        "first": "Primeiro",
                        "last": "Último"
                    },
                    "aria": {
                        "sortAscending": ": Ordenar colunas de forma ascendente",
                        "sortDescending": ": Ordenar colunas de forma descendente"
                    },
                    "select": {
                        "rows": {
                            "_": "Selecionado %d linhas",
                            "0": "Nenhuma linha selecionada",
                            "1": "Selecionado 1 linha"
                        },
                        "1": "%d linha selecionada",
                        "_": "%d linhas selecionadas",
                        "cells": {
                            "1": "1 célula selecionada",
                            "_": "%d células selecionadas"
                        },
                        "columns": {
                            "1": "1 coluna selecionada",
                            "_": "%d colunas selecionadas"
                        }
                    },
                    "buttons": {
                        "copySuccess": {
                            "1": "Uma linha copiada com sucesso",
                            "_": "%d linhas copiadas com sucesso"
                        },
                        "collection": "Coleção  <span class=\"ui-button-icon-primary ui-icon ui-icon-triangle-1-s\"><\/span>",
                        "colvis": "Visibilidade da Coluna",
                        "colvisRestore": "Restaurar Visibilidade",
                        "copy": "Copiar",
                        "copyKeys": "Pressione ctrl ou u2318 + C para copiar os dados da tabela para a área de transferência do sistema. Para cancelar, clique nesta mensagem ou pressione Esc..",
                        "copyTitle": "Copiar para a Área de Transferência",
                        "csv": "CSV",
                        "excel": "Excel",
                        "pageLength": {
                            "-1": "Mostrar todos os registros",
                            "1": "Mostrar 1 registro",
                            "_": "Mostrar %d registros"
                        },
                        "pdf": "PDF",
                        "print": "Imprimir"
                    },
                    "autoFill": {
                        "cancel": "Cancelar",
                        "fill": "Preencher todas as células com",
                        "fillHorizontal": "Preencher células horizontalmente",
                        "fillVertical": "Preencher células verticalmente"
                    },
                    "lengthMenu": "Exibir _MENU_ resultados por página",
                    "searchBuilder": {
                        "add": "Adicionar Condição",
                        "button": {
                            "0": "Construtor de Pesquisa",
                            "_": "Construtor de Pesquisa (%d)"
                        },
                        "clearAll": "Limpar Tudo",
                        "condition": "Condição",
                        "conditions": {
                            "date": {
                                "after": "Depois",
                                "before": "Antes",
                                "between": "Entre",
                                "empty": "Vazio",
                                "equals": "Igual",
                                "not": "Não",
                                "notBetween": "Não Entre",
                                "notEmpty": "Não Vazio"
                            },
                            "number": {
                                "between": "Entre",
                                "empty": "Vazio",
                                "equals": "Igual",
                                "gt": "Maior Que",
                                "gte": "Maior ou Igual a",
                                "lt": "Menor Que",
                                "lte": "Menor ou Igual a",
                                "not": "Não",
                                "notBetween": "Não Entre",
                                "notEmpty": "Não Vazio"
                            },
                            "string": {
                                "contains": "Contém",
                                "empty": "Vazio",
                                "endsWith": "Termina Com",
                                "equals": "Igual",
                                "not": "Não",
                                "notEmpty": "Não Vazio",
                                "startsWith": "Começa Com"
                            }
                        },
                        "data": "Data",
                        "deleteTitle": "Excluir regra de filtragem",
                        "logicAnd": "E",
                        "logicOr": "Ou",
                        "title": {
                            "0": "Construtor de Pesquisa",
                            "_": "Construtor de Pesquisa (%d)"
                        },
                        "value": "Valor"
                    },
                    "searchPanes": {
                        "clearMessage": "Limpar Tudo",
                        "collapse": {
                            "0": "Painéis de Pesquisa",
                            "_": "Painéis de Pesquisa (%d)"
                        },
                        "count": "{total}",
                        "countFiltered": "{shown} ({total})",
                        "emptyPanes": "Nenhum Painel de Pesquisa",
                        "loadMessage": "Carregando Painéis de Pesquisa...",
                        "title": "Filtros Ativos"
                    },
                    "searchPlaceholder": "Digite um termo para pesquisar",
                    "thousands": "."
                } 
            } );
        } );    
    </script> 
@endsection