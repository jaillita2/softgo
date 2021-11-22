<?php

use App\Http\Controllers\AnnouncementController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\EspecificacionesController;
use App\Http\Controllers\SpecsController;
use App\Http\Controllers\UserCreateController;
use App\Http\Controllers\DocumentacionPropuestaController;
use App\Http\Controllers\GrupoEmpresaController;
use App\Http\Controllers\SesionController;
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
Route::post('Propuesta', [DocumentacionPropuestaController::class, 'store'])->name('Propuesta.store');

Route::get('Grupo', [GrupoEmpresaController::class, 'create']);
Route::post('Grupo', [GrupoEmpresaController::class, 'store'])->name('Grupo.store');

Route::get('Pagos', [PlanPagosController::class, 'create']);
Route::post('Pagos', [PlanPagosController::class, 'store'])->name('Pagos.store');

Route::get('Sesion', [UserCreateController::class, 'create']);
Route::post('Sesion', function(){
    $credentials = request()->only('NAME_USER', 'PASSWD_USER');

        if (Auth::attempt($credentials)) {
            return 'loggin';
        }
        return 'no log';
});
