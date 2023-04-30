<?php
//start of dashboard routes
/*Route::group(['prefix' => LaravelLocalization::setLocale(), 'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']],
    function () {*/
Route::group(['namespace'=>'Dashboard','middleware'=>'auth:admin'],function(){



    Route::get('index','DashboardController@index')->name('admin.dashbord');

      #################### Begin Profile Routes #################### 
      Route::group(['prefix'=>'profile'],function(){
    Route::get('/','DashboardController@viewProfile')->name('myprofile');
    Route::post('update', 'DashboardController@update_data')->name('profile.update');
    Route::post('chang-password', 'DashboardController@changePassword')->name('password.update');
        });
         #################### Enddd Profile Routes ####################

        #################### Begin Brands Routes ####################
    Route::group(['prefix'=>'brands'],function(){
        Route::get('/','BrandsController@index')->name('brand.dashboard');
        Route::get('/create','BrandsController@create')->name('admin.brands.create');
        Route::post('/store','BrandsController@store')->name('admin.brands.store');
        Route::get('/edit/{id}','BrandsController@edit')->name('admin.brands.edit');
        Route::post('/update/{id}','BrandsController@update')->name('admin.brands.update');
        Route::get('delete/{id}','BrandsController@destroy')->name('admin.brands.delete');
        });
    
        #################### Enddd Brands Routes ####################

    });//end of dashboard routes

/*});*/


//start Login routes
Route::group(['namespace'=>'Dashboard'],function(){
    Route::get('login','LoginController@getLogin')->middleware('guest')->name('get.admin.login');
    Route::put('sing-in','LoginController@login')->name('login');

    Route::get('register','LoginController@getregister')->name('get.admin.register');
    Route::post('sign-up','LoginController@register')->name('register');

    Route::get('sign-out','LoginController@logout')->name('admin.logout');


});
//end Login routes



