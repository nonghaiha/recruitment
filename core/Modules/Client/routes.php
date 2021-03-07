<?php

Route::group([
    'prefix' => '/',
    'namespace' => 'Core\Modules\Client\Controllers',
    'middleware' => 'web'
],function (){
    Route::get('/',function (){
        return redirect()->route('client.home');
    });

    Route::group(['prefix' => 'home'],function (){
        Route::get('/','HomeController@index')->name('client.home');

        Route::get('/list-question','HomeController@listQuestion')->name('client.listQuestion');

        //JOB
        Route::group(['prefix' => 'job'],function (){
            Route::post('/search','JobController@search')->name('client.job.search');
            Route::get('/detail/{id}','JobController@detail')->name('client.job.detail');
            Route::post('/apply','JobController@apply')->name('client.job.apply');
        });

        //News
        Route::group(['prefix' => 'news'],function (){
           Route::get('detail/{id}','NewsController@detail')->name('client.news.detail');
           Route::get('','NewsController@index')->name('client.news.index');
        });
    });
});
