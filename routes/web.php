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

Route::get('/', function () {
    return view('welcome');
});

//Admin route

Route::group(['prefix' => 'admin','middleware' =>['auth','admin']],function (){
    Route::get('/', 'Admin\AdminController@index')->name('admin.index');
    Route::resource('service','Admin\ServiceController');
    Route::resource('service_provider','Admin\SerProviderController');
    Route::resource('confirem','Admin\mailController');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


// FrontEnd routes
//Route::get('/front', function () {
//    return view('front.index');
//});
Route::get('/front', 'Front\FrontendController@index')->name('front.index');

Route::group(['prefix' => 'front','middleware' =>['auth']],function (){
//    Route::get('/', 'Front\FrontendController@index')->name('front.index');
    Route::resource('frontService','Front\FrontendController');
    Route::resource('allDetails','Front\FrontServiceController');





});
