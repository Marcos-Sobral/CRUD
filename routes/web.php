<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JogosController;
use App\Http\Livewire\Header;

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

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('jogos')->group(function(){
    Route::get('/', [JogosController::class, 'index'])->name('jogos-index');
    Route::get('/teste', Header::class);
    Route::get('/create', [JogosController::class, 'create'])->name('jogos-create');
    Route::post('/', [JogosController::class, 'store'])->name('jogos-store');
    Route::get('/{id}/edit', [JogosController::class, 'edit'])->where('id', '[0-9]+')->name('jogos-edit');
    Route::put('/{id}', [JogosController::class, 'update'])->where('id', '[0-9]+')->name('jogos-update');
    Route::delete('/{id}', [JogosController::class, 'destroy'])->where('id', '[0-9]+')->name('jogos-destroy');
});

Route::fallback(function(){
    return 'Erro';
});

//Route::get('/jogos', [JogosController::class, 'index']);

//Route::view('/jogo', 'jogos', ['name' => 'Debora']);

/*Route::get('/jogos/{id?}/{name?}', function($id = null, $name = null) {
    return view('jogos',['id' => $id, 'names'=>$name]);
})->where(['id' => '[0-9]+','name' => '[a-z]+']);
*/

