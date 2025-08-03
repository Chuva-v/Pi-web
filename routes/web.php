<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;
use App\Http\Controllers\ProdutoController;
use App\Livewire\Produtos;

#Route::get('/',[Controller::class,'home'])->name('home');
Route::get('/', function () { 
    return view('home');
})->name('home');

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::get('/cadastro', function () {
    return view('cadastro');
})->name('cadastro');

Route::get('/sobre', function () { 
    return view('sobre');
})->name('sobre');
    
Route::get('/produto', function() {
    return view('produto');
})->name('produto');

Route::get('/produtos-list', function() {
    return view('produtos-list');
})->name('produtos-list');
    
Route::get('/produtos/{id}', [ProdutoController::class, 'show'])->name('produto.show');

Route::fallback(function(){
    return redirect()->route('login');
});

Route::middleware(['auth'])->group(function () {
  
    Route::get('/dashboard', function () {
      return view('dashboard');
    })->name('dashboard');
    
});