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
Route::get('/', [App\Http\Controllers\SiteController::class, 'index'])->name("site.index");
Route::get('/login', [App\Http\Controllers\SiteController::class, 'login'])->name("site.login");
Route::post('/logar', [App\Http\Controllers\SiteController::class, 'logar'])->name("site.logar");
Route::get('/registro', [App\Http\Controllers\SiteController::class, 'registro'])->name("site.registro");
Route::post('/registrar', [App\Http\Controllers\SiteController::class, 'registrar'])->name("site.registrar");
Route::post('/pdf/criar', [App\Http\Controllers\PdfController::class, 'criar'])->name("pdf.criar");
