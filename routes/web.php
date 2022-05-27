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

// Load ships
Route::get('/', function () {
    return view('welcome');
});


// TODO hacer que el usuario solo pueda ver sus ordenes y el admin todas las ordenes
use App\Http\Controllers\OrdersController;
Route::get('/dashboard', [OrdersController::class, 'show'])->middleware(['auth'])->name('dashboard');



// SHIPS
use App\Http\Controllers\ShipsController;
Route::get('/dashboard/ships', [ShipsController::class, 'show'])->middleware(['adminAuth'])->name('ships');
Route::get('/dashboard/ships/delete/{id_ship}', [ShipsController::class, 'delete'])->middleware(['adminAuth'])->name('ships.delete');
Route::get('/dashboard/ships/update/{id_ship}', [ShipsController::class, 'update'])->middleware(['adminAuth'])->name('ships.update');
Route::post('/dashboard/ships/update/{id_ship}/confirm', [ShipsController::class, 'updateConfirm'])->middleware(['adminAuth'])->name('ships.updateConfirm');
Route::get('/dashboard/ships/add', [ShipsController::class, 'add'])->middleware(['adminAuth'])->name('ships.add');
Route::post('/dashboard/ships/add/confirm', [ShipsController::class, 'addConfirm'])->middleware(['adminAuth'])->name('ships.addConfirm');


// MANUFACTURERS
use App\Http\Controllers\ManufacturersController;
Route::get('/dashboard/manufacturers', [ManufacturersController::class, 'show'])->middleware(['adminAuth'])->name('manufacturers');
Route::get('/dashboard/manufacturers/delete/{id_manufacturers}', [ManufacturersController::class, 'delete'])->middleware(['adminAuth'])->name('manufacturers.delete');
Route::get('/dashboard/manufacturers/update/{id_manufacturers}', [ManufacturersController::class, 'update'])->middleware(['adminAuth'])->name('manufacturers.update');
Route::post('/dashboard/manufacturers/update/{id_manufacturers}/confirm', [ManufacturersController::class, 'updateConfirm'])->middleware(['adminAuth'])->name('manufacturers.updateConfirm');
Route::get('/dashboard/manufacturers/add', [ManufacturersController::class, 'add'])->middleware(['adminAuth'])->name('manufacturers.add');
Route::post('/dashboard/manufacturers/add/confirm', [ManufacturersController::class, 'addConfirm'])->middleware(['adminAuth'])->name('manufacturers.addConfirm');

// ROLS
use App\Http\Controllers\RolsController;
Route::get('/dashboard/rol', [RolsController::class, 'show'])->middleware(['adminAuth'])->name('rol');
Route::get('/dashboard/rol/delete/{id_rols}', [RolsController::class, 'delete'])->middleware(['adminAuth'])->name('rol.delete');
Route::get('/dashboard/rol/update/{id_rols}', [RolsController::class, 'update'])->middleware(['adminAuth'])->name('rol.update');
Route::post('/dashboard/rol/update/{id_rols}/Confirm', [RolsController::class, 'updateConfirm'])->middleware(['adminAuth'])->name('rol.updateConfirm');
Route::get('/dashboard/rol/add', [RolsController::class, 'add'])->middleware(['adminAuth'])->name('rol.add');
Route::post('/dashboard/rol/add/confirm', [RolsController::class, 'addConfirm'])->middleware(['adminAuth'])->name('rol.addConfirm');

// FOCUS
use App\Http\Controllers\FocusController;
Route::get('/dashboard/focus', [FocusController::class, 'show'])->middleware(['adminAuth'])->name('focus');
Route::get('/dashboard/focus/delete/{id_focus}', [FocusController::class, 'delete'])->middleware(['adminAuth'])->name('focus.delete');
Route::get('/dashboard/focus/update/{id_focus}', [FocusController::class, 'update'])->middleware(['adminAuth'])->name('focus.update');
Route::post('/dashboard/focus/update/{id_focus}/confim', [FocusController::class, 'updateConfirm'])->middleware(['adminAuth'])->name('focus.updateConfirm');
Route::get('/dashboard/focus/add', [FocusController::class, 'add'])->middleware(['adminAuth'])->name('focus.add');
Route::post('/dashboard/focus/add/confirm', [FocusController::class, 'addConfirm'])->middleware(['adminAuth'])->name('focus.addConfirm');

require __DIR__.'/auth.php';