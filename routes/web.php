<?php

use App\Http\Controllers\ContatoController;
use App\Http\Controllers\FornecedoresController;
use App\Http\Controllers\PrincipalController;
use App\Http\Controllers\SobreNosController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PrincipalController::class, "principal"])->name('site.index');
Route::get('/sobre-nos', [SobrenosController::class, "sobrenos"])->name('site.sobrenos');

Route::get('/contato', [ContatoController::class, "contato"])->name('site.contato');
Route::post('/contato', [ContatoController::class, "contato"])->name('site.contato');

Route::get('/login', [ContatoController::class, "contato"])->name('site.login');

Route::prefix('/app')->group(function () {
    Route::get('/clientes', [ContatoController::class, "contato"])->name('app.clientes');
    Route::get('/fornecedores', [FornecedoresController::class, "index"])->name('app.fornecedores');
    Route::get('/produtos', [ContatoController::class, "contato"])->name('app.produtos');
});

Route::fallback(function () {
    echo 'A rota acessada nao existe, <a href="' . route('site.index') . '">clique aqui para ir para pagina inicial<a>';
});
