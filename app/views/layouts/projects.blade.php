        @if($projects_count != 0)
            @if($lang == 'ru')
                @foreach($projects as $project)
                <article class="loaded">
                    <figure style="display: block; width: 200px; height: 200px; margin: 0 10px 10px 0; float: left">
                        <img style="display: block; margin: 0 auto; max-width: 200px; max-height: 200px" src="/uploads/test/{{ $project->project_image_preview }}" alt=""/>
                    </figure>
                    <h2 style="margin:0 0 10px">{{ $project->project_name_ru}}</h2>
                    <p>{{ Str::limit($project->project_text_ru, 500) }}</p>
                    <a href='{{URL::to('project', $project->project_alias)}}'>Читать далее...</a>
                </article>
                <section style="clear: both"></section>
                @endforeach

            @elseif($lang == 'en')
                @foreach($projects as $project)
                <article class="loaded">
                    <figure style="display: block; width: 200px; height: 200px; margin: 0 10px 10px 0; float: left">
                        <img style="display: block; margin: 0 auto; max-width: 200px; max-height: 200px" src="/uploads/test/{{ $project->project_image_preview }}" alt=""/>
                    </figure>
                    <h2 style="margin:0 0 10px">{{ $project->project_name_en}}</h2>
                    <p>{{ Str::limit($project->project_text_en, 500) }}</p>
                    <a href='{{URL::to('project', $project->project_alias)}}'>Read more...</a>
                </article>
                <section style="clear: both"></section>
                @endforeach

            @elseif($lang == 'ua')
                @foreach($projects as $project)
                <article class="loaded">
                    <figure style="display: block; width: 200px; height: 200px; margin: 0 10px 10px 0; float: left">
                        <img style="display: block; margin: 0 auto; max-width: 200px; max-height: 200px" src="/uploads/test/{{ $project->project_image_preview }}" alt=""/>
                    </figure>
                    <h2 style="margin:0 0 10px">{{ $project->project_name_ua}}</h2>
                    <p>{{ Str::limit($project->project_text_ua, 500) }}</p>

                    <a href='{{URL::to('project', $project->project_alias)}}'>Читати далi...</a>
                </article>
                <section style="clear: both"></section>
                @endforeach
            @endif
        @endif
