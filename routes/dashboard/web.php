<?php
//start of dashboard routes
/*Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
    ], function(){*/
Route::group(['namespace'=>'Dashboard','middleware'=>'auth:admin'],function(){



    Route::get('index','DashboardController@index')->name('admin.dashbord');

      #################### Begin Profile Routes #################### 
      Route::group(['prefix'=>'profile'],function(){
    Route::get('/','DashboardController@viewProfile')->name('myprofile');
    Route::post('update', 'DashboardController@update_data')->name('profile.update');
    Route::post('chang-password', 'DashboardController@chang_password')->name('password.update');
        });
         #################### Enddd Profile Routes ####################

        #################### Begin Brands Routes ####################
    Route::group(['prefix'=>'brands'],function(){
        Route::get('/','BrandsController@index')->name('brand.dashboard');
        Route::get('/create','BrandsController@create')->name('admin.brands.create');
        Route::post('/store','BrandsController@store')->name('admin.brands.store');
        Route::get('edit/{id}','BrandsController@edit')->name('admin.brands.edit');
        Route::post('update/{id}','BrandsController@update')->name('admin.brands.update');
        Route::get('delete/{id}','BrandsController@destroy')->name('admin.brands.delete');
        });
    
        #################### Endd Brands Routes ####################
		#################### Begin categories Routes ####################
		Route::group(['prefix'=>'categories'],function(){
			Route::get('/','CategoriesController@index')->name('categories.dashboard');
			Route::get('/create','CategoriesController@create')->name('admin.categories.create');
			Route::post('/store','CategoriesController@store')->name('admin.categories.store');
			Route::get('edit/{id}','CategoriesController@edit')->name('admin.categories.edit');
			Route::post('update/{id}','CategoriesController@update')->name('admin.categories.update');
			Route::get('delete/{id}','CategoriesController@destroy')->name('admin.categories.delete');
			});
		
			#################### Endd categories Routes ####################

    });//end of dashboard routes

/*});*/
Route::get('users','UserController@index')->name('index');
Route::get('users/data','UserController@create')->name('data');

//start Login routes
Route::group(['namespace'=>'Dashboard'],function(){
    Route::get('login','LoginController@getLogin')->middleware('guest')->name('get.admin.login');
    Route::put('sing-in','LoginController@login')->name('login');

    Route::get('register','LoginController@getregister')->name('get.admin.register');
    Route::post('sign-up','LoginController@register')->name('register');

    Route::get('sign-out','LoginController@logout')->name('admin.logout');


});
//end Login routes



