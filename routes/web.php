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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/', 'Auth\LoginController@showLoginForm')->name('login');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/application-form', 'ApplicationForm@create')->name('ApplicationForm.create');
Route::post('/application-form', 'ApplicationForm@store')->name('ApplicationForm.store');

Route::get('/user-responsibility', 'UserResponsibilityController@show')->name('userResponsibility.show');
Route::get('/user-responsibility/edit/{id}','UserResponsibilityController@edit')->name('userResponsibility.edit');
Route::post('/user-responsibility', 'UserResponsibilityController@update')->name('userResponsibility.update');