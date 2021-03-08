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
Route::post('/logar', [App\Http\Controllers\SiteController::class, 'logar'])->name("site.logar");
Route::get('/registro', [App\Http\Controllers\SiteController::class, 'registro'])->name("site.registro");
Route::post('/registrar', [App\Http\Controllers\SiteController::class, 'registrar'])->name("site.registrar");

Route::middleware(['responsavel'])->group(function () {
    Route::get('/', [App\Http\Controllers\SiteController::class, 'index'])->name("site.index");
    Route::get('/emissao', [App\Http\Controllers\SiteController::class, 'emissao'])->name("site.emissao");
    Route::post('/pdf/criar', [App\Http\Controllers\PdfController::class, 'criar'])->name("pdf.criar");
    Route::get('/pdf/baixar/{ordem}', [App\Http\Controllers\PdfController::class, 'baixar'])->name("pdf.baixar");
});

Route::get('/painel/login', [App\Http\Controllers\PainelController::class, 'login'])->name("painel.login");
Route::post('/painel/logar', [App\Http\Controllers\PainelController::class, 'logar'])->name("painel.logar");

Route::middleware(['usuario'])->group(function () {
    Route::get('/painel', [App\Http\Controllers\PainelController::class, 'index'])->name("painel.index");
    Route::get('/painel/sair', [\App\Http\Controllers\PainelController::class, 'sair'])->name("painel.sair");

    // Rotas de responsáveis
    Route::get('/painel/responsaveis', [App\Http\Controllers\EngenheirosController::class, 'index'])->name("painel.responsaveis");
    Route::get('/painel/responsavel/{responsavel}', [App\Http\Controllers\EngenheirosController::class, 'visualizar'])->name("painel.responsavel.visualizar");
    Route::get('/painel/responsavel/aprovar/{responsavel}', [App\Http\Controllers\EngenheirosController::class, 'aprovar'])->name("painel.responsavel.aprovar");
    Route::get('/painel/responsavel/bloquear/{responsavel}', [App\Http\Controllers\EngenheirosController::class, 'bloquear'])->name("painel.responsavel.bloquear");

    Route::get('/painel/ordem/aprovar/{ordem}', [App\Http\Controllers\OrdensController::class, 'aprovar'])->name("painel.ordem.aprovar");
    Route::get('/painel/ordem/bloquear/{ordem}', [App\Http\Controllers\OrdensController::class, 'bloquear'])->name("painel.ordem.bloquear");
});