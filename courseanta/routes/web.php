<?php

use Illuminate\Support\Facades\Route;
use \Illuminate\Support\Facades\Auth;

Route::group(['namespace' => 'App\Http\Controllers'], function()
{
    //home routes
    Route::get('/', 'HomeController@index')->name('home.index');
    Route::get('/about', 'HomeController@about')->name('home.about');
    Route::get('/courses', 'HomeController@courses')->name('home.courses');

    //mail
    Route::post('/', 'MailController@sendMail')->name('mail.mail');

    //private page
    Route::get('/private', 'UserPageController@private')->name('private');
    Route::post('/private', 'UserPageController@update')->name('update');
    Route::get('/cart', 'UserPageController@user_cart')->name('user_cart');

    //course page
    Route::get('/course/{id}', 'CourseController@course')->name('course');
    Route::post('/course/{id}', 'CourseController@add_to_cart')->name('cart');

    //comments
    Route::post('/course/{id}/comment', 'CommentsController@comment')->name('comment');
    Route::post('/course/{id}/comment/delete', 'CommentsController@delete_comment')->name('delete_comment');

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
