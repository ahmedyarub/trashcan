<?php


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/trash', 'TrashController@index');
Route::get('/trash/add', 'TrashController@add');
Route::get('/trash/delete/{id}', 'TrashController@delete');
Route::get('/trash/update/{id}', 'TrashController@update');

Route::get('/logout', 'Auth\LoginController@logout')->name('logout');
