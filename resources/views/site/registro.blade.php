@extends('site.template.main')

@section('tamanhos')
    col-12 col-sm-10 col-md-8 col-lg-7 
@endsection

@section('conteudo')
<div class="bg-primary bg-azul-soft">
    <div class="row py-3">
        <div class="col-7">
            <div class="text-azul p-4">
                <h5 class="text-azul">Registro</h5>
                <p>Crie sua conta e espere a aprovação.</p>
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
        <form id="form-registro" class="needs-validation" action="{{route('site.registrar')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="mb-3 col-6">
                    <label for="cpf" class="form-label">CPF</label>
                    <input type="text" class="form-control" id="cpf" name="cpf" value="{{ old('cpf') }}" required>  
                    <div class="invalid-feedback">
                        Por favor, informe seu CPF.
                    </div>      
                </div>

                <div class="mb-3 col-6">
                    <label for="senha" class="form-label">Senha</label>
                    <input type="password" class="form-control" id="senha" name="senha" required>  
                    <div class="invalid-feedback">
                        Por favor, informe seu senha.
                    </div>      
                </div>

                <div class="mb-3 col-12">
                    <label for="nome" class="form-label">Nome completo</label>
                    <input type="text" class="form-control" id="nome" name="nome" value="{{ old('nome') }}" required>  
                    <div class="invalid-feedback">
                        Por favor, informe seu nome completo.
                    </div>      
                </div>

                <div class="mb-3 col-6">
                    <label for="telefone" class="form-label">Telefone</label>
                    <input type="text" class="form-control" id="telefone" name="telefone" value="{{ old('telefone') }}" required>  
                    <div class="invalid-feedback">
                        Por favor, informe seu telefone.
                    </div>      
                </div>

                <div class="mb-3 col-6">
                    <label for="">Título</label>
                    <select class="form-control" name="titulo" id="titulo">
                        @foreach(config("engenheiros.titulos") as $key => $value)
                            <option value="{{$key}}" @if(old('titulo') && $key == old('titulo')) selected @endif>{{$value}}</option>
                        @endforeach
                    </select>
                </div>

                <div class="mb-3 col-12 col-lg-6">
                    <label for="registro" class="form-label">Registro no Conselho n°</label>
                    <input type="text" class="form-control" id="registro" name="registro" value="{{old('registro')}}" required>  
                    <div class="invalid-feedback">
                        Por favor, informe seu número de registro no conselho.
                    </div>      
                </div>

                <div class="mb-3 col-12 col-lg-6">
                    <label for="inscricao" class="form-label">Inscrição Municipal</label>
                    <input type="text" class="form-control" id="inscricao" name="inscricao" value="{{old('inscricao')}}" required>  
                    <div class="invalid-feedback">
                        Por favor, informe sua inscrição municipal.
                    </div>      
                </div>

                <div class="mb-3 col-12">
                    <label for="rua" class="form-label">Rua</label>
                    <input type="text" class="form-control" id="rua" name="rua" value="{{old('rua')}}" required>  
                    <div class="invalid-feedback">
                        Por favor, informe o nome da sua rua.
                    </div>      
                </div>

                <div class="mb-3 col-12 col-lg-3">
                    <label for="numero" class="form-label">N°</label>
                    <input type="text" class="form-control" id="numero" name="numero" value="{{old('numero')}}" required>  
                    <div class="invalid-feedback">
                        Por favor, informe o número da casa.
                    </div>      
                </div>

                <div class="mb-3 col-12 col-lg-9">
                    <label for="complemento" class="form-label">Complemento (Opcional)</label>
                    <input type="text" class="form-control" id="complemento" name="complemento" value="{{old('complemento')}}">      
                </div>

                <div class="mb-3 col-12 col-lg-5">
                    <label for="cidade" class="form-label">Cidade</label>
                    <input type="text" class="form-control" id="cidade" name="cidade" value="{{old('cidade')}}" required>  
                    <div class="invalid-feedback">
                        Por favor, informe a cidade.
                    </div>      
                </div>

                <div class="mb-3 col-4">
                    <label for="">UF</label>
                    <select class="form-control" name="uf" id="uf">
                        <option value="MG">Minas Gerais</option>
                    </select>
                </div>

                <div class="mb-3 col-12 col-lg-3">
                    <label for="cep" class="form-label">CEP</label>
                    <input type="text" class="form-control" id="cep" name="cep" value="{{old('cep')}}" required>  
                    <div class="invalid-feedback">
                        Por favor, informe o cep.
                    </div>      
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email" value="{{old('email')}}" required>  
                    <div class="invalid-feedback">
                        Por favor, informe o e-mail.
                    </div>      
                </div>

                <div class="col-12 mt-3" id="div-comprovantes">
                    <div class="row mb-3">
                        <div class="col-8 text-start">
                            <h5>Comprovantes de Registro</h5>
                            <h6>(anexar frente e verso da Carteira Profissional - CAU/CFT/CONFEA)</h6>
                        </div>
                        <div class="col-4 text-end">
                            <input type="button" class="btn btn-azul" onclick="adiciona_input()" value="Adicionar"/>
                        </div>
                    </div>
                    <div class="row">
                        <div class="mb-3 col-11">
                            <input class="form-control" type="file" name="comprovante[]" multiple> 
                        </div>
                    </div>
                </div>

                <hr class="mt-3">

                <div class="col-12 mt-3">
                    <div class="row">
                        <div class="col-4">
                            @captcha
                        </div>
                        <div class="col-8">
                            <input type="text" class="form-control" id="captcha" name="captcha" autocomplete="off">
                        </div>
                    </div>
                </div>
                
                <div class="mt-4 d-grid" id="div-btn-registrar">
                    <button class="btn btn-azul waves-effect waves-light" id="btn-registrar" type="submit">Registrar</button>
                </div>

                <div class="mt-4 text-center d-none" id="div-loading-registrar">
                    <img src="{{asset('site/images/ajax-loading.gif')}}" width="50" alt="Ajax loading">
                </div>
            </div>
            
        </form>
    </div>
    <div class="row">
        <div class="col-12 text-center mt-3">
            <p>Já possui uma conta ? <a href="{{route('site.login')}}" class="fw-medium text-azul"> Entre aqui</a> </p>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script>
    function adiciona_input(){
        html = '<div class="row">';
            html += '<div class="mb-3 col-11">';
                html += '<input class="form-control" type="file" name="comprovante[]" multiple>';
            html += '</div>';
            html += '<div class="mb-3 col-1">';
                html += '<input type="button" class="btn btn-primary" onclick="remove_input(this)" value="x"/>';
            html += '</div>';
        html += "</div>";
        $("#div-comprovantes").append(html);
    }

    function remove_input(element){
        $(element).parent().parent().remove();
    }

    $(document).ready(function(){
        $('#telefone').mask('(00) 00000-0000');
        $('#cpf').mask('000.000.000-00');
        $('#cep').mask('00000-000');

        $("#form-registro").submit(function(){
            $("#div-btn-registrar").addClass("d-none");
            $("#div-loading-registrar").removeClass("d-none");
        });
    });
</script>
@endsection