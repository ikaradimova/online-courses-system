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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
//Route::resource('company', 'CompanyController');
//Route::get('/company/register', 'CompanyController@register');
Route::view('/company/register',  'company.register');
Route::post('/company/register', 'CompanyController@register');
Route::view('/company/login',  'company.login');
Route::post('/company/login', 'CompanyController@login');
Route::view('/company/index', 'company.index');

//Route::get('/company/register', function () {
//    return view('company.register');
//});
