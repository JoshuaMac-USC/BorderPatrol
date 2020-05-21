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
    return view('welcome');
});

Route::get('/register', function () {
    return view('register');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/ledgers','LedgerController@index')->middleware('auth');
Route::get('/ledgers/create','LedgerController@create')->middleware('auth');
Route::post('/ledgers','LedgerController@store')->middleware('auth');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');