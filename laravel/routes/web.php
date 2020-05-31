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

Route::get('/register','RegisterController@showregester');
Route::post('/register','RegisterController@register');
Route::get('/reserve','AddTickets@show');
Route::post('/reserve','AddTickets@store');
Route::get('/reserve','reserveController@showForm')->name('front.showreserve');

Route::namespace('front')->group(function(){

Route::post('/reserve_ticket','reserveController@Reserve')->name('front.save_ticket');
});