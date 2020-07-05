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

Route::get('/artikel/create', 'ArticleController@create'); // menampilkan halaman form
Route::post('/artikel', 'ArticleController@store'); // menyimpan data
Route::get('/artikel', 'ArticleController@index'); // menampilkan semua
Route::get('/artikel/{id}', 'ArticleController@show'); // menampilkan detail Article dengan id 
Route::get('/artikel/{id}/edit', 'ArticleController@edit'); // menampilkan form untuk edit Article
Route::put('/artikel/{id}', 'ArticleController@update'); // menyimpan perubahan dari form edit
Route::delete('/artikel/{id}', 'ArticleController@destroy'); // menghapus data dengan id


Route::get('/login', 'AuthController@index');
Route::post('/post-login', 'AuthController@postLogin'); 
Route::get('/registration', 'AuthController@registration');
Route::post('/post-registration', 'AuthController@postRegistration'); 
Route::get('/dashboard', 'AuthController@dashboard'); 
Route::get('/logout', 'AuthController@logout');