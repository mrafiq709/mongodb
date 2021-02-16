<?php

use App\Http\Controllers\CarController;
use App\Http\Controllers\HomeController;
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

Route::get('/', [HomeController::class, 'index']);

Route::get('add',[CarController::class, 'create']);
Route::post('add',[CarController::class, 'store']);
Route::get('cars',[CarController::class, 'index'])->name('index');
Route::get('edit/{id}',[CarController::class, 'edit'])->name('edit');
Route::post('edit/{id}',[CarController::class, 'update'])->name('update');
Route::delete('{id}',[CarController::class, 'destroy'])->name('destroy');
