,<?php

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

Auth::routes();

Route::get('/imagess', 'ImageController@resizeImage');
Route::post('resizeImagePost',['as'=>'resizeImagePost','uses'=>'ImageController@resizeImagePost']);

Route::get('home', 'HomeController@index')->name('home');

Route::resource('/users','UserController');

Route::resource('/jds','JdController');

Route::get('/users_db','JdController@user');

Route::get('/admin','JdController@admin')->name('users');

Route::get('/migrate','JdController@adminmigrate');

Route::get('/users/confirmation/{token}','Auth\RegisterController@confirmation')->name('confirmation');



