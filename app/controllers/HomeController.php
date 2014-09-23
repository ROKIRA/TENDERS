<?php

use Illuminate\Database\Eloquent\ModelNotFoundException;
App::error(function (ModelNotFoundException $e) {
    return View::make('error404');
});


class HomeController extends BaseController {



    /* GET ALL PROJECTS */
    public function index()
    {

        $lang = Cookie::get('lang', 'ru');

        $projects = DB::table('projects')
            ->select('project_id', 'project_alias', "project_keywords_$lang", "project_description_$lang", "project_name_$lang", "project_text_$lang", "project_image_preview", "project_date_start", "project_date_stop", "updated_at")
            ->paginate(5);

        return View::make('index')->with(array('projects' => $projects, 'lang' => $lang ));
    }


    public function getProject($alias){
        $lang = Cookie::get('lang', 'ru');

        $project = Project::where('project_alias', $alias)->firstOrFail();



        return View::make('project')->with(array('project' => $project, 'lang' => $lang));
    }



}
