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

Auth::routes(['register' => true]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('dispositivos', App\Http\Controllers\DispositivoController::class);
Route::resource('tipo-mediciones', App\Http\Controllers\TipoMedicionController::class)
->parameters(['tipo-mediciones' => 'tipoMedicion']);

Route::prefix('admin')->middleware('can:Super Admin')->group(function () {
    Route::resource('users', App\Http\Controllers\UserController::class);
    Route::resource('roles', App\Http\Controllers\RoleController::class);
    Route::resource('permissions', App\Http\Controllers\PermissionController::class);
    Route::resource('dashboards', App\Http\Controllers\DashboardController::class);
});