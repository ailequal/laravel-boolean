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

// Route::get('/', function () {
//     return view('welcome');
// });

// static webpages
Route::get('/', 'StaticPageController@index')->name('static_page.index');
Route::get('/corso', 'StaticPageController@corso')->name('static_page.corso');
Route::get('/lezione-gratuita', 'StaticPageController@lezione_gratuita')->name('static_page.lezione-gratuita');
Route::get('/iscriviti', 'StaticPageController@iscriviti')->name('static_page.iscriviti');

// carriere webpage
Route::get('/carriere', 'CarriereController@index')->name('carriere.index');
Route::get('/carriere/studente/{slug}', 'CarriereController@show')->name('carriere.show');
Route::get('/test', 'CarriereController@test')->name('carriere.test');

// database webpage
Route::get('/database/students', 'DatabaseController@students')->name('database.students');
