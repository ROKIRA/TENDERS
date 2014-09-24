        @if($projects_count != 0)
            @if($lang == 'ru')
                @foreach($projects as $project)
                <article>
                    <h2>{{ $project->project_name_ru}}</h2>
                    <p>{{ Str::limit($project->project_text_ru, 350) }}</p>
                    <a href='{{URL::to('project', $project->project_alias)}}'>Читать далее...</a>
                </article>
                @endforeach

            @elseif($lang == 'en')
                @foreach($projects as $project)
                <article>
                    <h2>{{ $project->project_name_en}}</h2>
                    <p>{{ Str::limit($project->project_text_en, 350) }}</p>

                    <a href='{{URL::to('project', $project->project_alias)}}'>Read more...</a>
                </article>
                @endforeach

            @elseif($lang == 'ua')
                @foreach($projects as $project)
                <article>
                    <h2>{{ $project->project_name_ua}}</h2>
                    <p>{{ Str::limit($project->project_text_ua, 350) }}</p>

                    <a href='{{URL::to('project', $project->project_alias)}}'>Читати далi...</a>
                </article>
                @endforeach
            @endif
        @endif
