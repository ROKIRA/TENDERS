@extends('layouts.default')
    @section('content')
        <section id="content" style="width: 1000px; margin:0 auto">
            <h1>TENDERS HOMEPAGE</h1>

            <div id="projects">
                <div class="project_articles" id="project_articles">
                    @include('layouts.projects')
                </div>

                @if($projects_count != 0)
                    <button id="more_projects" data-url="{{ URL::to('download/more/projects') }}" data-load="{{base64_encode(3)}}" data-count="{{base64_encode($projects_count)}}">
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

    @stop
