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


/*
admin route
*/
//admin
Route::get('/adminplane','AdminController@index');
Route::resource('/adminplane/users','UserController');
Route::post('/adminplane/users/changePassword','UserController@updatePassword');
Route::get('/adminplane/users/{id}/delete','UserController@destroy');
//Route::get('/adminplane/users/data',['as'=>'adminplane.users.data','uses'=>'UserController@anyData']);


//siteSetting
Route::get('/adminplane/sitesetting','SiteSettingController@index');
Route::post('/adminplane/sitesetting','SiteSettingController@store');


//user
Route::resource('/adminplane/bu','BuController');
Route::get('/adminplane/bu/{id}/delete','BuController@destroy');

/*
user route
*/
Route::get('/showAllBullding','BuController@showAllEnable');
Route::get('/forRent','BuController@forRent');
Route::get('/forBuy','BuController@forBuy');
Route::get('/type/{type}','BuController@showByType');
Route::get('/search','BuController@search');
Route::get('/singleBullding/{id}','BuController@showSingle');
Route::get('/contact','HomeController@contact');

Auth::routes();
Route::auth();
Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', 'HomeController@index')->name('home');
