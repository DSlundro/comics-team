<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'PageController@index')->name('app');

Route::get('/', function () {
    return view('comics.home');
})->name('home');

// INDEX
Route::get('/comics', 'ComicsController@index')->name('comics.index');
// CREATE
Route::get('/comics/create', 'ComicsController@create')->name('comics.create');
// STORE
Route::post('/comics', 'ComicsController@store')->name('comics.store');
// SHOW
Route::get('/comics/{comic}', 'ComicsController@show')->name('comics.show');
// EDIT
Route::get('/comics/{comic}/edit', 'ComicsController@edit')->name('comics.edit');
// UPDATE
Route::put('/comics/{comic}', 'ComicsController@update')->name('comics.update');
// DESTROY
Route::delete('/comics/{comic}/', 'ComicsController@destroy')->name('comics.destroy');


//Route::resource('/comics', 'ComicsController');



//ROTTE PER CHARACTERS (CRUD)
// INDEX
Route::get('/characters', 'charactersController@index')->name('characters.index');
// CREATE
Route::get('/characters/create', 'charactersController@create')->name('characters.create');
// STORE
Route::post('/characters', 'charactersController@store')->name('characters.store');
// SHOW
Route::get('/characters/{character}', 'charactersController@show')->name('characters.show');
// EDIT
Route::get('/characters/{character}/edit', 'charactersController@edit')->name('characters.edit');
// UPDATE
Route::put('/characters/{character}', 'charactersController@update')->name('characters.update');
// DESTROY
Route::delete('/characters/{character}/', 'charactersController@destroy')->name('characters.destroy');
