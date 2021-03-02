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
            Route::group(['prefix' => 'blog'],function (){
                Route::get('','BlogController@index')->name('admin.blog.index');
                Route::get('create','BlogController@create')->name('admin.blog.create');
            });
        });
    });
});
