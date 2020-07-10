<?php

use Illuminate\Support\Facades\Route;


Route::get('/','NoteController@index')->name('note-index');
Route::post('/create','NoteController@create')->name('note-create');
Route::post('/passphrase/{note}','NoteController@checkPassphrase')->name('check-passphrase');

Route::get('/{note}','NoteController@note')->name('note');


Auth::routes();

