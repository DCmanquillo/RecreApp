<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ActividadController;
use App\Http\Controllers\activController;
use App\Http\Controllers\lugarController;
use App\Http\Controllers\InstructorController;
use App\Http\Controllers\ContactosController;
use App\Http\Controllers\MequedoencasaController;

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

Route::get('/contactos' ,[ContactosController::class,'index'])->name('contactos');
Route::get('/documentos' ,[DocumentosController::class,'index'])->name('documentos');
Route::get('/cifras' ,[CifrasController::class,'index'])->name('cifras');
Route::get('/noticias' ,[NoticiasController::class,'index'])->name('noticias');
Route::get('/quedate' ,[MequedoencasaController::class,'index'])->name('quedate');



Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');


Route::resource('Activ', activController::class);


Route::get('crear_lugar', [activController::class, 'lugar'] );

Route::resource('lugar', lugarController::class);

Route::resource('Instructor', InstructorController::class);




