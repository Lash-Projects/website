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

Route::group(['middleware' => ['web']], function() {
    Route::get('/', 'PagesController@index');
    Route::get('contact','PagesController@contact');
    Route::get('about','PagesController@about');
    Route::get('albums','PagesController@albums');
    Route::get('gallery','PagesController@gallery');
});
