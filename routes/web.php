<?php

use App\Availability;
use Illuminate\Support\Carbon;
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
    return Availability::find(1)->toJson();
    // $time = Carbon::create(2020, 6, 4, 21, 10, 0, 'Pacific/Auckland');

    // return $time->tz('Pacific/Auckland')->toDateTimeLocalString();

    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/managers', 'ManagerController@index');
Route::get('/managers/create', 'ManagerController@create');
Route::post('/managers', 'ManagerController@store');
Route::get('/managers/{manager}', 'ManagerController@edit');
Route::patch('/managers/{manager}', 'ManagerController@update');
Route::delete('/managers/{manager}', 'ManagerController@destroy');

Route::get('/properties', 'PropertyController@index');
Route::get('/properties/create', 'PropertyController@create');
Route::post('/properties', 'PropertyController@store');
Route::get('/properties/{property}', 'PropertyController@edit');
Route::patch('/properties/{property}', 'PropertyController@update');
Route::delete('/properties/{property}', 'PropertyController@destroy');

Route::get('/properties/{property}/room-types', 'RoomTypeController@index');
Route::get('/properties/{property}/room-types/create', 'RoomTypeController@create');
Route::post('/properties/{property}/room-types', 'RoomTypeController@store');
Route::get('/properties/{property}/room-types/{type}', 'RoomTypeController@edit');
Route::patch('/properties/{property}/room-types/{type}', 'RoomTypeController@update');
Route::delete('/properties/{property}/room-types/{type}', 'RoomTypeController@destroy');

Route::get('/room-type/{type}/rooms', 'RoomController@index');
Route::get('/room-type/{type}/create', 'RoomController@create');
Route::post('/room-type/{type}/rooms', 'RoomController@store');
Route::get('/room-type/{type}/rooms/{room}', 'RoomController@edit');
Route::patch('/room-type/{type}/rooms/{room}', 'RoomController@update');
Route::delete('/room-type/{type}/rooms/{room}', 'RoomController@destroy');

Route::get('/availabilities/create', 'AvailabilityController@create');
Route::post('/availabilities', 'AvailabilityController@store');
Route::get('/availabilities', 'AvailabilityController@index');

Route::get('/admin', function () {
    return view('admin');
});
