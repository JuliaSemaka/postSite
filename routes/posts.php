<?php

use Illuminate\Support\Facades\Route;

Route::name('posts.')->group(function (){
    Route::get('/{id}', 'PostController@post')
        ->name('post')
        ->where('id', '[\d]+');

    Route::get('/edit/{id}', 'PostController@edit')
        ->name('edit')
        ->where('id', '[\d]+')
        ->middleware('auth');

    Route::post('/edit/{id}', 'PostController@editPost')
        ->name('editPost')
        ->where('id', '[\d]+')
        ->middleware('auth');

    Route::get('/create', 'PostController@create')
        ->name('create')
        ->middleware('auth');

    Route::post('/create', 'PostController@createPost')
        ->name('createPost')
        ->middleware('auth');

    Route::delete('/delete/{id}', 'PostController@delete')
        ->name('delete')
        ->where('id', '[\d]+')
        ->middleware('auth');

    Route::get('/section/{id}', 'PostController@bySection')
        ->name('bySection')
        ->where('id', '[\d]+');

    Route::get('/tag/{id}', 'PostController@byTag')
        ->name('byTag')
        ->where('id', '[\d]+');

    Route::get('/user/{id}', 'PostController@byUser')
        ->name('byUser')
        ->where('id', '[\d]+');
});
