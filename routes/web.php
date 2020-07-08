<?php

use Illuminate\Support\Facades\Route;


Route::get('/','NoteController@index')->name('note-index');
