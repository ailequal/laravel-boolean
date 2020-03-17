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
Route::get('/test', 'StaticPageController@test')->name('static_page.test');

// carriere webpage
Route::get('/carriere', 'CarriereController@index')->name('carriere.index');
