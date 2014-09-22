<?php

class HomeController extends BaseController {

    /* GET ALL PROJECTS */
    public function index()
    {

        $lang = Cookie::get('lang', 'ru');

        $projects = DB::table('projects')
            ->select('project_id', "project_keywords_$lang", "project_description_$lang", "project_name_$lang", "project_text_$lang", "project_image_preview", "project_date_start", "project_date_stop", "updated_at")
            ->paginate(5);

        return View::make('index')->with(array('projects' => $projects, 'lang' => $lang ));
    }



}
