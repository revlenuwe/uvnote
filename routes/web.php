<?php

use Illuminate\Support\Facades\Route;


Route::get('/','NoteController@index')->name('note-index');
Route::post('/create','NoteController@create')->name('note-create');

Auth::routes();

