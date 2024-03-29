@extends('painel.template.main')

@section('titulo')
    Edição do Usuário: {{$usuario->nome}}
@endsection

@section('conteudo')

@include('includes.errors')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-12 text-left my-3" style="color:red;">
                        * Campos obrigatórios
                    </div>
                </div>
                <h4 class="card-title mb-4">Informações Básicas</h4>

                <form action="{{route('painel.usuario.salvar', ['usuario' => $usuario])}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="form-group col-12 col-lg-3">
                            <label for="nome">Nome *</label>
                            <input type="text" class="form-control" name="nome"
                                id="nome" value="{{$usuario->nome}}" required>
                        </div>
                        <div class="form-group col-12 col-lg-3">
                            <label for="email">Email *</label>
                            <input type="email" class="form-control" name="email"
                                id="email" value="{{$usuario->email}}" required>
                        </div>
                        <div class="form-group col-12 col-lg-3">
                            <label for="usuario">Usuario *</label>
                            <input type="text" class="form-control" name="usuario"
                                id="usuario" value="{{$usuario->usuario}}" required>
                        </div>
                        <div class="form-group col-12 col-lg-3">
                            <label for="senha">Senha *</label>
                            <input type="password" class="form-control" name="senha"
                                id="senha">
                                <small>Deixe em branco caso não va alterar</small>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-12" style="text-align: right;">
                            <button type="submit" class="btn btn-primary px-5">Salvar</button>
                        </div>
                    </div>
                </form>
            </div>
            <!-- end card body -->
        </div>
        <!-- end card -->
    </div>
    <!-- end col -->
</div>
<!-- end row -->
@endsection

@section('scripts')
@endsection