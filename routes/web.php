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

//Route::get('/','Site\HomeController@index')->name('Home');

//Route::get('/dashboard','adminPanel\HomeController@index')->name('dashbord');

Route::group(['prefix'=>'/','namespace'=>'site'],function (){
    Route::get('','HomeController@index')->name('Home');
});

Route::group(['prefix'=>'/dashboard','namespace'=>'adminPanel'],function (){
    Route::get('','HomeController@index')->name('dashbord');
    Route::group(['prefix'=>'/title'],function (){
        Route::get('','TitleController@index')->name('admin.title.index');
        Route::get('/create','TitleController@create')->name('admin.title.create');
        Route::get('/store/{id}','TitleController@store')->name('admin.title.store');
        Route::get('/edite/{id}','TitleController@edite')->name('admin.title.edite');
    });
});


