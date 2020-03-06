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
//Route::view('/company/index', 'company.index');
Route::get('/company/index', 'CompanyController@index');
Route::get('/company/positions', 'CompanyController@positions');
Route::get('/company/position-create', 'CompanyController@positionCreate');
Route::post('/company/position-add', 'CompanyController@positionAdd');
Route::get('/company/position-edit/{id}', 'CompanyController@positionEdit');
Route::post('/company/position-update/{id}', 'CompanyController@positionUpdate');
Route::delete('/company/position-delete/{id}', 'CompanyController@positionDelete');

Route::get('/company/employees', 'CompanyController@employees');
Route::get('/company/employee-create', 'CompanyController@employeeCreate');
Route::post('/company/employee-add', 'CompanyController@employeeAdd');
Route::get('/company/employee-edit/{id}', 'CompanyController@employeeEdit');
Route::post('/company/employee-update/{id}', 'CompanyController@employeeUpdate');
Route::delete('/company/employee-delete/{id}', 'CompanyController@employeeDelete');
Route::get('/company/employee-toggle-block/{id}', 'CompanyController@employeeToggleBlock');

//Route::get('/company/register', function () {
//    return view('company.register');
//});
