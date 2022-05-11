<?php

use Illuminate\Support\Facades\Route;
use \Illuminate\Support\Facades\Auth;

Route::group(['namespace' => 'App\Http\Controllers'], function()
{
    /**
     * Home Routes
     */
    Route::get('/', 'HomeController@index')->name('home.index');
    Route::get('/about', 'HomeController@about')->name('home.about');
    Route::get('/courses', 'HomeController@courses')->name('home.courses');

    Route::group(['middleware' => ['guest']], function() {
        /**
         * Register Routes
         */
        Route::get('/sign-up', 'RegistrationController@show')->name('sign-up.show');
        Route::post('/sign-up', 'RegistrationController@register')->name('sign-up.perform');

        /**
         * Login Routes
         */
        Route::get('/sign-in', 'LoginController@show')->name('sign-in.show');
        Route::post('/sign-in', 'LoginController@login')->name('sign-in.perform');

    });

    Route::group(['middleware' => ['auth']], function() {
        /**
         * Logout Routes
         */
        Route::get('/logout', 'LogoutController@perform')->name('logout.perform');
    });
});
