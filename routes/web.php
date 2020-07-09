<?php

use Illuminate\Support\Facades\Route;


Route::get('/','NoteController@index')->name('note-index');
Route::get('/{note}','NoteController@note')->name('note');

Route::post('/create','NoteController@create')->name('note-create');

Auth::routes();

