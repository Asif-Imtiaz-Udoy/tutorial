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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/product/{id?}', function ($id = 'all') {
    $data = [
        1 => 'Apple',
        2 => 'Orange',
        3 => 'Banana'
    ];

    if ($id == 'all') {
        return $data;
    } else {
        return $data[$id] ?? "The fruit is not in the basket";
    }
});

