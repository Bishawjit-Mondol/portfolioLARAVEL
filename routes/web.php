<?php

use App\Http\Controllers\Demo;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TemplateController;

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

Route::get('/w2', [Demo::class, 'ui']);

Route::get('/me', [TemplateController::class, 'index']);

Route::get('create', [Demo::class, 'authCreate']);

Route::get('edit', [Demo::class, 'authUpdate']);