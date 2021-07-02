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
Auth::routes();

Route::get('logout','Auth\LoginController@logout')->name('logout');
Route::post('logout','Auth\LoginController@logout')->name('logout');

Route::get('/', 'HomeController@index')->name('home');

Route::get('/about', 'AboutController@index')->name('about');

Route::view('/login', '/auth/login')->name('login');

Route::get('/services', 'ServicesController@index')->name('services');

Route::view('/regSec', '/auth/register');
