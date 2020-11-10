<?php

use Illuminate\Support\Facades\Route;
use Laravel\Fortify\Fortify;

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


Fortify::viewPrefix('auth.');

Route::get('/', function () {
    return view('welcome');
});

Route::view('home', 'user.home')
	->name('home')
	->middleware(['auth', 'verified']);
