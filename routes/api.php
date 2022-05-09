<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;




Route::prefix('/user')->group(function(){
    Route::post('/login','LoginController@login');
    Route::post('/register','LoginController@register');
    Route::middleware('auth:api')->get('/all','LoginController@inforUserAuth');

    Route::group(['middleware' => 'auth:api'],function(){

        Route::group([
            'prefix' => 'tweet'] , function(){
                Route::get('/all','TweetController@index');
                Route::post('/store','TweetController@store');
                Route::get('/show/{teweet_id}','TweetController@show');
                Route::get('/destroy/{teweet_id}','TweetController@destroy');
                Route::post('/update/{teweet_id}','TweetController@update');
            }
        );

        Route::group([
            'prefix' => 'tweet'] , function(){
                Route::post('/store','UserController@store');
                Route::get('/show/{teweet_id}','UserController@show');
                Route::post('/update/{teweet_id}','UserController@update');
            }
        );
    });



});
