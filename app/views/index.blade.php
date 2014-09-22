@extends('layouts.default')
    @section('content')
        <h1>TENDERS HOMEPAGE</h1>
        @if($projects->count())

            @if($lang == 'ru')
                @foreach($projects as $project)
                <article>
                    <h2>{{ $project->project_name_ru}}</h2>
                    <p>{{ Str::limit($project->project_text_ru, 350) }}</p>
                    <a href='#'>Читать далее...</a>
                </article>
                @endforeach

            @elseif($lang == 'en')
                @foreach($projects as $project)
                <article>
                    <h2>{{ $project->project_name_en}}</h2>
                    <p>{{ Str::limit($project->project_text_en, 350) }}</p>
                    <a href='#'>Читать далее...</a>
                </article>
                @endforeach

            @elseif($lang == 'ua')
                @foreach($projects as $project)
                <article>
                    <h2>{{ $project->project_name_ua}}</h2>
                    <p>{{ Str::limit($project->project_text_ua, 350) }}</p>
                    <a href='#'>Читать далее...</a>
                </article>
                @endforeach
            @endif

            <?php echo $projects->links(); ?>
        @endif
@stop