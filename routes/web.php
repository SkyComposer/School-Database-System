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
    return view('index');
});

Route::get('/search', 'AllstudentsController@search');
Route::get('/', 'PagesController@index');
Route::get('/contact', 'PagesController@contact');
Route::get('/services', 'PagesController@services');
Route::get('/aboutus', 'PagesController@aboutus');
Route::get('/gallery', 'PagesController@gallery');
Route::get('/gallery/{id}', 'PagesController@images')->name('albums.images');

Route::get('/singlenews/{id}', 'PagesController@singlenews')->name('photos.singlenews');


Route::resource('students', 'StudentsController');
Route::resource('news', 'NewsController');
Route::resource('allstudents', 'AllstudentsController');
Route::resource('classes', 'ClassesController');
Route::resource('teachers', 'TeachersController');

Route::get('/singleclass/{id}', 'AllstudentsController@singleclass');

Auth::routes();

Route::get('/dashboard', 'DashboardController@index');
Route::get('/studentform', 'DashboardController@studentform');

Route::get('/livesearch', 'livesearchController@index');
Route::get('/livesearch/action', 'livesearchController@action')->name('livesearch.action');

Route::get('/albums', 'AlbumsController@index');
Route::get('/albums/create', 'AlbumsController@create');
Route::post('/albums/store', 'AlbumsController@store')->name('albums.store');
Route::get('/albums/{id}', 'AlbumsController@show')->name('albums.show');


Route::get('/photos/create/{id}', 'PhotosController@create')->name('photos.create');
Route::post('/photos/store', 'PhotosController@store')->name('photos.store');
Route::delete('/photos/{id}', 'PhotosController@destroy')->name('photos.destroy');

Route::get('/products', 'ProductsController@index');
Route::get('/products/create', 'ProductsController@create');

