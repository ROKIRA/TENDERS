<html>
    <head>
        <meta charset="utf-8">
            <title>TENDERS homepage</title>
            {{ HTML::style('css/main_style.css') }}
            <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
            {{ HTML::script('js/main_script.js') }}
        </head>
        <body>

        <header>
            <ul class="lang">
                <li><a href="{{ URL::to('lang', 'ru'); }}">рус</a></li>
                <li><a href="{{ URL::to('lang', 'en'); }}">eng</a></li>
                <li><a href="{{ URL::to('lang', 'ua'); }}">укр</a></li>
            </ul>
        </header>