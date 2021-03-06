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
    return view('masyarakat.index');
});

//Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/login', 'AuthController@login')->name('login');
Route::post('/postlogin', 'AuthController@postlogin');
Route::get('/logout', 'AuthController@logout')->name('logout');
Route::post('/postregister', 'AuthController@postregister');
Route::get('/register', 'AuthController@register')->name('register');
Route::get('/dashboard', 'AuthController@dashboard')->name('dashboard');
