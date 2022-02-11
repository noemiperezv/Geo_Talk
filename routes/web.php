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