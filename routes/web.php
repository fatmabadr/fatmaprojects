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


//Flats
Route::get('/addnewFlat', 'FlatCotroller@create');
Route::post('/Flats/submit','FlatCotroller@store');
Route::get('/allFlats', 'FlatCotroller@index');

//Features
Route::get('/Feature/create', 'FeatureController@create');
Route::post('/Feature/submit','FeatureController@store');
Route::get('/Feature/index', 'FeatureController@index');
