<?php

Route::get('/', 'HeroController@index')->name('heroes');
Route::get('/show/{hero}', 'HeroController@show')->name('hero.show');
Route::get('/create', 'HeroController@create')->name('hero.create');
Route::post('/create', 'HeroController@store')->name('hero.store');
Route::get('/image_create', 'HeroController@image_create')->name('image.create');
Route::post('/image_create', 'HeroController@image_store')->name('image.store');
Route::get('/update/{hero}', 'HeroController@edit')->name('hero.update');
Route::post('/update/{hero}','HeroController@update')->name('hero.edit');
Route::put('/image_edit{image}','HeroController@image_edit')->name('image.edit');
Route::delete('/hero_delete/{id}','HeroController@destroy')->name('hero.destroy');
Route::delete('/image_delete/{id}','HeroController@image_destroy')->name('image.destroy');
