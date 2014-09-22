<?php

    Route::get('/',[
        'as' => 'index',
        'uses' => 'HomeController@index'
    ]);


    Route::get('lang/{lang}',[
        'as' => 'lang',
        'uses' => 'LangController@index'
    ]);


    Route::any('hello', function()
    {
        return View::make('hello');
    });