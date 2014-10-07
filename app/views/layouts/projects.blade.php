        @if($projects_count != 0)
            @if($lang == 'ru')
                @foreach($projects as $project)
                <div class="thumbnail">
                    <article class="loaded">
                        <h2><a href="{{URL::to('project', $project->project_alias)}}">{{ $project->project_name_ru}}</a></h2>
                        <figure>
                            <a href="{{URL::to('project', $project->project_alias)}}"><img src="/uploads/test/{{ $project->project_image_preview }}" alt="{{ $project->project_name_ru}}"/></a>
                        </figure>
                        <p>{{ Str::limit($project->project_text_ru, 300) }}</p>
                        <a class="btn btn-primary clearfix" href='{{URL::to('project', $project->project_alias)}}'>Читать далее...</a>
                    </article>
                    <section class="clearfix"></section>
                </div>
                @endforeach

            @elseif($lang == 'en')
                @foreach($projects as $project)
                <div class="thumbnail">
                    <article class="loaded">
                        <h2><a href="{{URL::to('project', $project->project_alias)}}">{{ $project->project_name_en}}</a></h2>
                        <figure>
                            <a href="{{URL::to('project', $project->project_alias)}}"><img src="/uploads/test/{{ $project->project_image_preview }}" alt="{{ $project->project_name_en}}"/></a>
                        </figure>
                        <p>{{ Str::limit($project->project_text_en, 300) }}</p>
                        <a class="btn btn-primary clearfix" href='{{URL::to('project', $project->project_alias)}}'>Read more...</a>
                    </article>
                    <section class="clearfix"></section>
                </div>
                @endforeach

            @elseif($lang == 'ua')
                @foreach($projects as $project)
                <div class="thumbnail">
                    <article class="loaded">
                        <h2><a href="{{URL::to('project', $project->project_alias)}}">{{ $project->project_name_ua}}</a></h2>
                        <figure>
                            <a href="{{URL::to('project', $project->project_alias)}}"><img src="/uploads/test/{{ $project->project_image_preview }}" alt="{{ $project->project_name_ua}}"/></a>
                        </figure>
                        <p>{{ Str::limit($project->project_text_ua, 300) }}</p>
                        <a class="btn btn-primary clearfix" href='{{URL::to('project', $project->project_alias)}}'>Читати далi...</a>
                    </article>
                    <section class="clearfix"></section>
                </div>
                @endforeach
            @endif
        @endif
