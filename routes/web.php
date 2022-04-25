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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');


// TODO Hacer que esta ruta solo pueda acceder un usuario con el artibuto isAdmin = true

Route::get('/dashboard/ships', function () {
    return view('ships');
})->middleware(['auth'])->name('ships');

Route::get('/dashboard/manufacturers', function () {
    return view('manufacturers');
})->middleware(['auth'])->name('manufacturers');

Route::get('/dashboard/rol', function () {
    return view('rol');
})->middleware(['auth'])->name('rol');

Route::get('/dashboard/focus', function () {
    return view('focus');
})->middleware(['auth'])->name('focus');

require __DIR__.'/auth.php';