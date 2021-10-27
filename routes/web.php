<?php

use App\Http\Controllers\AnnouncementController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\EspecificacionesController;
use App\Http\Controllers\SpecsController;
use App\Http\Controllers\UserCreateController;
use App\Models\especificaciones;
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
