<?php

use App\Http\Controllers\JogosControler;
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


Route::prefix('jogos')->group(function(){
    Route::get('/', [JogosControler::class, 'index'])->name('jogos-index'); // Retorna os dados
    Route::get('/create', [JogosControler::class, 'create'])->name('jogos-create'); // Criação de Rotas
    Route::post('/', [JogosControler::class, 'store'])->name('jogos-store');
    Route::get('/{id}/edit', [JogosControler::class, 'edit'])->where('id', '[0-9]+')->name('jogos-edit');
    Route::put('/{id}', [JogosControler::class, 'update'])->name('jogos-update');
    Route::delete('/{id}', [JogosControler::class, 'destroy'])->name('jogos-destroy');
});


// Rota mal direcionada
Route::fallback(function(){
    return "Erro ao localizar a rota!";
});
