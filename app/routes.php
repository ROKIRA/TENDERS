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
        'uses' => 'HomeController@postMoreProjects'
    ]);


    Route::post('projects/sort/by/{param}', [
        'as' => 'projects_sort',
        'uses' => 'HomeController@postProjectsSort'
    ]);

    Route::get('about_us', [
        'as' => 'about_us',
        'uses' => 'AboutUsController@index'
    ]);



/************************** TO DELETE ****************************************/

    Route::any('hello', function()
    {
        return View::make('hello');
    });

    Route::any('verstka', function()
    {
        return View::make('verstka');
    });

/************************* TO DELETE ****************************************/



    App::missing(function ($exception) {
        return View::make('error404');
    });