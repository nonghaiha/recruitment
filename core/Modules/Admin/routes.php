<?php


Route::group([
    'prefix' => '',
    'namespace' => 'Core\Modules\Admin\Controllers',
    'middleware' => ['web']
],function(){
    //Auth
    Route::group(['namespace' => 'Auth','prefix' => 'com'],function(){
        Route::get('','LoginController@showLoginForm')->name('admin.showLogin');
        Route::post('login','LoginController@login')->name('admin.login');
        Route::post('logout','LoginController@logout')->name('admin.logout');
    });
    //Admin
    Route::group(['prefix' => 'admin','namespace' => 'Admin',],function(){
        Route::group(['middleware' => ['auth','role:manager|admin']],function(){
            Route::get('/home','HomeController@index')->name('admin.home');

            //CATEGORY
            Route::group(['prefix' => 'category'],function (){
                Route::get('','CategoryController@index')->name('admin.category.index');
                Route::get('create','CategoryController@create')->name('admin.category.create');
                Route::post('store','CategoryController@store')->name('admin.category.store');
                Route::get('edit/{id}','CategoryController@edit')->name('admin.category.edit');
                Route::put('update/{id}','CategoryController@update')->name('admin.category.update');
                Route::delete('delete/{id}','CategoryController@delete')->name('admin.category.delete');
            });

            //BLOG
            Route::group(['prefix' => 'news'],function (){
                Route::get('','NewsController@index')->name('admin.news.index');
                Route::get('create','NewsController@create')->name('admin.news.create');
                Route::post('store','NewsController@store')->name('admin.news.store');
                Route::get('edit/{id}','NewsController@edit')->name('admin.news.edit');
                Route::put('update/{id}','NewsController@update')->name('admin.news.update');
                Route::delete('delete/{id}','NewsController@delete')->name('admin.news.delete');
                Route::post('search','NewsController@search')->name('admin.news.search');
            });

            //JOB
            Route::group(['prefix' => 'jobs'],function (){
                Route::get('','JobController@index')->name('admin.job.index');
                Route::get('create','JobController@create')->name('admin.job.create');
                Route::post('store','JobController@store')->name('admin.job.store');
                Route::get('edit/{id}','JobController@edit')->name('admin.job.edit');
                Route::put('update/{id}','JobController@update')->name('admin.job.update');
                Route::delete('delete/{id}','JobController@delete')->name('admin.job.delete');
                Route::post('search','JobController@search')->name('admin.job.search');
            });

            //FILE
            Route::get('document/pdf-file/{id}','DocumentController@getDocument')->name('admin.document.getFile');
        });
    });
});
