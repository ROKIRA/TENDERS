@extends('layouts.default')

    @section('leftbar')


    @stop


    @section('content')
        <section id="leadership">
            @if($lang == 'ru')
                @foreach($leaders as $leader)
                <div class="thumbnail about_us">
                    <article class="loaded">
                        <figure>
                            <img src="/uploads/test/{{ $leader->lead_photo }}" alt="{{ $leader->lead_fio_ru}}"/>
                        </figure>
                        <h2>{{ $leader->lead_post_ru}}</h2>
                        <h3>{{ $leader->lead_fio_ru}}</h3>

                        <p>{{ Str::limit($leader->lead_text_ru) }}</p>
                        <p><strong>E-mail:</strong> <a href="#">{{ Str::limit($leader->lead_email) }}</a></p>
                        <p><strong>Телефон:</strong> {{ Str::limit($leader->lead_phone) }}</p>
                    </article>
                    <section class="clearfix"></section>
                </div>
                @endforeach

            @elseif($lang == 'en')
                @foreach($leaders as $leader)
                <div class="thumbnail about_us">
                    <article class="loaded">
                        <h2>{{ $leader->lead_post_en}}</h2>
                        <h3>{{ $leader->lead_fio_en}}</h3>
                        <figure>
                            <img src="/uploads/test/{{ $leader->lead_photo }}" alt="{{ $leader->lead_fio_en}}"/>
                        </figure>
                        <p>{{ Str::limit($leader->lead_text_en) }}</p>
                        <p><strong>E-mail:</strong> <a href="#">{{ Str::limit($leader->lead_email) }}</a></p>
                        <p><strong>Phone:</strong> {{ Str::limit($leader->lead_phone) }}</p>
                    </article>
                    <section class="clearfix"></section>
                </div>
                @endforeach

            @elseif($lang == 'ua')
                @foreach($leaders as $leader)
                <div class="thumbnail about_us">
                    <article class="loaded">
                        <h2>{{ $leader->lead_post_ua}}</h2>
                        <h3>{{ $leader->lead_fio_ua}}</h3>
                        <figure>
                            <img src="/uploads/test/{{ $leader->lead_photo }}" alt="{{ $leader->lead_fio_ua}}"/>
                        </figure>
                        <p>{{ Str::limit($leader->lead_text_ua) }}</p>
                        <p><strong>E-mail:</strong> <a href="#">{{ Str::limit($leader->lead_email) }}</a></p>
                        <p><strong>Телефон:</strong> {{ Str::limit($leader->lead_phone) }}</p>
                    </article>
                    <section class="clearfix"></section>
                </div>
                @endforeach
            @endif
        </section>
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
