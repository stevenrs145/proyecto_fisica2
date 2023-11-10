<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home');
});
Route::get('/primer-tema', function () {
    return view('primer_tema');
});

Route::get('/segundo-tema', function () {
    return view('segundo_tema');
});

Route::get('/tercer-tema', function () {
    return view('tercer_tema');
});
