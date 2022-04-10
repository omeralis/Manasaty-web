<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\registeringController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
// */
// Route::get('/', 'App\Http\Controllers\NewsController@getNews');
// Route::post('/', 'App\Http\Controllers\NewsController@postNews');

Route::get('/', function () {return view('pages.home');});
Auth::routes();
Route::resource('news', 'App\Http\Controllers\NewsController');
Route::get('email', 'App\Http\Controllers\NewsController@emailData');

Route::resource('registering', 'App\Http\Controllers\registeringController');
Route::get('registeringphone', 'App\Http\Controllers\registeringController@registeringData');



Route::resource('newsData', 'App\Http\Controllers\HomeController@emailData');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])  ->name('home');
