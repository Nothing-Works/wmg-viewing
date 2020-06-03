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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/properties', 'PropertyController@index');
Route::get('/properties/create', 'PropertyController@create');
Route::post('/properties', 'PropertyController@store');
Route::get('/properties/{property}', 'PropertyController@edit');
Route::patch('/properties/{property}', 'PropertyController@update');
Route::delete('/properties/{property}', 'PropertyController@destroy');

Route::get('/room-types/{property}', 'RoomTypeController@index');
Route::get('/room-types/{property}/create', 'RoomTypeController@create');
Route::post('/room-types/{property}', 'RoomTypeController@store');
Route::get('/room-types/{property}/{type}', 'RoomTypeController@edit');
Route::patch('/room-types/{property}/{type}', 'RoomTypeController@update');
Route::delete('/room-types/{property}/{type}', 'RoomTypeController@destroy');

Route::get('/admin', function () {
    return view('admin');
});
