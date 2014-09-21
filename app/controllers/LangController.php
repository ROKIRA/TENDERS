<?php

class LangController extends BaseController {

    public function index($lang)
    {

        Cookie::forever('lang', $lang);

        return Redirect::back();
    }

}