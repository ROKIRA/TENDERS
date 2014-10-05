<?php

use Illuminate\Database\Eloquent\ModelNotFoundException;
App::error(function (ModelNotFoundException $e) {
    return View::make('error404');
});


class HomeController extends BaseController {


    /**** GET ALL PROJECTS ****/
    public function index()
    {
        $lang = Cookie::get('lang', 'ru');

        $projects = Project::
              select('project_id', 'project_alias', "project_keywords_$lang", "project_description_$lang", "project_name_$lang", "project_text_$lang", "project_image_preview", "project_date_start", "project_date_stop", "updated_at")
            ->orderBy('updated_at', 'desc')
            ->limit(3)
            ->get();
        $projects_count = Project::count();

        $news = News::
            select('news_id', 'news_alias', "news_title_$lang", "updated_at")
            ->orderBy('updated_at', 'DESC')
            ->limit(5)
            ->get();

        return View::make('index')->with(array('projects' => $projects, 'projects_count' => $projects_count, 'news' => $news, 'lang' => $lang ));
    }

    /**** GET ONE PROJECT ****/
    public function getProject($alias){
        $lang = Cookie::get('lang', 'ru');

        $project = Project::where('project_alias', $alias)->firstOrFail();

        return View::make('project')->with(array('project' => $project, 'lang' => $lang));
    }


    /****  DOWNLOAD MORE PROJECTS AJAX ******/
    public function postMoreProjects(){
        $lang = Cookie::get('lang', 'ru');

        $load = Input::get('load');
        $count = Input::get('count');

        $sort = Input::get('sort');
        if(!$sort){
            $sort[0] = 'updated_at';
            $sort[1] = 'ASC';
        }else {
            $sort = explode(',', $sort);
        }
        if(($count-$load) >= 5) $take = 5;
            else $take = $count-$load;
        $left = (($count - $load - $take) >= 5) ? 5 : ($count - $load - $take);

        $projects = Project::
        select('project_id', 'project_alias', "project_keywords_$lang", "project_description_$lang", "project_name_$lang", "project_text_$lang", "project_image_preview", "project_date_start", "project_date_stop", "updated_at")
            ->orderBy($sort[0], $sort[1])
            ->skip($load)
            ->take($take)
            ->get();

        $loaded = (int)$load + (int)$take;
        $tpl = View::make('layouts.projects')->with(array('projects' => $projects, 'projects_count' =>$count, 'lang' => $lang))->render();

        return Response::json(array(
            'success' => true,
            'status' => 200,
            'load' => $loaded,
            'left' => $left,
            'tpl' => $tpl,
        ));
    }



    /*******  SORT PROJECTS *********/
    public function postProjectsSort($param){
        $lang = Cookie::get('lang', 'ru');

        $sort = Cookie::get("sort_$param", 'ASC');
        $load = Input::get('load');

        $projects = Project::
        select('project_id', 'project_alias', "project_keywords_$lang", "project_description_$lang", "project_name_$lang", "project_text_$lang", "project_image_preview", "project_date_start", "project_date_stop", "updated_at")
            ->orderBy($param, $sort)
            ->limit($load)
            ->get();
        $projects_count = Project::count();

        if($sort == 'ASC') Cookie::queue("sort_$param", 'DESC');
            else Cookie::queue("sort_$param", 'ASC');

        $tpl = View::make('layouts.projects')->with(array('projects' => $projects, 'projects_count' =>$projects_count, 'lang' => $lang))->render();

        return Response::json(array(
            'success' => true,
            'status' => 200,
            'tpl' => $tpl,
            'param'=>$param,
            'sort'=>$sort,
        ));

    }

}
