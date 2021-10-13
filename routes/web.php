<?php

use App\Http\Controllers\AnnouncementController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\SpecsController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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

Route::get('registro', [UserController::class, 'create']);

Route::get('convocatoria', [AnnouncementController::class, 'create']);

route::get('especificaciones', [SpecsController::class, 'create']);
