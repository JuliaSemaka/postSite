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
Route::name('main.')->group(function () {
    Route::get('/', 'MainController@index')
        ->name('index');
    Route::get('/about', 'MainController@about')
        ->name('about');
    Route::get('/feedback', 'MainController@feedback')
        ->name('feedback');
    Route::post('/feedback', 'MainController@feedbackPost')
        ->name('feedbackPost');
    Route::get('/db', 'MainController@db')
        ->name('db');
});


Route::name('auth.')->group(function () {
    Route::get('/register', 'AuthController@register')
        ->name('register');
    Route::post('/register', 'AuthController@registerPost')
        ->name('registerPost');
    Route::get('/login', 'AuthController@login')
        ->name('login');
    Route::post('/login', 'AuthController@loginPost')
        ->name('loginPost');
    Route::get('/logout', 'AuthController@logout')
        ->name('logout');
});

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

