<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('templates.pagina2');
// });

// Route::get('/{pagina}', [App\Http\Controllers\PdfController::class, 'pagina1']);

Route::get('/login', [App\Http\Controllers\SiteController::class, 'login'])->name("site.login");
Route::get('/senha/recuperar', [App\Http\Controllers\SiteController::class, 'recuperar_senha'])->name("site.senha.recuperar");
Route::post('/senha/recuperar/temporaria', [App\Http\Controllers\SiteController::class, 'senha_temporaria'])->name("site.senha.temporaria");
Route::post('/senha/alterar', [App\Http\Controllers\SiteController::class, 'alterar_senha'])->name("site.senha.alterar");


Route::post('/logar', [App\Http\Controllers\SiteController::class, 'logar'])->name("site.logar");
Route::get('/registro', [App\Http\Controllers\SiteController::class, 'registro'])->name("site.registro");
Route::post('/registrar', [App\Http\Controllers\SiteController::class, 'registrar'])->name("site.registrar");

Route::middleware(['responsavel'])->group(function () {
    Route::get('/', [App\Http\Controllers\SiteController::class, 'index'])->name("site.index");
    Route::get('/responsavel', [App\Http\Controllers\SiteController::class, 'responsavel'])->name("site.responsavel");
    Route::get('/emissao', [App\Http\Controllers\SiteController::class, 'emissao'])->name("site.emissao");
    Route::post('/pdf/criar', [App\Http\Controllers\PdfController::class, 'criar'])->name("pdf.criar");
    Route::get('/pdf/baixar/{ordem}', [App\Http\Controllers\PdfController::class, 'baixar'])->name("pdf.baixar");
    Route::get('/sair', [App\Http\Controllers\SiteController::class, 'sair'])->name("site.sair");
});
Route::get('/teste', [App\Http\Controllers\PainelController::class, 'teste'])->name("painel.teste");

Route::get('/sistema/login', [App\Http\Controllers\PainelController::class, 'login'])->name("painel.login");
Route::post('/sistema/logar', [App\Http\Controllers\PainelController::class, 'logar'])->name("painel.logar");

Route::middleware(['usuario'])->group(function () {
    Route::get('/sistema', [App\Http\Controllers\PainelController::class, 'index'])->name("painel.index");
    Route::get('/sistema/sair', [\App\Http\Controllers\PainelController::class, 'sair'])->name("painel.sair");

    // Rotas de responsáveis
    Route::get('/sistema/responsaveis', [App\Http\Controllers\EngenheirosController::class, 'index'])->name("painel.responsaveis");
    Route::get('/sistema/responsaveis/analise', [App\Http\Controllers\EngenheirosController::class, 'analise'])->name("painel.responsaveis.analise");
    Route::get('/sistema/responsaveis/aprovados', [App\Http\Controllers\EngenheirosController::class, 'aprovados'])->name("painel.responsaveis.aprovados");
    Route::get('/sistema/responsaveis/reprovados', [App\Http\Controllers\EngenheirosController::class, 'reprovados'])->name("painel.responsaveis.reprovados");
    Route::get('/sistema/responsavel/{responsavel}', [App\Http\Controllers\EngenheirosController::class, 'visualizar'])->name("painel.responsavel.visualizar");
    Route::get('/sistema/responsavel/aprovar/{responsavel}', [App\Http\Controllers\EngenheirosController::class, 'aprovar'])->name("painel.responsavel.aprovar");
    Route::post('/sistema/responsavel/reprovar/{responsavel}', [App\Http\Controllers\EngenheirosController::class, 'reprovar'])->name("painel.responsavel.reprovar");

    Route::get('/sistema/ordens/analise', [App\Http\Controllers\OrdensController::class, 'analise'])->name("painel.ordem.analise");
    Route::get('/sistema/ordens/aprovadas', [App\Http\Controllers\OrdensController::class, 'aprovadas'])->name("painel.ordem.aprovadas");
    Route::get('/sistema/ordens/reprovadas', [App\Http\Controllers\OrdensController::class, 'reprovadas'])->name("painel.ordem.reprovadas");
    Route::get('/sistema/ordem/aprovar/{ordem}', [App\Http\Controllers\OrdensController::class, 'aprovar'])->name("painel.ordem.aprovar");
    Route::post('/sistema/ordem/reprovar/{ordem}', [App\Http\Controllers\OrdensController::class, 'reprovar'])->name("painel.ordem.reprovar");

    Route::get('/dashboard/usuarios/cadastro', [\App\Http\Controllers\UsuarioController::class, 'cadastro'])->name("painel.usuario.cadastro");
        Route::post('/dashboard/usuarios/cadastrar', [\App\Http\Controllers\UsuarioController::class, 'cadastrar'])->name("painel.usuario.cadastrar");
        Route::get('/dashboard/usuarios', [\App\Http\Controllers\UsuarioController::class, 'consultar'])->name("painel.usuarios");
        Route::get('/dashboard/usuarios/editar/{usuario}', [\App\Http\Controllers\UsuarioController::class, 'editar'])->name("painel.usuario.editar");
        Route::post('/dashboard/usuarios/salvar/{usuario}', [\App\Http\Controllers\UsuarioController::class, 'salvar'])->name("painel.usuario.salvar");
});