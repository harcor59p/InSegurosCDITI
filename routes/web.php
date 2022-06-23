<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
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



Route::post('login', [AuthController::class, 'login'])->name('login');
Route::view('login', 'auth.login');
Route::post('register',[RegisterController::class, 'register'])->name('register');
Route::view('register','register');
Route::put('logout', [AuthController::class, 'logout'])->name('logout');
Route::resource('/clientes', ClienteController::class);
//Route::view('dashboard','dashboard');
//Route::get('dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');


Route::middleware(['auth'])->group(function(){

    //Ruta para ir al Dashboard
    //Route::view('dashboard','dashboard');
    Route::resource('dashboard', DashboardController::class);
    //******************* Ruta para Usuarios **********************//




});

