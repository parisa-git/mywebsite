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
    Route::get('/recendjobs','JobsController@index')->name('Home.recendjobs');
    Route::get('/aboutus','AboutUsController@index')->name('Home.aboutus');
    Route::get('/contactus','ContactusController@index')->name('Home.contactus');
    Route::get('/pricing','PricingController@index')->name('Home.pricing');
//    Route::post('/contactus','ContactusController@store')->name('send.email');
//    Route::get('/sendemail','ContactusController@index')->name('Home.contactus');
//    Route::post('/sendemail/send','ContactusController@send')->name('send.email');
    Route::get('/job-details/{id}','JobsController@show')->name('Home.jobdetails')->middleware('auth');
    Route::group(['prefix'=>'/title'],function (){

    });
});



Route::group(['prefix'=>'/dashboard','namespace'=>'adminPanel'],function (){
    Route::get('','HomeController@index')->name('dashbord')->middleware('auth');

    Route::group(['prefix'=>'/title'],function (){
        Route::get('','TitleController@index')->name('admin.title.index');
        Route::get('/create','TitleController@create')->name('admin.title.create');
        Route::post('/store','TitleController@store')->name('admin.title.store');
        Route::get('/edit/{id}','TitleController@edit')->name('admin.title.edit');
        Route::post('/update/{id}' , 'TitleController@update')->name('admin.title.update');
        Route::get('/destroy/{id}' , 'TitleController@destroy')->name('admin.title.destroy');
        Route::get('/show/{id}' , 'TitleController@show')->name('admin.title.show');
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

    Route::group(['prefix'=>'/candidates'],function (){
        Route::get('','CandidatesController@index')->name('admin.candidates.index');
        Route::get('/create','CandidatesController@create')->name('admin.candidates.create');
        Route::post('/store','CandidatesController@store')->name('admin.candidates.store');
        Route::get('/edit/{id}','CandidatesController@edit')->name('admin.candidates.edit');
        Route::post('/update/{id}' , 'CandidatesController@update')->name('admin.candidates.update');
        Route::get('/destroy/{id}' , 'CandidatesController@destroy')->name('admin.candidates.destroy');
        Route::post('/save_image' , 'CandidatesController@uploadImage');
    });

    Route::group(['prefix'=>'/pricing'],function (){
        Route::get('','PricingController@index')->name('admin.pricing.index');
        Route::get('/create','PricingController@create')->name('admin.pricing.create');
        Route::post('/store','PricingController@store')->name('admin.pricing.store');
        Route::get('/edit/{id}','PricingController@edit')->name('admin.pricing.edit');
        Route::post('/update/{id}' , 'PricingController@update')->name('admin.pricing.update');
        Route::get('/destroy/{id}' , 'PricingController@destroy')->name('admin.pricing.destroy');
        Route::post('/save_image' , 'PricingController@uploadImage');
    });

    Route::group(['prefix'=>'/posts'],function (){
        Route::get('','LatestPostsController@index')->name('admin.posts.index');
        Route::get('/create','LatestPostsController@create')->name('admin.posts.create');
        Route::post('/store','LatestPostsController@store')->name('admin.posts.store');
        Route::get('/edit/{id}','LatestPostsController@edit')->name('admin.posts.edit');
        Route::post('/update/{id}' , 'LatestPostsController@update')->name('admin.posts.update');
        Route::get('/destroy/{id}' , 'LatestPostsController@destroy')->name('admin.posts.destroy');
        Route::post('/save_image' , 'LatestPostsController@uploadImage');
    });


    Route::group(['prefix'=>'/footer'],function (){
        Route::get('','FooterController@index')->name('admin.footer.index');
        Route::get('/create','FooterController@create')->name('admin.footer.create');
        Route::post('/store','FooterController@store')->name('admin.footer.store');
        Route::get('/edit/{id}','FooterController@edit')->name('admin.footer.edit');
        Route::post('/update/{id}' , 'FooterController@update')->name('admin.footer.update');
        Route::get('/destroy/{id}' , 'FooterController@destroy')->name('admin.footer.destroy');
        Route::get('/show/{id}' , 'FooterController@show')->name('admin.footer.show');
        Route::post('/save_image' , 'FooterController@uploadImage');
    });


});




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
