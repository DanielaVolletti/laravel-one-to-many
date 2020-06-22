<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'TaskController@index') -> name('home');
Route::get('/edit/{id}', 'TaskController@edit') -> name('edit');
Route::post('/update/{id}', 'TaskController@update') -> name('update');
