<?php

class LangController extends BaseController {

    public function index($lang)
    {

        Cookie::queue('lang', $lang, 380);

        return Redirect::back();
    }

}