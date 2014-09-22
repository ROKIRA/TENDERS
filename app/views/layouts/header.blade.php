<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
            <title>TENDERS homepage</title>
            {{ HTML::style('css/bootstrap.css') }}
            {{ HTML::style('css/bootstrap-theme.css') }}
            {{ HTML::style('css/main_style.css') }}
            <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
            <script>window.jQuery || document.write('<script src="http://tenders.loc/js/jquery-1.11.1.min.js">\x3C/script>')</script>
            {{ HTML::script('js/jquery.cookie.js') }}
            {{ HTML::script('js/bootstrap.min.js') }}
            {{ HTML::script('js/main_script.js') }}



        </head>
        <body>

        <header>
            <ul id="lang">
                <li><a href="{{ URL::to('lang', 'ru'); }}" data-lang="ru">рус</a></li>
                <li><a href="{{ URL::to('lang', 'en'); }}" data-lang="en">eng</a></li>
                <li><a href="{{ URL::to('lang', 'ua'); }}" data-lang="ua">укр</a></li>
            </ul>
        </header>