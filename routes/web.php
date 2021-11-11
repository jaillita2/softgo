<?php

use App\Http\Controllers\AnnouncementController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\EspecificacionesController;
use App\Http\Controllers\SpecsController;
use App\Http\Controllers\UserCreateController;
use App\Http\Controllers\DocumentacionPropuestaController;
use App\Http\Controllers\GrupoEmpresaController;
use App\Http\Controllers\PlanPagosController;
use App\Models\especificaciones;
use App\Http\Controllers\MaterialApoyoController;
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

Route::get('/', [Controller::class, 'index']);

/*Route::get('user', [UserCreateController::class, 'create']);*/

Route::get('convocatoria', [AnnouncementController::class, 'create']);

Route::post('convocatoria', [AnnouncementController::class, 'store'])->name('convocatoria.store');

Route::post('especificaciones', [EspecificacionesController::class, 'store'])->name('especificaciones.store');

Route::get('especificaciones', [SpecsController::class, 'create']);

Route::resource('users', UserCreateController::class);

Route::get('MaterialApoyo', [MaterialApoyoController::class, 'create']);

Route::post('MaterialApoyo', [MaterialApoyoController::class, 'store'])->name('MaterialApoyo.store');

Route::get('Propuesta', [DocumentacionPropuestaController::class, 'create']);

Route::get('Grupo', [GrupoEmpresaController::class, 'create']);
Route::post('Grupo', [GrupEmpresaController::class, 'store'])->name('Grupo.store');

Route::get('Pagos', [PlanPagosController::class, 'create']);