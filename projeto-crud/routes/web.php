<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MensagemController;
use App\Http\Controllers\AnimeFrieren;

Route::get('/', function () {
    return view('welcome');
});

Route::get("/mensagem/{mensagem}", [MensagemController::class, 'mostrarMensagem']);

Route::resource('frieren', AnimeFrieren::class);
Route::POST('/frieren/create', [AnimeFrieren::class, 'create'])->name('frieren.create');
Route::DELETE('/frieren/delete/{id}', [AnimeFrieren::class, 'delete'])->name('frieren.delete');