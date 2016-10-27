<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', ['middleware' => 'guest', function () {
    return view('login');
}]);

Route::group(['middleware' => 'auth'], function () {
       Route::group(['prefix' => 'admin'], function () {
        Route::get('/{vue_capture?}', function () {
            return view('home');
        })->where('vue_capture', '[\/\w\.-]*');
    });
});

Auth::routes();

