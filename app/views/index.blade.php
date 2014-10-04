@extends('layouts.default')

    @section('leftbar')
        <section class="project_sort" id="project_sort">
            @if($lang == 'ru')
                <h3>Сортировать по</h3>
                <ul>
                    <li ><a data-sort="DESC" href="{{ URL::to('projects/sort/by', "project_name_$lang") }}">Названию</a></li>
                    <li ><a data-sort="DESC" href="{{ URL::to('projects/sort/by', 'updated_at') }}">Дате</a></li>
                    <li><a href="#">.....</a></li>
                </ul>
            @elseif($lang == 'en')
                    <h3>Sort by</h3>
                    <ul>
                        <li ><a data-sort="DESC" href="{{ URL::to('projects/sort/by', "project_name_$lang") }}">Name</a></li>
                        <li ><a data-sort="DESC" href="{{ URL::to('projects/sort/by', 'updated_at') }}">Date</a></li>
                        <li><a href="#">.....</a></li>
                    </ul>
            @elseif($lang == 'ua')
                    <h3>Сортувати за</h3>
                    <ul>
                        <li ><a data-sort="DESC" href="{{ URL::to('projects/sort/by', "project_name_$lang") }}">Ім'ям</a></li>
                        <li ><a data-sort="DESC" href="{{ URL::to('projects/sort/by', 'updated_at') }}">Датою</a></li>
                        <li><a href="#">.....</a></li>
                    </ul>
            @endif
        </section>



    @stop

    @section('content')

            <section class="calendar">
                <div id="datePicker"></div>
            </section>

        <section id="content" style="width: 1000px; margin:0 auto">
            <h1>TENDERS HOMEPAGE</h1>

            <div id="projects">
                <div class="project_articles" id="project_articles">
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


        </section>

        <section id="button_to_top" style="display: none; position: fixed; bottom: 75px; right: 50px; cursor: pointer; width: 60px; height: 20px; background: #40c3d9; opacity: 0.5;">НАВЕРХ</section>
    @stop
