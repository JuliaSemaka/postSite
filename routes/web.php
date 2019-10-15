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

Route::get('/', 'MainController@index')
    ->name('main.index');
Route::get('/about', 'MainController@about')
    ->name('main.about');
Route::get('/feedback', 'MainController@feedback')
    ->name('main.feedback');
Route::get('/db', 'MainController@db')
    ->name('main.db');

Route::get('/post/{id}', 'PostController@post')
    ->name('posts.post')
    ->where('id', '[\d]+');

Route::get('/register', 'AuthController@register')
    ->name('auth.register');
Route::post('/register', 'AuthController@registerPost')
    ->name('auth.registerPost');
Route::get('/login', 'AuthController@login')
    ->name('auth.login');
Route::post('/login', 'AuthController@loginPost')
    ->name('auth.loginPost');
Route::get('/logout', 'AuthController@logout')
    ->name('auth.logout');

Route::get('/home', 'HomeController@index')
    ->name('home');

Route::get('/a', function () {
//    return [1, 2, 3];
//    return back()->withInput();
//    return response()->json([
//        'name' => 'Abigail',
//        'state' => 'CA'
//    ]);
    return'ok';
});
//Auth::routes();

