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

Route::middleware(['check_auth'])->group(function () {
    Route::get('/add', 'ContactController@create')->name('add');
    Route::post('/add', 'ContactController@store')->name('add');
    Route::get('/edit/{contact}', 'ContactController@edit')->name('edit');
    Route::post('/edit/{contact}', 'ContactController@update')->name('edit');
    Route::get('/delete/{contact}', 'ContactController@destroy')->name('delete');
    Route::get('/logout', 'AccessController@logout')->name('logout');
});
Route::middleware(['check_guest'])->group(function () {
    Route::get('/login', 'AccessController@login')->name('login');
    Route::post('/login', 'AccessController@loginSend')->name('login');
});
Route::get('/', 'ContactController@index')->name('index');


