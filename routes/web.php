<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ActividadController;
use App\Http\Controllers\activController;
use App\Http\Controllers\lugarController;
use App\Http\Controllers\InstructorController;


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
    return view('componentes.bienvenida');
});

Route::get('/actividad' ,[ActividadController::class,'index'])->name('actividad');
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');


Route::resource('Activ', activController::class);


Route::get('crear_lugar', [activController::class, 'lugar'] );

Route::resource('lugar', lugarController::class);

Route::resource('Instructor', InstructorController::class);




