<?php

class AboutUsController extends BaseController {

    public function index()
    {
        $lang = Cookie::get('lang', 'ru');

        $leaders = Leadership::
            select("lead_fio_$lang", "lead_post_$lang", "lead_text_$lang", "lead_photo", "lead_email", "lead_phone")->get();

        $news = News::
            select('news_id', 'news_alias', "news_title_$lang", "updated_at")
                ->orderBy('updated_at', 'DESC')
                ->limit(5)
                ->get();

        $cookie = Cookie::make('page', 'about_us', 60*24*180);
        $view = View::make('leaders')->with(array('leaders' => $leaders, 'news' => $news, 'lang' => $lang ));

        return Response::make($view)->withCookie($cookie);
    }

} 