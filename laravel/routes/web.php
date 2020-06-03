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
    Route::get('/admin','show_formsController@showpage')->name('admin.control');
    Route::get('/addflight','show_formsController@showaddflight')->name('admin.addflight');
    Route::get('/deleteflight','show_formsController@showdeleteflight')->name('admin.deleteflight');
    Route::get('/adduser','show_formsController@showadduser')->name('admin.adduser');
    Route::get('/deleteuser','show_formsController@showdeleteuser')->name('admin.deleteuser');
    Route::get('/deleteticket','show_formsController@showdeleteticket')->name('admin.deleteticket');
    Route::get('/addticket','show_formsController@showaddticket')->name('admin.addticket');
    Route::post('/addflight','FlightController@addflight')->name('admin.add_flight');
    Route::get('/listflight_after/{id}','FlightController@deleteflight')->name('admin.delete_flight');
    Route::get('/viewflight','FlightController@viewallflight')->name('admin.view_flight');
    Route::post('/adduser','userController@adduser')->name('admin.add_user');
    Route::get('/listuser_after/{id}','userController@deleteuser')->name('admin.delete_user');
    Route::get('/viewuser','userController@viewalluser')->name('admin.view_user');
    Route::get('/updatepassword','show_formsController@showupdatepassword')->name('admin.updatepassword');
    Route::post('/updatepassword','userController@updatepassword')->name('admin.update_password');
    Route::get('/viewticket','ticketController@viewallticket')->name('admin.view_ticket');
    Route::get('/list_after/{id}','ticketController@delete');


});
