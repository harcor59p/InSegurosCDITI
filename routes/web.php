<?php

use App\Http\Controllers\Auth\AuthController;
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

Route::middleware(['auth'])->group(function(){

    //Ruta para ir al Dashboard
    //******************* Ruta para Usuarios **********************//
    //


});

Route::get('/register',[RegisterController::class, 'show']);

Route::post('/register',[RegisterController::class, 'register']);
