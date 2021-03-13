@extends('site.template.main')

@section('tamanhos')
    col-11 col-sm-8 col-md-6 col-lg-5 
@endsection


@section('conteudo')
<div class="bg-azul-soft">
    <div class="row">
        <div class="col-7">
            <div class="text-azul p-4">
                <h5 class="text-azul">Bem vindo !</h5>
                <p>Coloque suas credenciais para acessar o sistema.</p>
            </div>
        </div>
        <div class="col-4 align-self-center">
            <img src="{{asset('site/images/asseara-logo-azul.png')}}" style="max-width: 100%;" alt="" class="img-fluid">
        </div>
    </div>
</div>
<div class="card-body pt-3"> 
    <div class="p-2">
        @include("includes.errors")
        <form class="form-horizontal" action="{{route('site.senha.temporaria')}}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="cpf" class="form-label">CPF</label>
                <input type="text" class="form-control" name="cpf" id="cpf">
            </div>
            
            <div class="mt-3 d-grid">
                <button class="btn btn-azul waves-effect waves-light" type="submit">Recuperar</button>
            </div>
            
        </form>
    </div>
    <div class="row">
        <div class="col-12 text-center mt-3">
            <p>Deseja fazer parte ? <a href="{{route('site.registro')}}" class="fw-medium text-azul"> Clique aqui</a> e registre-se.</p>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script>
    $(document).ready(function(){
        $('#cpf').mask('000.000.000-00');
    });
</script>
@endsection