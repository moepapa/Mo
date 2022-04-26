<?php

Route::group(['prefix'  =>  'admin'], function () {

    Route::get('login', 'Admin\LoginController@showLoginForm')->name('admin.login');
    Route::post('login', 'Admin\LoginController@login')->name('admin.login.post');
    Route::get('logout', 'Admin\LoginController@logout')->name('admin.logout');

    Route::group(['middleware' => ['auth:admin']], function () {

        Route::get('/', function () {
            return view('admin.dashboard.index');
        })->name('admin.dashboard');


        Route::group(['prefix'  =>   'users'], function() {

            Route::get('/', 'UserController@index')->name('user.index');
        });

        Route::group(['prefix'  =>   'admins'], function() {

            Route::get('/', 'AdminController@index')->name('admin.index');
        });

        Route::group(['prefix' => 'songs'], function () {

           Route::get('/', 'Admin\SongController@index')->name('admin.songs.index');
           Route::get('/create', 'Admin\SongController@create')->name('admin.songs.create');
           Route::post('/store', 'Admin\SongController@store')->name('admin.songs.store');
           Route::get('/edit/{id}', 'Admin\SongController@edit')->name('admin.songs.edit');
           Route::get('/{id}/delete', 'Admin\SongController@delete')->name('admin.songs.delete');
           Route::post('/update', 'Admin\SongController@update')->name('admin.songs.update');
           Route::get('/{song}/show', 'Admin\SongController@show')->name('admin.songs.show');
           Route::get('/search', 'Admin\SongController@search')->name('admin.songs.search');
           
           Route::post('images/upload', 'Admin\SongImageController@upload')->name('admin.songs.images.upload');
           Route::get('images/{id}/delete', 'Admin\SongImageController@delete')->name('admin.songs.images.delete');
        });

        Route::group(['prefix'  =>   'artists'], function() {

            Route::get('/', 'Admin\ArtistController@index')->name('admin.artists.index');
            Route::get('/create', 'Admin\ArtistController@create')->name('admin.artists.create');
            Route::post('/store', 'Admin\ArtistController@store')->name('admin.artists.store');
            Route::get('/{id}/edit', 'Admin\ArtistController@edit')->name('admin.artists.edit');
            Route::post('/update', 'Admin\ArtistController@update')->name('admin.artists.update');
            Route::get('/{id}/delete', 'Admin\ArtistController@delete')->name('admin.artists.delete');
        
        });

    });
});
