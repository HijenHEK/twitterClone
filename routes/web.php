<?php

use App\Http\Controllers\TweetController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Laravel\Fortify\Fortify;
use Laravel\Fortify\Http\Controllers\RegisteredUserController;

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


Route::post('tweets',[TweetController::class ,'store'])->middleware('auth');
Route::get('tweets',[TweetController::class,'index'])->name('home')
                                                    ->middleware(['auth', 'verified']);



