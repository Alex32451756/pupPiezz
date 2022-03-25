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
    return view('auth.login');
});



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::post('/resgistro', [App\Http\Controllers\UsuarioController::class,'create']); 
Route::get('/detalleM/{id}', [App\Http\Controllers\mascotaController::class, 'show']);
Route::get('/mascotas', [App\Http\Controllers\mascotaController::class, 'mascota']);
//contacto
Route::get('/contactanos', [App\Http\Controllers\ContactoController::class, 'contacto']);
Route::get('/mascotaId', [App\Http\Controllers\mascotaController::class, 'idMascotas']);

Route::get('/mascotaId', 'mascotaController@idMascotas');
