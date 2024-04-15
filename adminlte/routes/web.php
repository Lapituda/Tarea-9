<?php

use Illuminate\Support\Facades\Route;

// Ruta para la página de inicio
Route::get('/', function () {
    return view('home');
});

// Rutas de autenticación
Auth::routes();

// Ruta para la página de inicio después de iniciar sesión
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Rutas para otras páginas
Route::get('/photos', function () {
    return view('photos');
})->name('photos');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');
