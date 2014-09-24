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

    Route::post('download/more/projects', [
        'as' => 'more_projects',
        'uses' => 'HomeController@getMoreProjects'
    ]);


    Route::any('hello', function()
    {
        return View::make('hello');
    });



    App::missing(function ($exception) {
        return View::make('error404');
    });