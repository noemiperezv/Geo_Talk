<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::middleware(['auth:sanctum', 'verified'])->get('/clases', function () {
    return view('clases');
})->name('clases');

Route::middleware(['auth:sanctum', 'verified'])->get('/mis_clases', function () {
    return view('mis_clases');
})->name('mis_clases');

Route::middleware(['auth:sanctum', 'verified'])->get('/crear_clase', function () {
    return view('crear_clase');
})->name('crear_clase');

Route::middleware(['auth:sanctum', 'verified'])->get('/editar_clase', function () {
    return view('editar_clase');
})->name('editar_clase');

Route::middleware(['auth:sanctum', 'verified'])->get('/noticiasInicio', function () {
    return view('noticiasInicio');
})->name('noticiasInicio');

Route::middleware(['auth:sanctum', 'verified'])->get('/noticiasUsuarios', function () {
    return view('noticiasUsuarios');
})->name('noticiasUsuarios');

Route::middleware(['auth:sanctum', 'verified'])->get('/crearPublicacion', function () {
    return view('crearPublicacion');
})->name('crearPublicacion');

Route::middleware(['auth:sanctum', 'verified'])->get('/ver_clase', function () {
    return view('ver_clase');
})->name('ver_clase');

Route::middleware(['auth:sanctum', 'verified'])->get('/quienes_somos', function () {
    return view('quienes_somos');
})->name('quienes_somos');

Route::middleware(['auth:sanctum', 'verified'])->get('/objetivo', function () {
    return view('objetivo');
})->name('objetivo');

Route::middleware(['auth:sanctum', 'verified'])->get('/mapa_del_sitio', function () {
    return view('mapa_del_sitio');
})->name('mapa_del_sitio');

Route::middleware(['auth:sanctum', 'verified'])->get('/contacto', function () {
    return view('contacto');
})->name('contacto');