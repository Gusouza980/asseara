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
        <form class="needs-validation" novalidate action="{{route('site.registrar')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">

                <div class="mb-3 col-6">
                    <label for="cpf" class="form-label">CPF</label>
                    <input type="text" class="form-control" id="cpf" name="cpf" required>  
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
                    <input type="text" class="form-control" id="nome" name="nome" required>  
                    <div class="invalid-feedback">
                        Por favor, informe seu nome completo.
                    </div>      
                </div>

                <div class="mb-3 col-6">
                    <label for="telefone" class="form-label">Telefone</label>
                    <input type="text" class="form-control" id="telefone" name="telefone" required>  
                    <div class="invalid-feedback">
                        Por favor, informe seu telefone.
                    </div>      
                </div>

                <div class="mb-3 col-6">
                    <label for="">Título</label>
                    <select class="form-control" name="titulo" id="titulo">
                        <option value="Agrimensor">Agrimensor</option>
                        <option value="Arquiteto">Arquiteto</option>
                        <option value="Arquiteto e Urbanista">Arquiteto e Urbanista</option>
                        <option value="Engenheiro Aeronáutico">Engenheiro Aeronáutico</option>
                        <option value="Engenheiro Agrícola">Engenheiro Agrícola</option>
                        <option value="Engenheiro Agrimensor">Engenheiro Agrimensor</option>
                        <option value="Engenheiro Agrônomo">Engenheiro Agrônomo</option>
                        <option value="Engenheiro Ambiental">Engenheiro Ambiental</option>
                        <option value="Engenheiro Biomédico">Engenheiro Biomédico</option>
                        <option value="Engenheiro Bioquímico">Engenheiro Bioquímico</option>
                        <option value="Engenheiro Cartógrafo">Engenheiro Cartógrafo</option>
                        <option value="Engenheiro Civil">Engenheiro Civil</option>
                        <option value="Engenheiro de Alimentos">Engenheiro de Alimentos</option>
                        <option value="Engenheiro de Aqüicultura">Engenheiro de Aqüicultura</option>
                        <option value="Engenheiro de Computação">Engenheiro de Computação</option>
                        <option value="Engenheiro de Comunicações">Engenheiro de Comunicações</option>
                        <option value="Engenheiro de Controle e Automação">Engenheiro de Controle e Automação</option>
                        <option value="Engenheiro de Exploração e Produção de Petróleo">Engenheiro de Exploração e Produção de Petróleo</option>
                        <option value="Engenheiro de Fortificação e Construção">Engenheiro de Fortificação e Construção</option>
                        <option value="Engenheiro de Geodésia">Engenheiro de Geodésia</option>
                        <option value="Engenheiro de Infra-Estrutura Aeronáutica">Engenheiro de Infra-Estrutura Aeronáutica</option>
                        <option value="Engenheiro de Materiais">Engenheiro de Materiais</option>
                        <option value="Engenheiro de Minas">Engenheiro de Minas</option>
                        <option value="Engenheiro de Operação - Aeronáutica">Engenheiro de Operação - Aeronáutica</option>
                        <option value="Engenheiro de Operação - Construção Civil">Engenheiro de Operação - Construção Civil</option>
                        <option value="Engenheiro de Operação - Construção de Estradas">Engenheiro de Operação - Construção de Estradas</option>
                        <option value="Engenheiro de Operação - Edificações">Engenheiro de Operação - Edificações</option>
                        <option value="Engenheiro de Operação - Eletrônica">Engenheiro de Operação - Eletrônica</option>
                        <option value="Engenheiro de Operação - Eletrotécnica">Engenheiro de Operação - Eletrotécnica</option>
                        <option value="Engenheiro de Operação - Estradas">Engenheiro de Operação - Estradas</option>
                        <option value="Engenheiro de Operação - Fabricação Mecânica">Engenheiro de Operação - Fabricação Mecânica</option>
                        <option value="Engenheiro de Operação - Indústria da Madeira">Engenheiro de Operação - Indústria da Madeira</option>
                        <option value="Engenheiro de Operação - Máquinas e Motores">Engenheiro de Operação - Máquinas e Motores</option>
                        <option value="Engenheiro de Operação - Mecânica">Engenheiro de Operação - Mecânica</option>
                        <option value="Engenheiro de Operação - Mecânica Automobilística">Engenheiro de Operação - Mecânica Automobilística</option>
                        <option value="Engenheiro de Operação - Mecânica de Manutenção">Engenheiro de Operação - Mecânica de Manutenção</option>
                        <option value="Engenheiro de Operação - Mecânica de Máquinas e Ferramentas">Engenheiro de Operação - Mecânica de Máquinas e Ferramentas</option>
                        <option value="Engenheiro de Operação - Metalurgista">Engenheiro de Operação - Metalurgista</option>
                        <option value="Engenheiro de Operação - Petroquímica">Engenheiro de Operação - Petroquímica</option>
                        <option value="Engenheiro de Operação - Processo de Fabricação Mecânica">Engenheiro de Operação - Processo de Fabricação Mecânica</option>
                        <option value="Engenheiro de Operação - Produção">Engenheiro de Operação - Produção</option>
                        <option value="Engenheiro de Operação - Química">Engenheiro de Operação - Química</option>
                        <option value="Engenheiro de Operação - Refrigeração e Ar Condicionado">Engenheiro de Operação - Refrigeração e Ar Condicionado</option>
                        <option value="Engenheiro de Operação - Siderurgia">Engenheiro de Operação - Siderurgia</option>
                        <option value="Engenheiro de Operação - Telecomunicações">Engenheiro de Operação - Telecomunicações</option>
                        <option value="Engenheiro de Operação - Têxtil">Engenheiro de Operação - Têxtil</option>
                        <option value="Engenheiro de Pesca">Engenheiro de Pesca</option>
                        <option value="Engenheiro de Petróleo">Engenheiro de Petróleo</option>
                        <option value="Engenheiro de Plástico">Engenheiro de Plástico</option>
                        <option value="Engenheiro de Produção">Engenheiro de Produção</option>
                        <option value="Engenheiro de Produção - Agroindústria">Engenheiro de Produção - Agroindústria</option>
                        <option value="Engenheiro de Produção - Civil">Engenheiro de Produção - Civil</option>
                        <option value="Engenheiro de Produção - Eletricista">Engenheiro de Produção - Eletricista</option>
                        <option value="Engenheiro de Produção - Materiais">Engenheiro de Produção - Materiais</option>
                        <option value="Engenheiro de Produção - Mecânica">Engenheiro de Produção - Mecânica</option>
                        <option value="Engenheiro de Produção - Metalurgista">Engenheiro de Produção - Metalurgista</option>
                        <option value="Engenheiro de Produção - Química">Engenheiro de Produção - Química</option>
                        <option value="Engenheiro de Produção - Têxtil">Engenheiro de Produção - Têxtil</option>
                        <option value="Engenheiro de Segurança do Trabalho">Engenheiro de Segurança do Trabalho</option>
                        <option value="Engenheiro de Telecomunicações">Engenheiro de Telecomunicações</option>
                        <option value="Engenheiro de Transmissão">Engenheiro de Transmissão</option>
                        <option value="Engenheiro Eletricista">Engenheiro Eletricista</option>
                        <option value="Engenheiro Eletricista - Eletrônica">Engenheiro Eletricista - Eletrônica</option>
                        <option value="Engenheiro Eletricista - Eletrotécnica">Engenheiro Eletricista - Eletrotécnica</option>
                        <option value="Engenheiro em Eletrônica">Engenheiro em Eletrônica</option>
                        <option value="Engenheiro em Eletrotécnica">Engenheiro em Eletrotécnica</option>
                        <option value="Engenheiro em Topografia Rural">Engenheiro em Topografia Rural</option>
                        <option value="Engenheiro Florestal">Engenheiro Florestal</option>
                        <option value="Engenheiro Geógrafo">Engenheiro Geógrafo</option>
                        <option value="Engenheiro Geólogo">Engenheiro Geólogo</option>
                        <option value="Engenheiro Hídrico">Engenheiro Hídrico</option>
                        <option value="Engenheiro Industrial - Civil">Engenheiro Industrial - Civil</option>
                        <option value="Engenheiro Industrial - Elétrica">Engenheiro Industrial - Elétrica</option>
                        <option value="Engenheiro Industrial - Eletrônica">Engenheiro Industrial - Eletrônica</option>
                        <option value="Engenheiro Industrial - Eletrotécnica">Engenheiro Industrial - Eletrotécnica</option>
                        <option value="Engenheiro Industrial - Madeira">Engenheiro Industrial - Madeira</option>
                        <option value="Engenheiro Industrial - Mecânica">Engenheiro Industrial - Mecânica</option>
                        <option value="Engenheiro Industrial - Metalurgia">Engenheiro Industrial - Metalurgia</option>
                        <option value="Engenheiro Industrial - Química">Engenheiro Industrial - Química</option>
                        <option value="Engenheiro Industrial - Telecomunicações">Engenheiro Industrial - Telecomunicações</option>
                        <option value="Engenheiro Mecânico">Engenheiro Mecânico</option>
                        <option value="Engenheiro Mecânico - Automação e Sistemas">Engenheiro Mecânico - Automação e Sistemas</option>
                        <option value="Engenheiro Mecânico e de Armamento">Engenheiro Mecânico e de Armamento</option>
                        <option value="Engenheiro Mecânico e de Automóvel">Engenheiro Mecânico e de Automóvel</option>
                        <option value="Engenheiro Mecânico Eletricista">Engenheiro Mecânico Eletricista</option>
                        <option value="Engenheiro Metalurgista">Engenheiro Metalurgista</option>
                        <option value="Engenheiro Militar">Engenheiro Militar</option>
                        <option value="Engenheiro Naval">Engenheiro Naval</option>
                        <option value="Engenheiro Químico">Engenheiro Químico</option>
                        <option value="Engenheiro Rodoviário">Engenheiro Rodoviário</option>
                        <option value="Engenheiro Sanitarista">Engenheiro Sanitarista</option>
                        <option value="Engenheiro Sanitarista e Ambiental">Engenheiro Sanitarista e Ambiental</option>
                        <option value="Engenheiro Têxtil">Engenheiro Têxtil</option>
                        <option value="Engenheiro Topógrafo">Engenheiro Topógrafo</option>
                        <option value="Geógrafo">Geógrafo</option>
                        <option value="Geólogo">Geólogo</option>
                        <option value="Meteorologista">Meteorologista</option>
                        <option value="Técnico (Mod Agrimensura)">Técnico (Mod Agrimensura)</option>
                        <option value="Técnico (Mod Agronomia)">Técnico (Mod Agronomia)</option>
                        <option value="Técnico (Mod Eletricista)">Técnico (Mod Eletricista)</option>
                        <option value="Técnico (Mod Geologia e Minas)">Técnico (Mod Geologia e Minas)</option>
                        <option value="Técnico (Mod Mecânica e Metalúrgica)">Técnico (Mod Mecânica e Metalúrgica)</option>
                        <option value="Técnico (Mod Química)">Técnico (Mod Química)</option>
                        <option value="Técnico (Mod Segurança do Trabalho)">Técnico (Mod Segurança do Trabalho)</option>
                        <option value="Técnico Desenhista de Arquitetura">Técnico Desenhista de Arquitetura</option>
                        <option value="Técnico em Construção Civil">Técnico em Construção Civil</option>
                        <option value="Técnico em Decoração">Técnico em Decoração</option>
                        <option value="Técnico em Desenho de Constr. Civil">Técnico em Desenho de Constr. Civil</option>
                        <option value="Técnico em Desenho de Projetos">Técnico em Desenho de Projetos</option>
                        <option value="Técnico em Edificações">Técnico em Edificações</option>
                        <option value="Técnico em Estradas">Técnico em Estradas</option>
                        <option value="Técnico em Estradas e Pontes">Técnico em Estradas e Pontes</option>
                        <option value="Técnico em Hidrologia">Técnico em Hidrologia</option>
                        <option value="Técnico em Maquetaria">Técnico em Maquetaria</option>
                        <option value="Técnico em Meio Ambiente">Técnico em Meio Ambiente</option>
                        <option value="Técnico em Saneamento">Técnico em Saneamento</option>
                        <option value="Técnico em Transportes Rodoviários">Técnico em Transportes Rodoviários</option>
                        <option value="Tecnólogo (Mod Agrimensura)">Tecnólogo (Mod Agrimensura)</option>
                        <option value="Tecnólogo (Mod Agronomia)">Tecnólogo (Mod Agronomia)</option>
                        <option value="Tecnólogo (Mod Eletricista)">Tecnólogo (Mod Eletricista)</option>
                        <option value="Tecnólogo (Mod Geologia e Minas)">Tecnólogo (Mod Geologia e Minas)</option>
                        <option value="Tecnólogo (Mod Mecânica e Metalúrgica)">Tecnólogo (Mod Mecânica e Metalúrgica)</option>
                        <option value="Tecnólogo (Mod Química)">Tecnólogo (Mod Química)</option>
                        <option value="Tecnólogo (Mod Segurança do Trabalho)">Tecnólogo (Mod Segurança do Trabalho)</option>
                        <option value="Tecnólogo em Construção Civil">Tecnólogo em Construção Civil</option>
                        <option value="Tecnólogo em Controle de Obras">Tecnólogo em Controle de Obras</option>
                        <option value="Tecnólogo em Edificações">Tecnólogo em Edificações</option>
                        <option value="Tecnólogo em Estradas">Tecnólogo em Estradas</option>
                        <option value="Tecnólogo em Op. E Adm. Sist. Nav. Fluvial">Tecnólogo em Op. E Adm. Sist. Nav. Fluvial</option>
                        <option value="Tecnólogo em Saneamento">Tecnólogo em Saneamento</option>
                        <option value="Tecnólogo em Saneamento Ambiental">Tecnólogo em Saneamento Ambiental</option>
                        <option value="Tecnólogo em Saneamento Básico">Tecnólogo em Saneamento Básico</option>
                        <option value="Tecnólogo em Transp. Terrestre - Urbano">Tecnólogo em Transp. Terrestre - Urbano</option>
                        <option value="Urbanista">Urbanista</option>

                    </select>
                </div>

                <div class="mb-3 col-12 col-lg-6">
                    <label for="registro" class="form-label">Registro no Conselho n°</label>
                    <input type="text" class="form-control" id="registro" name="registro" required>  
                    <div class="invalid-feedback">
                        Por favor, informe seu número de registro no conselho.
                    </div>      
                </div>

                <div class="mb-3 col-12 col-lg-6">
                    <label for="inscricao" class="form-label">Inscrição Municipal</label>
                    <input type="text" class="form-control" id="inscricao" name="inscricao" required>  
                    <div class="invalid-feedback">
                        Por favor, informe sua inscrição municipal.
                    </div>      
                </div>

                <div class="mb-3 col-12">
                    <label for="rua" class="form-label">Rua</label>
                    <input type="text" class="form-control" id="rua" name="rua" required>  
                    <div class="invalid-feedback">
                        Por favor, informe o nome da sua rua.
                    </div>      
                </div>

                <div class="mb-3 col-12 col-lg-3">
                    <label for="numero" class="form-label">N°</label>
                    <input type="text" class="form-control" id="numero" name="numero" required>  
                    <div class="invalid-feedback">
                        Por favor, informe o número da casa.
                    </div>      
                </div>

                <div class="mb-3 col-12 col-lg-9">
                    <label for="complemento" class="form-label">Complemento (Opcional)</label>
                    <input type="text" class="form-control" id="complemento" name="complemento">      
                </div>

                <div class="mb-3 col-12 col-lg-5">
                    <label for="cidade" class="form-label">Cidade</label>
                    <input type="text" class="form-control" id="cidade" name="cidade" required>  
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
                    <input type="text" class="form-control" id="cep" name="cep" required>  
                    <div class="invalid-feedback">
                        Por favor, informe o cep.
                    </div>      
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email" required>  
                    <div class="invalid-feedback">
                        Por favor, informe o e-mail.
                    </div>      
                </div>

                <div class="col-12 mt-3" id="div-comprovantes">
                    <div class="row mb-3">
                        <div class="col-6 text-start">
                            <h5>Comprovantes de Registro</h5>
                        </div>
                        <div class="col-6 text-end">
                            <input type="button" class="btn btn-azul" onclick="adiciona_input()" value="Adicionar"/>
                        </div>
                    </div>
                    <div class="row">
                        <div class="mb-3 col-11">
                            <input class="form-control" type="file" name="comprovante[]" multiple> 
                        </div>
                    </div>
                </div>
                
                <div class="mt-4 d-grid">
                    <button class="btn btn-azul waves-effect waves-light" type="submit">Registrar</button>
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
    });
</script>
@endsection