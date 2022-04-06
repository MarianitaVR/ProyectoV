<?php


/*CONTROLADORES*/

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProveedorController;
use App\Http\Controllers\CompraController;
use App\Http\Controllers\CategoriaController;

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

Route::get('/', [App\Http\Controllers\HomeController::class, 'index']);

Auth::routes();

Route::resource('profile', App\Http\Controllers\ProfileController::class);
Route::resource('users', App\Http\Controllers\UserController::class);
Route::resource('clients', App\Http\Controllers\ClientController::class);
Route::resource('calendar', App\Http\Controllers\CalendarController::class);

Route::get('api/calendar', [App\Http\Controllers\CalendarController::class, 'showJson']);
Route::post('api/calendar/edit/{id}', [App\Http\Controllers\CalendarController::class, 'editJson']);

Route::get('/proveedor',[ProveedorController::Class,'list']);
Route::resource('/proveedor',ProveedorController::Class);

Route::get('/compra',[CompraController::Class,'list']);
Route::resource('/compra',CompraController::Class);

Route::get('/Categoria',[CategoriaController::Class,'list']);
Route::resource('/Categoria',CategoriaController::Class);
