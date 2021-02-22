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

Route::get('/', function () {
    return view('welcome');
})->name('');

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::group(['middleware' => 'auth'], function(){

    //Akses contoller
    Route::get('/siswa/view', 'SiswaController@index')->name('viewData');
    Route::get('/siswa','SiswaController@create');
    Route::get('/siswa/{id}/edit', 'SiswaController@edit');
    Route::post('/siswa', 'SiswaController@store');
});


Route::get('/login', 'AuthController@login')->name('login');
Route::post('/login', 'AuthController@postlogin')->name('postLogin');
Route::get('/logout', 'AuthController@logout')->name('logout');
// Route::resource('siswa', 'SiswaController');

Route::post('/siswa/{id}/update', 'SiswaController@update')->name('update');
Route::get('/siswa/{id}/destroy', 'SiswaController@destroy')->name('delete');