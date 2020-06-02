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

Route::namespace('front')->group(function(){

    Route::get('/','homeController@index')->name('front.homepage');
    Route::get('/flight','flightController@flight')->name('front.flight');
    Route::get('/log_reg','loginController@showForm')->name('front.log');
    Route::get('/log/reg','registerController@showReg')->name('front.reg');
    Route::get('/logout','logout@log_out')->name('front.index');
    Route::get('/reserve','reserveController@showForm')->name('front.showreserve');
    Route::post('/login','loginController@login')->name('front.login');
    Route::post('/register','registerController@register')->name('front.register');
    Route::post('/search_flight','searchflightController@searchflight')->name('front.search');
    Route::post('/search_reserve','searchflightController@reservesearchflight')->name('front.reservesearch');
    Route::post('/reserve_ticket','reserveController@Reserve')->name('front.save_ticket');

});

Route::namespace('admin')->group(function(){

Route::get('/viewticket','ticketController@viewallticket')->name('admin.view_ticket');
    Route::get('/list_after/{id}','ticketController@delete');
});