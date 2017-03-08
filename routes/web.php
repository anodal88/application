<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('layouts.landing');
})->name('landing');

Auth::routes();

/*Route::get('/dashboard', 'ApplicationController@index')->name('dashboard') ;*/

/*Application Controller*/
Route::group(['prefix' => 'application'], function (){
    Route::get('/router', 'ApplicationController@router')->name('application.router') ;
});

/*Administrators*/
Route::group(['prefix' => 'admin'], function (){
    Route::get('/dashboard', 'AdminController@index')->name('admin.dashboard') ;
    Route::get('/dashboard/users', 'ManageUsersController@index')->name('admin.dashboard.users') ;
    Route::get('/dashboard/users/data', 'ManageUsersController@getIndexData')->name('admin.dashboard.usersdata') ;
});

/*Property Managers*/
Route::group(['prefix' => 'owner'], function (){
    Route::get('/dashboard', 'OwnerController@index')->name('owner.dashboard') ;
});

/*Users*/
Route::group(['prefix' => 'tenant'], function (){
    Route::get('/dashboard', 'TenantController@index')->name('tenant.dashboard') ;
});
