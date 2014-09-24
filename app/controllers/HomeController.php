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

        $projects = Project::
              select('project_id', 'project_alias', "project_keywords_$lang", "project_description_$lang", "project_name_$lang", "project_text_$lang", "project_image_preview", "project_date_start", "project_date_stop", "updated_at")
            ->orderBy('updated_at', 'desc')
            ->limit(3)
            ->get();
        $projects_count = Project::count();

        return View::make('index')->with(array('projects' => $projects, 'projects_count' => $projects_count, 'lang' => $lang ));
    }


    public function getProject($alias){
        $lang = Cookie::get('lang', 'ru');

        $project = Project::where('project_alias', $alias)->firstOrFail();

        return View::make('project')->with(array('project' => $project, 'lang' => $lang));
    }


    public function getMoreProjects(){
        $lang = Cookie::get('lang', 'ru');

        $load = base64_decode(Input::get('load'));
        $count = base64_decode(Input::get('count'));

        if(($count-$load) >= 5) $take = 5;
            else $take = $count-$load;
        $left = (($count - $load - $take) >= 5) ? 5 : ($count - $load - $take);

        $projects = Project::
        select('project_id', 'project_alias', "project_keywords_$lang", "project_description_$lang", "project_name_$lang", "project_text_$lang", "project_image_preview", "project_date_start", "project_date_stop", "updated_at")
            ->orderBy('updated_at', 'desc')
            ->skip($load)
            ->take($take)
            ->get();

        $loaded = base64_encode((int)$load + (int)$take);
        $tpl = View::make('layouts.projects')->with(array('projects' => $projects, 'projects_count' =>$count, 'lang' => $lang))->render();

        return Response::json(array(
            'success' => true,
            'status' => 200,
            'load' => $loaded,
            'left' => $left,
            'tpl' => $tpl
        ));
    }

}
