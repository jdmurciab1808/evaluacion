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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');


// Rutas Usuario
Auth::routes();

Route::resource('admin', 'App\Http\Controllers\AdminController')->names('admins');
Route::resource('evaluation', 'App\Http\Controllers\EvaluationController')->names('evaluations')->parameters(['evaluation' => 'evaluation']);
Route::resource('components', 'App\Http\Controllers\ComponentController')->names('components')->parameters(['component' => 'component']);
// Route::resource('componentes', 'App\Http\Controllers\ComponentController')->names('componentes');
// Route::resource('mejoramiento', 'App\Http\Controllers\ImprovementController')->names('mejoramiento');

Route::post('/createEvaluacion', 'App\Http\Controllers\EmpleadoController@store')->name('empleado.crear');

Route::view('/empleados', 'empleados')->name('empleados');
// Rutas usuarios autenticados
Route::middleware(['auth'])->group(function () {

    // Route::post('/empleados', [App\Http\Controllers\EmpleadosController::class, 'store'])->name('empleados.store');
});
// Route::get('/register', function (){
//     return view('auth.register');
// });
