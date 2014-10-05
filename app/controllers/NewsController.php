<?php

use Illuminate\Database\Eloquent\ModelNotFoundException;
App::error(function (ModelNotFoundException $e) {
    return View::make('error404');
});


class NewsController extends BaseController {

}