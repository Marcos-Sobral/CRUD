<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JogosController;
use App\Http\Livewire\Header;

Route::prefix('jogos')->group(function(){
    Route::get('/index', [JogosController::class, 'index'])->name('jogos-index');
    Route::get('/login', [JogosController::class, 'login'])->name('jogos-login');
    Route::get('/grid', [JogosController::class, 'grid'])->name('jogos-grid');
    Route::get('/teste', Header::class);
    Route::get('/create', [JogosController::class, 'create'])->name('jogos-create');
    Route::post('/', [JogosController::class, 'store'])->name('jogos-store');
    Route::get('/{id}/edit', [JogosController::class, 'edit'])->where('id', '[0-9]+')->name('jogos-edit');
    Route::put('/{id}', [JogosController::class, 'update'])->where('id', '[0-9]+')->name('jogos-update');
    Route::delete('/{id}', [JogosController::class, 'destroy'])->where('id', '[0-9]+')->name('jogos-destroy');
});


Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
