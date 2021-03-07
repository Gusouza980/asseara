@extends('site.template.main')



@section('conteudo')
<div class="card-body pt-3"> 
    <div class="p-2">
        <h4>Emissão de Ordem</h4>
        <hr>
        @include("includes.errors")
        <form class="form-horizontal" action="{{route('pdf.criar')}}" method="POST">
            @csrf
            <h5>Dados do Empreendimento</h5>
            <div class="row mt-3">
                <div class="mb-3 form-group col-12 col-md-6 col-lg-4">
                    <label for="">Sequência ao Livro de Ordem n° (Opcional)</label>
                    <input type="text"
                        class="form-control" name="sequencia" placeholder="">
                    <small>Preencha em caso da ordem ser sequência de uma anterior</small>
                </div> 
                <div class="mb-3 form-group col-12 col-md-6 col-lg-4">
                    <label for="">Conselho de Origem *</label>
                    <select class="form-select" name="conselho">
                        <option value="CONFEA">CONFEA</option>
                        <option value="CAU">CAU</option>
                        <option value="CFT">CFT</option>
                    </select>
                </div> 
                <div class="mb-3 form-group col-12 col-md-6 col-lg-4">
                    <label for="">Documento de RT (Apenas Números) *</label>
                    <input type="text" class="form-control" name="rt" placeholder="" required>
                </div> 
                <div class="mb-3 form-group col-12 col-md-6 col-lg-4">
                    <label for="">Data de Início *</label>
                    <input type="date" class="form-control" name="inicio" value="{{date('Y-m-d')}}" required>
                </div>
                <div class="mb-3 form-group col-12 col-md-6 col-lg-4">
                    <label for="">Data de Conclusão (Prevista) *</label>
                    <input type="date" class="form-control" name="conclusao" value="{{date('Y-m-d')}}" required>
                </div>  
                <div class="mb-3 form-group col-12">
                    <label for="">Área Atuação - Sub Área de Atuação - Obra/Serviço - Complemento*</label>
                    <input type="text" class="form-control" name="atuacao" placeholder="" required>
                </div>
                <div class="mb-3 form-group col-12 col-md-9 col-lg-6">
                    <label for="">Endereço *</label>
                    <input type="text" class="form-control" name="endereco" placeholder="" required>
                </div> 
                <div class="mb-3 form-group col-12 col-md-3 col-lg-2">
                    <label for="">N° *</label>
                    <input type="text" class="form-control" name="numero" placeholder="" required>
                </div> 
                <div class="mb-3 form-group col-12 col-md-6 col-lg-4">
                    <label for="">Bairro *</label>
                    <input type="text" class="form-control" name="bairro" placeholder="" required>
                </div>
                <div class="mb-3 form-group col-12 col-md-6 col-lg-4">
                    <label for="">CEP *</label>
                    <input type="text" class="form-control" name="cep" placeholder="" required>
                </div>
                <div class="mb-3 form-group col-12 col-md-6 col-lg-4">
                    <label for="">Cidade *</label>
                    <input type="text" class="form-control" name="cidade" placeholder="" required>
                </div>
                <div class="mb-3 form-group col-12 col-md-6 col-lg-4">
                    <label for="">UF *</label>
                    <select class="form-control" name="uf" id="uf" required>
                        <option value="AC">Acre</option>
                        <option value="AL">Alagoas</option>
                        <option value="AP">Amapá</option>
                        <option value="AM">Amazonas</option>
                        <option value="BA">Bahia</option>
                        <option value="CE">Ceará</option>
                        <option value="DF">Distrito Federal</option>
                        <option value="ES">Espírito Santo</option>
                        <option value="GO">Goiás</option>
                        <option value="MA">Maranhão</option>
                        <option value="MT">Mato Grosso</option>
                        <option value="MS">Mato Grosso do Sul</option>
                        <option value="MG">Minas Gerais</option>
                        <option value="PA">Pará</option>
                        <option value="PB">Paraíba</option>
                        <option value="PR">Paraná</option>
                        <option value="PE">Pernambuco</option>
                        <option value="PI">Piauí</option>
                        <option value="RJ">Rio de Janeiro</option>
                        <option value="RN">Rio Grande do Norte</option>
                        <option value="RS">Rio Grande do Sul</option>
                        <option value="RO">Rondônia</option>
                        <option value="RR">Roraima</option>
                        <option value="SC">Santa Catarina</option>
                        <option value="SP">São Paulo</option>
                        <option value="SE">Sergipe</option>
                        <option value="TO">Tocantins</option>
                    </select>
                </div>
                <div class="mb-3 form-group col-12 col-md-5 col-lg-2">
                    <label for="">Quantidade *</label>
                    <input type="number" class="form-control" name="quantidade" min="0" step="0.01" required>
                </div>
                <div class="mb-3 form-group col-12 col-md-7 col-lg-4">
                    <label for="">Unidade *</label>
                    <select class="form-control" name="unidade" id="unidade" required>
                        <option value="ampere">ampere</option>
                        <option value="ano">ano</option>
                        <option value="cavalo-vapor">cavalo-vapor</option>
                        <option value="diâmetros em pol.">diâmetros em pol.</option>
                        <option value="hectare">hectare</option>
                        <option value="hora 1 dia">hora 1 dia</option>
                        <option value="hora 1 mês">hora 1 mês</option>
                        <option value="hora 1 semana">hora 1 semana</option>
                        <option value="km">km</option>
                        <option value="km2">km2</option>
                        <option value="litro">litro</option>
                        <option value="litro 1 hora">litro 1 hora</option>
                        <option value="m2">m2</option>
                        <option value="m3">m3</option>
                        <option value="m3 / hora">m3 / hora</option>
                        <option value="m3 / segundo">m3 / segundo</option>
                        <option value="metro">metro</option>
                        <option value="nº de animais">nº de animais</option>
                        <option value="nº de blocos">nº de blocos</option>
                        <option value="nº de casas">nº de casas</option>
                        <option value="nº de circuitos">nº de circuitos</option>
                        <option value="nº de exemplares">nº de exemplares</option>
                        <option value="nº de horas">nº de horas</option>
                        <option value="nº de lotes">nº de lotes</option>
                        <option value="nº de luminárias">nº de luminárias</option>
                        <option value="nº de mudas">nº de mudas</option>
                        <option value="nº de obras">nº de obras</option>
                        <option value="nº de pavimentos">nº de pavimentos</option>
                        <option value="nº de pontos">nº de pontos</option>
                        <option value="nº de postes">nº de postes</option>
                        <option value="nº de ramais">nº de ramais</option>
                        <option value="nº de sacas">nº de sacas</option>
                        <option value="nº de troncos">nº de troncos</option>
                        <option value="polegada">polegada</option>
                        <option value="quilo-caloria">quilo-caloria</option>
                        <option value="quilo-caloria / hora">quilo-caloria / hora</option>
                        <option value="quilograma">quilograma</option>
                        <option value="quilograma / hora">quilograma / hora</option>
                        <option value="quilograma-força">quilograma-força</option>
                        <option value="quilovolt">quilovolt</option>
                        <option value="quilovolt-ampere">quilovolt-ampere</option>
                        <option value="quilowatt">quilowatt</option>
                        <option value="ton. hora">ton. hora</option>
                        <option value="ton. refrigeração">ton. refrigeração</option>
                        <option value="tonelada">tonelada</option>
                        <option value="unidades">unidades</option>
                        <option value="unidades 1 hora">unidades 1 hora</option>
                        <option value="volt">volt</option>
                        <option value="watt">watt</option>

                    </select>
                </div>
            </div>
            <hr>
            <h5>Proprietário</h5>
            <div class="row mt-3">
                <div class="mb-3 form-group col-12 col-md-6 col-lg-4">
                    <label for="">Proprietário *</label>
                    <input type="text"
                        class="form-control" name="nome_proprietario" placeholder="" required>
                </div>
                <div class="mb-3 form-group col-12 col-md-3 col-lg-4">
                    <label for="">RG</label>
                    <input type="text"
                        class="form-control" name="rg_proprietario" placeholder="">
                </div>
                <div class="mb-3 form-group col-12 col-md-3 col-lg-4">
                    <label for="">CPF *</label>
                    <input type="text"
                        class="form-control" name="cpf_proprietario" placeholder="" required>
                </div> 
                <div class="mb-3 form-group col-12 col-md-8 col-lg-4">
                    <label for="">Endereço *</label>
                    <input type="text"
                        class="form-control" name="endereco_proprietario" placeholder="" required>
                </div> 
                <div class="mb-3 form-group col-12 col-md-4 col-lg-2">
                    <label for="">N° *</label>
                    <input type="text"
                        class="form-control" name="numero_proprietario" placeholder="" required>
                </div> 
                <div class="mb-3 form-group col-12 col-lg-6">
                    <label for="">Complemento</label>
                    <input type="text"
                        class="form-control" name="complemento_proprietario" placeholder="">
                </div> 
                <div class="mb-3 form-group col-12 col-md-6 col-lg-3">
                    <label for="">Telefone *</label>
                    <input type="text"
                        class="form-control" name="telefone_proprietario" placeholder="" required>
                </div> 
                <div class="mb-3 form-group col-12 col-md-6 col-lg-3">
                    <label for="">CEP *</label>
                    <input type="text"
                        class="form-control" name="cep_proprietario" placeholder="" required>
                </div> 
                <div class="mb-3 form-group col-12 col-md-6 col-lg-3">
                    <label for="">Cidade *</label>
                    <input type="text"
                        class="form-control" name="cidade_proprietario" placeholder="" required>
                </div> 
                <div class="mb-3 form-group col-12 col-md-6 col-lg-3">
                    <label for="">UF *</label>
                    <select class="form-control" name="uf_proprietario" id="uf" required>
                        <option value="AC">Acre</option>
                        <option value="AL">Alagoas</option>
                        <option value="AP">Amapá</option>
                        <option value="AM">Amazonas</option>
                        <option value="BA">Bahia</option>
                        <option value="CE">Ceará</option>
                        <option value="DF">Distrito Federal</option>
                        <option value="ES">Espírito Santo</option>
                        <option value="GO">Goiás</option>
                        <option value="MA">Maranhão</option>
                        <option value="MT">Mato Grosso</option>
                        <option value="MS">Mato Grosso do Sul</option>
                        <option value="MG">Minas Gerais</option>
                        <option value="PA">Pará</option>
                        <option value="PB">Paraíba</option>
                        <option value="PR">Paraná</option>
                        <option value="PE">Pernambuco</option>
                        <option value="PI">Piauí</option>
                        <option value="RJ">Rio de Janeiro</option>
                        <option value="RN">Rio Grande do Norte</option>
                        <option value="RS">Rio Grande do Sul</option>
                        <option value="RO">Rondônia</option>
                        <option value="RR">Roraima</option>
                        <option value="SC">Santa Catarina</option>
                        <option value="SP">São Paulo</option>
                        <option value="SE">Sergipe</option>
                        <option value="TO">Tocantins</option>
                    </select>
                </div>
            </div>
            <hr>
            <h5>Autor do Projeto</h5>
            <div class="row mt-3">
                <div class="mb-3 form-group col-12 col-md-12 col-lg-4">
                    <label for="">Autor do Projeto*</label>
                    <input type="text"
                        class="form-control" name="nome_autor" placeholder="" required>
                </div>
                <div class="mb-3 form-group col-12 col-md-12 col-lg-8">
                    <label for="">Título*</label>
                    <select class="form-control" name="titulo_autor">
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
                <div class="mb-3 form-group col-12 col-md-4 col-lg-4">
                    <label for="">Registro no Coneselho n° *</label>
                    <input type="text"
                        class="form-control" name="registro_autor" placeholder="" required>
                </div>
                <div class="mb-3 form-group col-12 col-md-4 col-lg-4">
                    <label for="">Documento de RT *</label>
                    <input type="text"
                        class="form-control" name="documento_autor" placeholder="" required>
                </div>
                <div class="mb-3 form-group col-12 col-md-4 col-lg-4">
                    <label for="">Inscrição Municipal *</label>
                    <input type="text"
                        class="form-control" name="inscricao_autor" placeholder="" required>
                </div>
                <div class="mb-3 form-group col-12 col-md-12 col-lg-6">
                    <label for="">Endereço *</label>
                    <input type="text"
                        class="form-control" name="endereco_autor" placeholder="" required>
                </div>
                <div class="mb-3 form-group col-12 col-md-2 col-lg-2">
                    <label for="">N° *</label>
                    <input type="text"
                        class="form-control" name="numero_autor" placeholder="" required>
                </div>
                <div class="mb-3 form-group col-12 col-md-10 col-lg-4">
                    <label for="">Complemento </label>
                    <input type="text"
                        class="form-control" name="complemento_autor" placeholder="">
                </div>
                <div class="mb-3 form-group col-12 col-md-6 col-lg-3">
                    <label for="">Telefone *</label>
                    <input type="text"
                        class="form-control" name="telefone_autor" placeholder="" required>
                </div> 
                <div class="mb-3 form-group col-12 col-md-6 col-lg-3">
                    <label for="">CEP *</label>
                    <input type="text"
                        class="form-control" name="cep_autor" placeholder="" required>
                </div> 
                <div class="mb-3 form-group col-12 col-md-6 col-lg-3">
                    <label for="">Cidade *</label>
                    <input type="text"
                        class="form-control" name="cidade_autor" placeholder="" required>
                </div> 
                <div class="mb-3 form-group col-12 col-md-6 col-lg-3">
                    <label for="">UF *</label>
                    <select class="form-control" name="uf_autor" required>
                        <option value="AC">Acre</option>
                        <option value="AL">Alagoas</option>
                        <option value="AP">Amapá</option>
                        <option value="AM">Amazonas</option>
                        <option value="BA">Bahia</option>
                        <option value="CE">Ceará</option>
                        <option value="DF">Distrito Federal</option>
                        <option value="ES">Espírito Santo</option>
                        <option value="GO">Goiás</option>
                        <option value="MA">Maranhão</option>
                        <option value="MT">Mato Grosso</option>
                        <option value="MS">Mato Grosso do Sul</option>
                        <option value="MG">Minas Gerais</option>
                        <option value="PA">Pará</option>
                        <option value="PB">Paraíba</option>
                        <option value="PR">Paraná</option>
                        <option value="PE">Pernambuco</option>
                        <option value="PI">Piauí</option>
                        <option value="RJ">Rio de Janeiro</option>
                        <option value="RN">Rio Grande do Norte</option>
                        <option value="RS">Rio Grande do Sul</option>
                        <option value="RO">Rondônia</option>
                        <option value="RR">Roraima</option>
                        <option value="SC">Santa Catarina</option>
                        <option value="SP">São Paulo</option>
                        <option value="SE">Sergipe</option>
                        <option value="TO">Tocantins</option>
                    </select>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-12 text-center">
                    <button type="submit" class="btn btn-primary px-3">Emitir</button>
                </div>
            </div>
        </form>
    </div>

</div>
@endsection