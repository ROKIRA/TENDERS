@extends('layouts.default')
    @section('leftbar')

    @stop

    @section('content')
        @if($project)
            @if($lang == 'ru')
                <article>
                    <h2>{{ $project->project_name_ru}}</h2>
                    <p>{{ $project->project_text_ru  }}</p>
                </article>

            @elseif($lang == 'en')
                <article>
                    <h2>{{ $project->project_name_en}}</h2>
                    <p>{{ $project->project_text_en }}</p>
                </article>

            @elseif($lang == 'ua')
                <article>
                    <h2>{{ $project->project_name_ua}}</h2>
                    <p>{{ $project->project_text_ua }}</p>
                </article>
            @endif
        @else
            @if($lang == 'ru') <p class="notice empty">Проекта по данному адресу не существует...</p>
            @elseif($lang == 'en') <p class="notice empty">The project does not exist for this URL...</p>
            @else <p class="notice empty">Проекта за даною адресою не iснує...</p>
            @endif
        @endif
    @stop

    @section('rightbar')

    @stop