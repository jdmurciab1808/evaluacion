<?php

use App\Http\Controllers\EmpleadoaevaluarController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\EmpleadoController;
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
// Rutas Atenticacion
Auth::routes();
// Rutas Usuario
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::post('/createEvaluacion','App\Http\Controllers\EmpleadoController@store')->name('empleado.crear');

Route::middleware(['auth'])->group(function () {
    Route::view('/empleados', 'empleados')->name('empleados');
    // Route::post('/empleados', [App\Http\Controllers\EmpleadosController::class, 'store'])->name('empleados.store');
});
// Route::get('/register', function (){
//     return view('auth.register');
// });



