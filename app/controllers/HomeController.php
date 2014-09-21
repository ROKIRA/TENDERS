<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	/*public function showWelcome()
	{
		return View::make('hello');
	}*/



    /* GET ALL PROJECTS LANG=RU */
    public function index()
    {

        $lang = Cookie::get('lang') ? Cookie::get('lang') : 'ru';

        $projects = DB::table('projects')
            ->select('project_id', "project_keywords_$lang", "project_description_$lang", "project_name_$lang", "project_text_$lang", "project_image_preview", "project_date_start", "project_date_stop", "updated_at")
            ->paginate(5);

        return View::make('index')->with(array('projects' => $projects, 'lang' => $lang ));
    }



}
