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



Auth::routes(['verify' => true]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::post('/resgistro', [App\Http\Controllers\UsuarioController::class,'create']); 
Route::get('/detalleM/{id}', [App\Http\Controllers\mascotaController::class, 'show']);
Route::get('/mascotas', [App\Http\Controllers\mascotaController::class, 'mascota']);
//contacto
Route::get('/contactanos', [App\Http\Controllers\ContactoController::class, 'contacto'])->name('contactanos');
Route::get('/cuidados', [App\Http\Controllers\mascotaController::class, 'cuidados'])->name('cuidados');
//Route::get('/mascota/{idTipo}', [App\Http\Controllers\mascotaController::class, 'idMascotas'])->name('/mascota');
Route::get('/prueba', [App\Http\Controllers\ContactoController::class, 'all']);
Route::post('/mascota/all', [App\Http\Controllers\mascotaController::class, 'mascotasId']);
Route::post('/cuidados', [App\Http\Controllers\mascotaController::class, 'cuidados'])->name('cuidados');
Route::get('search/mascota', [App\Http\Controllers\mascotaController::class, 'search']);
Route::post('mascotas/encontradas', [App\Http\Controllers\mascotaController::class, 'encontradas'])->name('encontrados');

