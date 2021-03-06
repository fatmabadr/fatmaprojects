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

Route::get('/list', 'UnitController@index');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::post('/search', 'UnitController@search');

//units
//Route::resource('unit','UnitController');
Route::get('/units/create', 'unitController@create');                             
Route::post('/Units/submit','UnitController@store');
Route::get('/units/index', 'UnitController@index');

//Features
Route::get('/Feature/create', 'FeatureController@create');
Route::post('/Feature/submit','FeatureController@store');
Route::get('/Feature/index', 'FeatureController@index');

//cities
Route::get('/city/create', 'cityController@create');
Route::post('/city/submit','cityController@store');
Route::get('/city/index', 'cityController@index');

Route::get('/unit/{id}', 'UnitController@show');