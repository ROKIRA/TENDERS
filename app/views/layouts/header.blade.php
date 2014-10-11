<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
            <title>TENDERS homepage</title>
            {{ HTML::style('css/reset.css') }}
            {{ HTML::style('css/bootstrap.css') }}
            {{ HTML::style('css/main_style.css') }}
            <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
            <script>window.jQuery || document.write('<script src="http://tenders.loc/js/jquery-1.11.1.min.js">\x3C/script>')</script>
            {{ HTML::script('js/jquery.cookie.js') }}
            {{ HTML::script('js/bootstrap.min.js') }}
            {{ HTML::script('js/main_script.js') }}

        </head>
        <body>
        <section class="container">
            <header class="row">
                <div class="col-lg-12 header">
                                <div class="col-lg-2">
                                    <a href="/"><img src="images/logo.png" alt="Логотип"/></a>
                                </div>

                                    <div class="col-lg-10">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <h1><strong>Центре развития регионов</strong> Харьковский национий университет городского хозяйства имени О.М&nbsp;Бекетова</h1>
                                            </div>
                                            <div class="col-lg-4">
                                                <address>Тел: +380-57-707-31-52 e&#8209;mail: region.dc@ukr.net</address>
                                            </div>
                                            <div class="col-lg-3 sprite-languages">
                                                <ul>
                                                    <li><a class="ua @if(Cookie::get('lang', 'ru') == 'ua') active-lang @endif" href="{{ URL::to('lang', 'ua'); }}" data-lang="ua">укр</a></li>
                                                    <li><a class="eng @if(Cookie::get('lang', 'ru') == 'en') active-lang @endif" href="{{ URL::to('lang', 'en'); }}" data-lang="en">eng</a></li>
                                                    <li><a class="ru @if(Cookie::get('lang', 'ru') == 'ru') active-lang @endif" href="{{ URL::to('lang', 'ru'); }}" data-lang="ru">рус</a></li>
                                                </ul>
                                            </div>
                                        </div><!-- .row -->

                                        <nav id="navigation">
                                            <ul class="nav nav-pills">
                                            @if($lang == 'ru')
                                                <li><a href="/">Главная</a></li>
                                                <li id="nav_about_us" @if(Cookie::get('page')=='about_us') class="active" @endif><a href="{{ URL::to('about_us') }}">Про нас</a></li>
                                                <li id="nav_home" @if(Cookie::get('page')=='home') class="active" @endif ><a href="/">Проекты</a></li>
                                                <li><a href="#">Гранты</a></li>
                                                <li><a href="#">Новости</a></li>
                                                <li><a href="#">Партнеры</a></li>
                                            @elseif($lang == 'en')
                                                <li><a href="/">Home</a></li>
                                                <li id="nav_about_us"  @if(Cookie::get('page')=='about_us') class="active" @endif><a href="{{ URL::to('about_us') }}">About us</a></li>
                                                <li id="nav_home" @if(Cookie::get('page')=='home') class="active" @endif><a href="/">Projects</a></li>
                                                <li><a href="#">Grants</a></li>
                                                <li><a href="#">News</a></li>
                                                <li><a href="#">Partners</a></li>
                                            @elseif($lang == 'ua')
                                                <li><a href="/">Головна</a></li>
                                                <li id="nav_about_us"  @if(Cookie::get('page')=='about_us') class="active" @endif><a href="{{ URL::to('about_us') }}">Про нас</a></li>
                                                <li id="nav_home" @if(Cookie::get('page')=='home') class="active" @endif><a href="/">Проекти</a></li>
                                                <li><a href="#">Гранти</a></li>
                                                <li><a href="#">Новини</a></li>
                                                <li><a href="#">Партнери</a></li>
                                            @endif
                                            </ul>
                                        </nav>
                                </div>

                            </div>
            </header>

