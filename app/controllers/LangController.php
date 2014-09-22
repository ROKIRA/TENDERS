<?php

class LangController extends BaseController {

    public function index($lang)
    {

        Cookie::queue('lang', $lang, 60*24*180);

        return Redirect::back();
    }

}