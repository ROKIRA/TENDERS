<?php

    Route::get('/',[
        'as' => 'index',
        'uses' => 'HomeController@index'
    ]);


    Route::get('lang/{lang}',[
        'as' => 'lang',
        'uses' => 'LangController@index'
    ]);


    Route::get('project/{project}',[
        'as' => 'project',
        'uses' => 'HomeController@getProject'
    ]);

    Route::any('hello', function()
    {
        return View::make('hello');
    });