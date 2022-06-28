<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\NewPasswordController;
use App\Http\Controllers\PasswordResetController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\VehiculosController;
use App\Http\Controllers\SeguroVidaController;

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

//Rutas de Login y Resetear Contraseña
Route::post('login', [AuthController::class, 'login'])->name('login');
Route::view('login', 'auth.login');
Route::view('resetPassword', 'resetPassword')->name('passwordReset');
Route::post('rResetPassword', [PasswordResetController::class, 'store'])->name('rPasswordReset');
Route::view('new-password', 'new-password');
Route::post('newPassword', [NewPasswordController::class, 'store'])->name('nuevaContra');

Route::post('register',[RegisterController::class, 'register'])->name('register');
Route::view('register','register');
Route::put('logout', [AuthController::class, 'logout'])->name('logout');
Route::resource('/clientes', ClienteController::class);
//Route::view('dashboard','dashboard');
//Route::get('dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');

Route::middleware(['auth'])->group(function(){

    //Ruta para ir al Dashboard
    //Route::view('dashboard','dashboard');
    Route::resource('/dashboard', DashboardController::class);
    Route::resource('/clientes', ClienteController::class);
    Route::resource('/vehiculos', VehiculosController::class);
    //Route::resource('/vehiculos', ClienteController::class);
    //******************* Ruta para Usuarios **********************//

    //******************* Rutas para Usuarios **********************//
    Route::view('segurosDeVida', 'cotizaciones.seguroVida')->name('segurosDeVida');
    Route::view('cotizaTuSeguroDeVida', 'cotizaciones.rSeguroVida')->name('rSeguroVida');



});

