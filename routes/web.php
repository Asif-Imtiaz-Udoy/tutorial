<?php

use Illuminate\Support\Facades\DB;
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

Route::get('/', [App\Http\Controllers\TestController::class, 'index']);

Route::get('/noaccess', [App\Http\Controllers\TestController::class, 'noaccess'])->name('noaccess');

Route::resource('post', App\Http\Controllers\ResourceController::class, ['names' => 'post', 'only' => ['show', 'create']]);