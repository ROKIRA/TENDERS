@extends('layouts.default')

    @section('leftbar')
        <section class="project_sort panel panel-default" id="project_sort">
            @if($lang == 'ru')
                <div class="panel-heading"><h3>Виды сортировок</h3></div>
                <div class="panel-body">
                    <ul>
                        <li ><a data-sort="DESC" href="{{ URL::to('projects/sort/by', "project_name_$lang") }}">Названию</a></li>
                        <li ><a data-sort="DESC" href="{{ URL::to('projects/sort/by', 'updated_at') }}">Дате</a></li>
                        <li><a href="#">.....</a></li>
                    </ul>
                </div>
            @elseif($lang == 'en')
                    <div class="panel-heading"><h3>Sort by</h3></div>
                    <div class="panel-body">
                        <ul>
                            <li ><a data-sort="DESC" href="{{ URL::to('projects/sort/by', "project_name_$lang") }}">Name</a></li>
                            <li ><a data-sort="DESC" href="{{ URL::to('projects/sort/by', 'updated_at') }}">Date</a></li>
                            <li><a href="#">.....</a></li>
                        </ul>
                    </div>
            @elseif($lang == 'ua')
                    <div class="panel-heading"><h3>Сортувати за</h3></div>
                    <div class="panel-body">
                        <ul>
                            <li ><a data-sort="DESC" href="{{ URL::to('projects/sort/by', "project_name_$lang") }}">Ім'ям</a></li>
                            <li ><a data-sort="DESC" href="{{ URL::to('projects/sort/by', 'updated_at') }}">Датою</a></li>
                            <li><a href="#">.....</a></li>
                        </ul>
                    </div>
            @endif
        </section>
    @stop


    @section('content')
            <div id="projects" class="row">
                <div id="project_articles">
                    @include('layouts.projects')
                </div>

                @if($projects_count != 0)
                    <button id="more_projects" data-url="{{ URL::to('download/more/projects') }}" data-load="3" data-count="{{$projects_count}}" data-sort="">
                           @if($lang == 'ru')
                                @if($projects_count-3 >= 5)Показать ещё <span>5</span> проектов
                                @else Показать оставшиеся <span>{{$projects_count-3}}</span> проектов
                                @endif
                           @elseif($lang == 'en')
                                @if($projects_count-3 >= 5)Show <span>5</span> more projects
                                @else Show last <span>{{$projects_count-3}}</span> projects
                                @endif
                           @elseif($lang == 'ua')
                               @if($projects_count-3 >= 5)Показати ще <span>5</span> проектiв
                               @else Показати станнi <span>{{$projects_count-3}}</span> проектiв
                               @endif
                           @endif

                        </button>
                    <?php // echo $projects->links(); ?>
                @endif
            </div>


    @stop


    @section('rightbar')
        <div class="panel panel-default">
            @if($lang == 'ru')
                <div class="panel-heading"><h3>Новости</h3></div>
                <div class="panel-body">
                    @if(count($news) != 0)
                        <ul>
                            @foreach($news as $n)
                                <li><a href="#">{{$n->news_title_ru}}</a></li>
                            @endforeach
                        </ul>
                        <a href="#" class="btn btn-primary">Все новости</a>
                    @else
                        <p class="notice">Новостей пока нет</p>
                    @endif
                </div>
            @elseif($lang == 'en')
                <div class="panel-heading"><h3>News</h3></div>
                <div class="panel-body">
                    @if(count($news) != 0)
                        <ul>
                            @foreach($news as $n)
                                <li><a href="#">{{$n->news_title_en}}</a></li>
                            @endforeach
                        </ul>
                        <a href="#" class="btn btn-primary">All news</a>
                    @else
                        <p class="notice">No news yet...</p>
                    @endif
                </div>
            @elseif($lang == 'ua')
                <div class="panel-heading"><h3>Новини</h3></div>
                <div class="panel-body">
                    @if(count($news) != 0)
                        <ul>
                            @foreach($news as $n)
                                <li><a href="#">{{$n->news_title_ua}}</a></li>
                            @endforeach
                        </ul>
                        <a href="#" class="btn btn-primary">Усі новини</a>
                    @else
                        <p class="notice">Новин поки що немає</p>
                    @endif
                </div>
            @endif
        </div>
    @stop
