<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

    Route::get('/', [
        'uses' => 'ProductController@getIndex',
        'as' => 'shop.index',
    ]);

    Route::get('/add-to-cart/{id}', [
        'uses' => 'ProductController@getAddToCart',
        'as' => 'shop.addToCart'
    ]);

    Route::get('/shopping-cart', [
       'uses' => 'ProductController@getCart',
        'as' => 'shop.shoppingCart'
    ]);

    //all route with auth middleware
    Route::group(['middleware' => 'auth'], function()
    {
        Route::get('/profile', [
            'uses' => 'UserController@getProfile',
            'as' => 'user.profile',
        ]);

        Route::get('/logout', [
            'uses' => 'UserController@getLogout',
            'as' => 'user.logout',
        ]);

        Route::get('/wishlist',[
           'as' => 'user.wishlist'
        ]);
    });

    //all route with guest
    Route::group(['middleware' => 'guest'], function()
    {
        //load user.signup page
        Route::get('/signup', [
            'uses' => 'UserController@getSignup',
            'as' => 'user.signup',
        ]);

        //handle post request
        Route::post('/signup', [
            'uses' => 'UserController@postSignup',
            'as' => 'user.signup',
        ]);

        //load user.signup page
        Route::get('/signin', [
            'uses' => 'UserController@getSignin',
            'as' => 'user.signin'
        ]);

        //handle post request
        Route::post('/signin', [
            'uses' => 'UserController@postSignin',
            'as' => 'user.signin',
        ]);
    });