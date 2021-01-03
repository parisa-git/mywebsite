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
        Route::post('/store','TitleController@store')->name('admin.title.store');
        Route::get('/edit/{id}','TitleController@edit')->name('admin.title.edit');
        Route::post('/update/{id}' , 'TitleController@update')->name('admin.title.update');
        Route::get('/destroy/{id}' , 'TitleController@destroy')->name('admin.title.destroy');
        Route::post('/save_image' , 'TitleController@uploadImage');
    });


    Route::group(['prefix'=>'/jobcategories'],function (){
        Route::get('','JobCategoriesController@index')->name('admin.categories.index');
        Route::get('/create','JobCategoriesController@create')->name('admin.categories.create');
        Route::post('/store','JobCategoriesController@store')->name('admin.categories.store');
        Route::get('/edit/{id}','JobCategoriesController@edit')->name('admin.categories.edit');
        Route::post('/update/{id}' , 'JobCategoriesController@update')->name('admin.categories.update');
        Route::get('/destroy/{id}' , 'JobCategoriesController@destroy')->name('admin.categories.destroy');
        Route::post('/save_image' , 'JobCategoriesController@uploadImage');
    });

    Route::group(['prefix'=>'/jobs'],function (){
        Route::get('','JobsController@index')->name('admin.jobs.index');
        Route::get('/create','JobsController@create')->name('admin.jobs.create');
        Route::post('/store','JobsController@store')->name('admin.jobs.store');
        Route::get('/edit/{id}','JobsController@edit')->name('admin.jobs.edit');
        Route::post('/update/{id}' , 'JobsController@update')->name('admin.jobs.update');
        Route::get('/destroy/{id}' , 'JobsController@destroy')->name('admin.jobs.destroy');
        Route::post('/save_image' , 'JobsController@uploadImage');
    });


    Route::group(['prefix'=>'/companies'],function (){
        Route::get('','CompaniesController@index')->name('admin.companies.index');
        Route::get('/create','CompaniesController@create')->name('admin.companies.create');
        Route::post('/store','CompaniesController@store')->name('admin.companies.store');
        Route::get('/edit/{id}','CompaniesController@edit')->name('admin.companies.edit');
        Route::post('/update/{id}' , 'CompaniesController@update')->name('admin.companies.update');
        Route::get('/destroy/{id}' , 'CompaniesController@destroy')->name('admin.companies.destroy');
        Route::post('/save_image' , 'CompaniesController@uploadImage');
    });


    Route::group(['prefix'=>'/works'],function (){
        Route::get('','WorksController@index')->name('admin.works.index');
        Route::get('/create','WorksController@create')->name('admin.works.create');
        Route::post('/store','WorksController@store')->name('admin.works.store');
        Route::get('/edit/{id}','WorksController@edit')->name('admin.works.edit');
        Route::post('/update/{id}' , 'WorksController@update')->name('admin.works.update');
        Route::get('/destroy/{id}' , 'WorksController@destroy')->name('admin.works.destroy');
        Route::post('/save_image' , 'WorksController@uploadImage');
    });


    Route::group(['prefix'=>'/stories'],function (){
        Route::get('','StoriesController@index')->name('admin.stories.index');
        Route::get('/create','StoriesController@create')->name('admin.stories.create');
        Route::post('/store','StoriesController@store')->name('admin.stories.store');
        Route::get('/edit/{id}','StoriesController@edit')->name('admin.stories.edit');
        Route::post('/update/{id}' , 'StoriesController@update')->name('admin.stories.update');
        Route::get('/destroy/{id}' , 'StoriesController@destroy')->name('admin.stories.destroy');
        Route::post('/save_image' , 'StoriesController@uploadImage');
    });

    Route::group(['prefix'=>'/aboutus'],function (){
        Route::get('','AboutUsController@index')->name('admin.aboutus.index');
        Route::get('/create','AboutUsController@create')->name('admin.aboutus.create');
        Route::post('/store','AboutUsController@store')->name('admin.aboutus.store');
        Route::get('/edit/{id}','AboutUsController@edit')->name('admin.aboutus.edit');
        Route::post('/update/{id}' , 'AboutUsController@update')->name('admin.aboutus.update');
        Route::get('/destroy/{id}' , 'AboutUsController@destroy')->name('admin.aboutus.destroy');
        Route::post('/save_image' , 'AboutUsController@uploadImage');
    });
    Route::group(['prefix'=>'/state'],function (){
        Route::get('','StatesController@index')->name('admin.state.index');
        Route::get('/create','StatesController@create')->name('admin.state.create');
        Route::post('/store','StatesController@store')->name('admin.state.store');
        Route::get('/edit/{id}','StatesController@edit')->name('admin.state.edit');
        Route::post('/update/{id}' , 'StatesController@update')->name('admin.state.update');
        Route::get('/destroy/{id}' , 'StatesController@destroy')->name('admin.state.destroy');
        Route::post('/save_image' , 'StatesController@uploadImage');
    });


});



