<?php

Route::group(['prefix'  =>  'admin'], function () {

    Route::get('login', 'Admin\LoginController@showLoginForm')->name('admin.login');
    Route::post('login', 'Admin\LoginController@login')->name('admin.login.post');
    Route::get('logout', 'Admin\LoginController@logout')->name('admin.logout');

    Route::group(['middleware' => ['auth:admin']], function () {

        Route::get('/', function () {
            return view('admin.dashboard.index');
        })->name('admin.dashboard');

        Route::group(['prefix'  =>   'categories'], function() {

            Route::get('/', 'Admin\CategoryController@index')->name('admin.categories.index');
            Route::get('/create', 'Admin\CategoryController@create')->name('admin.categories.create');
            Route::post('/store', 'Admin\CategoryController@store')->name('admin.categories.store');
            Route::get('/{id}/edit', 'Admin\CategoryController@edit')->name('admin.categories.edit');
            Route::post('/update', 'Admin\CategoryController@update')->name('admin.categories.update');
            Route::get('/{id}/delete', 'Admin\CategoryController@delete')->name('admin.categories.delete');

        });

        Route::group(['prefix'  =>   'users'], function() {

            Route::get('/', 'UserController@index')->name('user.index');
        });

        Route::group(['prefix'  =>   'admins'], function() {

            Route::get('/', 'AdminController@index')->name('admin.index');
        });

        Route::group(['prefix'  =>   'types'], function() {

            Route::get('/', 'Admin\TypeController@index')->name('admin.types.index');
            Route::get('/create', 'Admin\TypeController@create')->name('admin.types.create');
            Route::post('/store', 'Admin\TypeController@store')->name('admin.types.store');
            Route::get('/{id}/edit', 'Admin\TypeController@edit')->name('admin.types.edit');
            Route::post('/update', 'Admin\TypeController@update')->name('admin.types.update');
            Route::get('/{id}/delete', 'Admin\TypeController@delete')->name('admin.types.delete');
        
        });

        Route::group(['prefix' => 'seedlings'], function () {

           Route::get('/', 'Admin\SeedlingController@index')->name('admin.seedlings.index');
           Route::get('/create', 'Admin\SeedlingController@create')->name('admin.seedlings.create');
           Route::post('/store', 'Admin\SeedlingController@store')->name('admin.seedlings.store');
           Route::get('/edit/{id}', 'Admin\SeedlingController@edit')->name('admin.seedlings.edit');
           Route::get('/{id}/delete', 'Admin\SeedlingController@delete')->name('admin.seedlings.delete');
           Route::post('/update', 'Admin\SeedlingController@update')->name('admin.seedlings.update');
           Route::get('/{seedling}/show', 'Admin\SeedlingController@show')->name('admin.seedlings.show');
           Route::get('/search', 'Admin\SeedlingController@search')->name('admin.seedlings.search');
           
           Route::post('images/upload', 'Admin\SeedlingImageController@upload')->name('admin.seedlings.images.upload');
           Route::get('images/{id}/delete', 'Admin\SeedlingImageController@delete')->name('admin.seedlings.images.delete');
        });

        Route::group(['prefix' => 'orders'], function () {
           Route::get('/', 'Admin\OrderController@index')->name('admin.orders.index');
           Route::get('/{order}/show', 'Admin\OrderController@show')->name('admin.orders.show');
        });

        Route::group(['prefix' => 'messages'], function () {
            Route::get('/', 'Admin\MessageController@index')->name('admin.messages.index');
            Route::post('/store', 'Admin\MessageController@store')->name('admin.messages.store');
         });
    });
});
