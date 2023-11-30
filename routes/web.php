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
        route::get('/','siteController@getsite')->name('site');
        route::get('shop','siteController@getshop')->name('site.shop');
        route::get('details','siteController@getdetails')->name('site.details');
        route::get('cart','siteController@getcart')->name('site.cart');


    });
    }
);