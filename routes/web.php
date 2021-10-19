<?php

use App\Http\Controllers\AnnouncementController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\SpecsController;
use App\Http\Controllers\UserCreateController;
use Illuminate\Support\Facades\Route;

// begin @jesus impotacion
use App\Http\Controllers\PliegoController;
// end importaciones

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

Route::get('especificaciones', [SpecsController::class, 'create']);

Route::resource('users', UserCreateController::class);

/*=========================
 begin @jesus agregar rutas para pliego 
=========================== */
Route::resource('pliego', PliegoController::class);
/*=========================
end @jesus rutas para pliego
=========================== */


