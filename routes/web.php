<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;

#Route::get('/',[Controller::class,'home'])->name('home');
Route::get('/', function () { 
    return view('home');
})->name('home');

Route::get('/produto', function () { 
    return view('produto');
})->name('produto');

Route::get('/sobre', function () { 
    return view('sobre');
})->name('sobre');

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::get('/cadastro', function () {
    return view('cadastro');
})->name('cadastro');

Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard')->middleware('auth');

Route::fallback(function(){
    return redirect()->route('login');
});