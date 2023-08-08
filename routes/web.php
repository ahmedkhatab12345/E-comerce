<?php

use Illuminate\Support\Facades\Route;

//start site_routes
Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
    ],
    function()
    {
        Route::group(['namespace'=>'site'],function(){ 
 
        route::get('products','siteController@getProduct');
    });
    }
);