<?php

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



    Route::get('/','StaffController@index')->name('staffs.index');
    Route::get('/create','StaffController@create')->name('staffs.create');
    Route::post('create','StaffController@store')->name('staffs.store');
    Route::get('/{id}/edit','StaffController@edit')->name('staffs.edit');
    Route::post('/{id}/edit','StaffController@update')->name('staffs.update');
    Route::get('/{id}/destroy','StaffController@destroy')->name('staffs.destroy');
    Route::get('/search','StaffController@search')->name('staffs.search');

Route::get('/groups','GroupController@index')->name('group.index');

