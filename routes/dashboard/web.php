<?php
//start of dashboard routes
Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
    ],
    function()
    {
Route::group(['namespace'=>'Dashboard','middleware'=>'auth:admin'],function(){



    Route::get('index','DashboardController@index')->name('admin.dashbord');

      #################### Begin Profile Routes #################### 
      Route::group(['prefix'=>'admin/profile'],function(){
    Route::get('/','DashboardController@viewProfile')->name('myprofile');
    Route::post('updatfde', 'DashboardController@update_data')->name('profile.update');
    Route::post('chang-password', 'DashboardController@changePassword')->name('password.update');
        });
         #################### Enddd Profile Routes ####################

        #################### Begin Brands Routes ####################
    Route::group(['prefix'=>'admin'],function(){
        Route::resource('brands', BrandsController::class);
        Route::get('/datatable','BrandsController@datatable')->name('admin.brands.datatable');

        });


        #################### Endd Brands Routes ####################
		#################### Begin categories Routes ####################
		Route::group(['prefix'=>'admin/categories'],function(){
			Route::get('/','CategoriesController@index')->name('categories.dashboard');
			Route::get('/datatable','CategoriesController@datatable')->name('categories.datatable');
			Route::get('/create','CategoriesController@create')->name('admin.categories.create');
			Route::post('/store','CategoriesController@store')->name('admin.categories.store');
            Route::get('edit-category/{id}','CategoriesController@edit')->name('admin.categories.edit');
            Route::post('update-category','CategoriesController@update')->name('admin.categories.update');
			Route::get('delete','CategoriesController@destroy')->name('admin.categories.delete');
            Route::post('category/{id}/child','CategoriesController@getChildByParentId');

			});
		
			#################### Endd categories Routes ####################
			 #################### Begin products Routes ####################
			 Route::group(['prefix'=>'admin/products'],function(){
				Route::get('/','ProductsController@index')->name('products.dashboard');
                Route::get('/datatable','ProductsController@datatable')->name('products.datatable');
				Route::get('/create','ProductsController@create')->name('admin.products.create');
				Route::post('/store','ProductsController@store')->name('admin.products.store');
				Route::get('edit/{id}','ProductsController@edit')->name('admin.products.edit');
				Route::get('update/{id}','ProductsController@update')->name('admin.products.update');
				Route::get('delete','ProductsController@destroy')->name('admin.products.delete');
                Route::get('site','ProductsController@site')->name('admin.products.site');

				});
			
				#################### Endd products Routes ####################
                #################### Begin sliders Routes ####################
     Route::group(['prefix'=>'admin/sliders'],function(){
        //Route::resource('sliders','SlidersController');
        Route::get('/','SlidersController@index')->name('sliders.dashboard');
        Route::get('/datatable','SlidersController@datatable')->name('sliders.datatable');
        Route::get('/create','SlidersController@create')->name('admin.sliders.create');
        Route::post('/store','SlidersController@store')->name('admin.sliders.store');
        Route::get('edit-slider/{id}','SlidersController@edit')->name('admin.sliders.edit');
        Route::post('update-slider','SlidersController@update')->name('admin.sliders.update');
        Route::get('delete','SlidersController@destroy')->name('admin.sliders.delete');
       
        });
    
        #################### Endd sliders Routes ####################

    });//end of dashboard routes

});

//start Login routes
Route::group(['namespace'=>'Dashboard'],function(){
    Route::get('login','LoginController@getLogin')->middleware('guest')->name('get.admin.login');
    Route::put('sing-in','LoginController@login')->name('login');

    Route::get('register','LoginController@getregister')->name('get.admin.register');
    Route::post('sign-up','LoginController@register')->name('register');

    Route::get('sign-out','LoginController@logout')->name('admin.logout');


});
//end Login routes



