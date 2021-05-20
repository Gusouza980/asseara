@extends('painel.template.main')

@section('styles')
    <!-- DataTables -->
    <link href="{{asset('admin/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('admin/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />
@endsection

@section('titulo')
    Listagem de ordens {{$tipo}}
@endsection

@section('botoes')
<a name="" id="" class="btn btn-primary" href="{{route('painel.ordem.analise')}}" role="button">Em Análise</a>
<a name="" id="" class="btn btn-success ml-3" href="{{route('painel.ordem.aprovadas')}}" role="button">Aprovadas</a>
<a name="" id="" class="btn btn-danger ml-3" href="{{route('painel.ordem.reprovadas')}}" role="button">Reprovadas</a>
@endsection

@section('conteudo')
<div class="row ">
    <div class="col-12">
        <div class="card">
            <div class="card-body" style="overflow-x: scroll;">
                <table id="datatable" style="vertical-align: middle;" class="table table-bordered dt-responsive  nowrap w-100">
                    <thead>
                        <tr>
                            <th>Data</th>
                            <th>Responsável Técnico</th>
                            <th>Proprietário</th>
                            <th>Livro n°</th>
                            <th>Aprovado</th>
                            <th>Comprovantes</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach($ordens as $ordem)
                            <tr>
                                <td>{{date("d/m/Y H:i:s", strtotime($ordem->created_at))}}</td>
                                <td><a href="{{route('painel.responsavel.visualizar', ['responsavel' => $ordem->responsavel])}}">{{$ordem->responsavel->nome}}</a></td>
                                <td>{{$ordem->proprietario}}</td>
                                <td>{{$ordem->numero}}</td>
                                <td>
                                    @if($ordem->aprovado == 1)
                                        <span style="color:green; padding: 10px 10px;">Aprovado</span>
                                    @elseif($ordem->aprovado == 0)
                                        <span style="padding: 10px 10px;" class="text-primary">Aguardando Aprovação</span>
                                    @else
                                        <span style="color:red; padding: 10px 10px;" data-toggle="tooltip" data-placement="top" title="{{$ordem->motivo}}">Reprovado</span>
                                    @endif
                                </td>
                                <td>
                                    <ul>
                                        @php
                                            $cont = 1;
                                        @endphp
                                        @foreach($ordem->comprovantes as $comprovante)
                                            <li><a href="{{asset($comprovante->caminho)}}" target="_blank">Comprovante {{$cont}}</a></li>
                                            @php
                                                $cont++;
                                            @endphp
                                        @endforeach
                                    </ul>
                                    
                                </td>
                                <td>
                                    <a href="{{asset($ordem->caminho)}}" target="_blank" class="btn btn-primary" role="button">Visualizar</a>
                                    @if($ordem->aprovado == 0)
                                        <a href="{{route('painel.ordem.aprovar', ['ordem' => $ordem])}}" id="" class="btn btn-success" role="button">Aprovar</a>
                                        <a  data-bs-toggle="modal" data-bs-target="#modalReprovar{{$ordem->id}}"  id="" class="btn btn-danger" role="button">Reprovar</a>
                                    @elseif($ordem->aprovado == 1)
                                        <a  data-bs-toggle="modal" data-bs-target="#modalReprovar{{$ordem->id}}"  id="" class="btn btn-danger" role="button">Reprovar</a>
                                    @else
                                        <a href="{{route('painel.ordem.aprovar', ['ordem' => $ordem])}}" id="" class="btn btn-success" role="button">Aprovar</a>
                                    @endif
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div> <!-- end col -->
</div> <!-- end row -->
@foreach($ordens as $ordem)
<div class="modal fade" id="modalReprovar{{$ordem->id}}" tabindex="-1" role="dialog" aria-labelledby="modalReprovar{{$ordem->id}}Label"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <form action="{{route('painel.ordem.reprovar', ['ordem' => $ordem])}}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="motivo">Motivo</label>
                        <textarea class="form-control" name="motivo" id="motivo" rows="3"></textarea>
                    </div>
                    <div class="form-group text-end mt-3">
                        <button type="submit" class="btn btn-primary">Salvar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endforeach
@endsection

@section('scripts')
    <!-- Required datatable js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.8.4/moment.min.js"></script>
    <script src="{{asset('admin/libs/datatables.net/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('admin/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
    <script src="https://cdn.datatables.net/plug-ins/1.10.10/sorting/datetime-moment.js"></script>
    <script>
        $(document).ready(function() {
            $('[data-toggle="tooltip"]').tooltip()
            $.fn.dataTable.moment( 'DD/MM/YYYY HH:mm:ss' );    //Formatação com Hora
            $.fn.dataTable.moment('DD/MM/YYYY');    //Formatação sem Hor
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