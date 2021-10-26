<?php

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
    return view('landing');
})->name('home');

Route::get('/char', function () {
    return view('char');
});

Route::get('/mov', function () {
    return view('mov');
});

Route::get('/card', function () {
    return view('card', [ 'comics' => config('comics')[0] ]);
})->name('card');