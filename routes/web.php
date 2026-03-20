<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PaginaController;
use App\Http\Controllers\PqrsController;

Route::get('/', [PaginaController::class, 'inicio'])->name('inicio');

Route::get('/nosotros', [PaginaController::class, 'nosotros'])->name('nosotros');


Route::get('/menu', function () {
    return view('menu');
})->name('menu');


Route::get('/contacto', function () {
    return view('contacto');
})->name('contacto');

