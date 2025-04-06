<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::get('/', function () {
    return view('home');
});

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::get('/register', function () {
    return view('register');
})->name('register');
Route::get('/prueba-error', function () {
    abort(500);
});
Route::get('/prueba-error404', function () {
    abort(404);
});
Route::get('/catalogo', function () {
    return view('catalogo.catalogo');
})->name('catalogo');

//migracion base de datos

use App\Http\Controllers\UsuarioController;

Route::post('/registrar', [UsuarioController::class, 'store'])->name('usuarios.store');

Route::view('/stock_inventario', 'stock_inventario');
Route::view('/gerentedentregas', 'perfil_gerentedentregas');
Route::view('/distribuidor', 'perfil_distribuidor');
Route::view('/administrador', 'perfil_administrador');
Route::view('/ventas', 'ventas');


Route::post('/login', [AuthController::class, 'autenticar'])->name('login.auth');

