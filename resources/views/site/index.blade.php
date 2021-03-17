@extends('site.template.main')

@section('styles')
    <!-- DataTables -->
    <link href="{{ asset('admin/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css') }}" rel="stylesheet"
        type="text/css" />
    <link href="{{ asset('admin/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css') }}" rel="stylesheet"
        type="text/css" />
@endsection

@section('botoes')

    <div class="row pt-5">
        <div class="col-6 text-start">
            <a name="" id="" class="btn btn-azul" href="{{ route('site.emissao') }}" role="button">Nova Emissão</a>
        </div>
        <div class="col-6 text-end">
            <a name="" id="" class="btn btn-azul" data-bs-toggle="modal"
                data-bs-target="#modalAlterarSenha" role="button">Alterar Senha</a>
            <a name="" id="" class="btn btn-danger" href="{{ route('site.sair') }}" role="button">Sair</a>
        </div>
    </div>
    @include("includes.errors")
    <div class="row mt-3">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Nome: {{ $responsavel->nome }}</h4>
                    <h4 class="card-title">Título: {{ $responsavel->titulo }}</h4>
                    <h4 class="card-title">Registro: {{ $responsavel->registro }}</h4>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('conteudo')
    <div class="card-body pt-3">
        <div class="p-2">
            <h4>Minhas Emissões</h4>
            <hr>
            <table id="datatable" class="table table-bordered dt-responsive  nowrap w-100">
                <thead>
                    <tr>
                        <th>Data</th>
                        <th>Proprietário</th>
                        <th>Livro n°</th>
                        <th></th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>

                    @foreach ($responsavel->ordens()->orderBy("created_at", "ASC")->get() as $ordem)
                        <tr>
                            <td>{{ date('d/m/Y H:i:s', strtotime($ordem->created_at)) }}</td>
                            <td>{{ $ordem->proprietario }}</td>
                            <td>{{ $ordem->numero }}</td>
                            <td>
                                @if ($ordem->aprovado == 1)
                                    <span style="color:green;">Aprovado</span>
                                @elseif($ordem->aprovado == 0)
                                    <span class="text-primary">Aguardando Aprovação</span>
                                @else
                                    <span style="color:red;">Reprovado</span>
                                @endif
                            </td>
                            <td>
                                @if ($ordem->aprovado == 1)
                                    <a href="{{ route('pdf.baixar', ['ordem' => $ordem]) }}" target="_blank"
                                        class="btn btn-azul" role="button">Baixar</a>
                                @endif
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

    </div>

    <div class="modal fade" id="modalAlterarSenha" tabindex="-1" role="dialog" aria-labelledby="modalAlterarSenhaLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Alterar Senha</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{route('site.senha.alterar')}}" method="post">
                        @csrf
                        <div class="form-group mb-3">
                            <label for="senha_atual">Senha Atual</label>
                            <input type="password"
                                class="form-control" name="senha_atual" id="senha_atual" aria-describedby="helpId" placeholder="">
                        </div>
                        <div class="form-group mb-3">
                            <label for="nova_senha">Nova Senha</label>
                            <input type="password"
                                class="form-control" name="nova_senha" id="nova_senha" aria-describedby="helpId" placeholder="">
                        </div>
                        <div class="form-group text-end">
                            <button type="submit" class="btn btn-primary px-3">Alterar</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>

    
@endsection

@section('scripts')
    <!-- Required datatable js -->
    <script src="{{ asset('admin/libs/datatables.net/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('admin/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
    <script>
        $(document).ready(function() {
            $('#datatable').DataTable({
                language: {
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
            });
        });

    </script>
@endsection
