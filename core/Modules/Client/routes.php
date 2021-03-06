<?php

Route::group([
    'prefix' => '/',
    'namespace' => 'Core\Modules\Client\Controllers'
],function (){
    Route::get('/',function (){
        return redirect()->route('client.home');
    });

    Route::group(['prefix' => 'home'],function (){
        Route::get('/','HomeController@index')->name('client.home');

        Route::get('/blog','BlogController@index')->name('client.blog');
        Route::get('/list-question','HomeController@listQuestion')->name('client.listQuestion');

        //JOB
        Route::group(['prefix' => 'job'],function (){
            Route::post('/search','JobController@search')->name('client.job.search');
            Route::get('/detail/{id}','JobController@detail')->name('client.job.detail');
        });
    });
});
