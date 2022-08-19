@extends('projects.project_11.layouts.main')
@section('title')Personal Blog | Пост @endsection
@section('content')
<div class="page">
    <main class="main">
        <div class="container">
            <div class="main__posts posts">
                <div class="posts__post post">
                    @if($post->img)
                        <a href="{{ route('personalblog-onepost', $post->id) }}">
                            <img src="{{ asset($post->img) }}" alt="{{ $post->title }}" class="post__img">
                        </a>
                    @endif
                    @if($post->video)
                        <div class="embed">
                            <iframe src="https://www.youtube.com/embed/{{ $post->video }}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                    @endif
                    <div class="post__content">
                        @if($post->title)
                            <a href="{{ route('personalblog-onepost', $post->id) }}">
                                <h4 class="post__title">{{ $post->title }}</h4>
                            </a>
                        @endif
                        @if($post->desc)
                            <a href="{{ route('personalblog-onepost', $post->id) }}">
                                <p class="post__desc">{{ $post->desc }}</p>
                            </a>
                        @endif
                    </div>
                    <div class="post__reading reading">
                        <h4 class="reading__header">Интересно почитать</h4>
                        <div class="reading__content">
                            @foreach($articles as $item)
                                @if($item->title)
                                    <div class="reading__item">
                                        <a href="{{ route('personalblog-onepost', $item->id)}}" class="reaidng__title">{{ substr($item->title, 0, 200) }}</a>
                                        <p class="reading__date">{{  $item->created_at }}</p>
                                    </div>
                                @endif
                            @endforeach
                        </div>
                    </div>
                    <div class=" post__discussion discussion">
                        <h4 class="discussion__title reading__header">Обсуждение</h4>
                        <form action="{{ route('personalblog-addcomment') }}">
                            <input type="hidden" value={{ $post->id }} name="post_id">
                            <input type="text" class="discussion__input" placeholder="Текст комментария" name="text">
                            <button class="discussion__button buttons__button button_send-comment" type="submit">Отправить</button>
                        </form>
                        <div class="discussion__comments comments">
                            @foreach ($post->comments as $comment)
                                <div class="comments__comment comment">
                                    <div class="comment__made">
                                        <img src="{{ asset('img/logo50px.png') }}" alt="afatar">
                                        <div class="time">{{ Date::parse($comment->created_at)->format('j F Y') }}</div>
                                    </div>
                                    <div class="comment__content">
                                        <p class="comment__text">{{ $comment->text }}</p>
                                        <p class="comment__link">Ответить</p>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</div>
@endsection