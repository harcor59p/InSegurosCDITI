<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\MailCotizacionesController;
use App\Http\Controllers\NewPasswordController;
use App\Http\Controllers\PasswordResetController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SegurosController;
use App\Http\Controllers\VehiculosController;
use App\Http\Controllers\SeguroVidaController;
use App\Http\Controllers\SoatController;
use App\Http\Controllers\UsersController;

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

//--------------- Rutas Login, Register y Resetear Password ---------------//
Route::post('login', [AuthController::class, 'login'])->name('login');
Route::view('login', 'auth.login');
Route::post('register',[RegisterController::class, 'register'])->name('register');
Route::view('register','register');
Route::view('resetPassword', 'resetPassword')->name('passwordReset');
Route::post('rResetPassword', [PasswordResetController::class, 'store'])->name('rPasswordReset');
Route::view('new-password', 'new-password');
Route::post('newPassword', [NewPasswordController::class, 'store'])->name('nuevaContra');

Route::middleware(['auth'])->group(function(){
    //***** Rutas para Usuarios y Admins depues de Loguearse: *****//
    Route::resource('/dashboard', DashboardController::class);

    //--------------------- Rutas Usuarios -----------------------//
    Route::resource('/usuarios', UsersController::class);

    //--------------------- Rutas Clientes -----------------------//
    Route::resource('/clientes', ClienteController::class);

    //------------------------ Rutas SOAT ------------------------//
    Route::resource('/soat', SoatController::class);
    //------------------ Rutas Seguro de Vida --------------------//
    Route::view('segurosDeVida', 'cotizaciones.seguroVida')->name('segurosDeVida');
    Route::post('emailSeguroDeVida-enviado', [MailCotizacionesController::class, 'store'])->name('mailSeguros');
    Route::view('cotizaTuSeguroDeVida', 'cotizaciones.rSeguroVida')->name('rSeguroVida');
    Route::post('seguro-guardado', [SegurosController::class, 'store'])->name('guardarSeguro');
    Route::view('cotizacionEnviada-correo', 'emails.seguros')->name('emailSeguros');

    //------------------- Rutas Vehiculos ---------------------//
    Route::resource('/vehiculos', VehiculosController::class);
    //Route::resource('/vehiculos', ClienteController::class);

    Route::put('logout', [AuthController::class, 'logout'])->name('logout');
});

