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

Route::get('/', 'PageController@getWelecome')->name('home');
Route::get('/about', 'PageController@getAbout');
Route::get('/autor', 'PageController@getAutor');
Route::get('/kreiraj', 'PageController@getKreiranje');
Route::get('blog/{slug}',['as'=>'blog.single','uses'=>'BlogController@getSingle'])->where('slug','[\w\d\-\_]+');
Route::post('blog',['as'=>'blog.search','uses'=>'BlogController@getPretraga']);

Route::resource('posts','PostController');


Auth::routes();
Route::get('logout', 'Auth\LoginController@logout')->name('logout');

//Route::get('/home', 'HomeController@index')->name('home');
