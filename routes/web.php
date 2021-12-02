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



// Route::get('/', function () {
//     return view('auth.login');
// });

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// Rutas Usuario
Auth::routes();

Route::resource('admin', 'App\Http\Controllers\AdminController')->names('admins');
Route::resource('evaluacion', 'App\Http\Controllers\EvaluacionController')->names('evaluacion');
Route::resource('componentes', 'App\Http\Controllers\ComponentesController')->names('componentes');
Route::resource('mejoramiento', 'App\Http\Controllers\MejoramientoController')->names('mejoramiento');

Route::post('/createEvaluacion', 'App\Http\Controllers\EmpleadoController@store')->name('empleado.crear');

Route::view('/empleados', 'empleados')->name('empleados');

Route::middleware(['auth'])->group(function () {
    // Route::post('/empleados', [App\Http\Controllers\EmpleadosController::class, 'store'])->name('empleados.store');
});
// Route::get('/register', function (){
//     return view('auth.register');
// });
