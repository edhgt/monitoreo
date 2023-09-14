<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::resource('dispositivos', App\Http\Controllers\DispositivoController::class);
Route::resource('tipo-mediciones', App\Http\Controllers\TipoMedicionController::class)
->parameters(['tipo-mediciones' => 'tipoMedicion']);
