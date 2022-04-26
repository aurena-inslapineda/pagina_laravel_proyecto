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

// SHIPS
Route::get('/dashboard/ships', function () {
    return view('ships');
})->middleware(['auth'])->name('ships');


// MANUFACTURERS
use App\Http\Controllers\ManufacturersController;
Route::get('/dashboard/manufacturers', [ManufacturersController::class, 'show'])->middleware(['auth'])->name('manufacturers');
Route::get('/dashboard/manufacturers/delete/{id_manufacturers}', [ManufacturersController::class, 'delete'])->middleware(['auth'])->name('manufacturers.delete');

// ROLS
use App\Http\Controllers\RolsController;
Route::get('/dashboard/rol', [RolsController::class, 'show'])->middleware(['auth'])->name('rol');
Route::get('/dashboard/rol/delete/{id_rols}', [RolsController::class, 'delete'])->middleware(['auth'])->name('rol.delete');

// FOCUS
use App\Http\Controllers\FocusController;
Route::get('/dashboard/focus', [FocusController::class, 'show'])->middleware(['auth'])->name('focus');
Route::get('/dashboard/focus/delete/{id_focus}', [FocusController::class, 'delete'])->middleware(['auth'])->name('focus.delete');

require __DIR__.'/auth.php';