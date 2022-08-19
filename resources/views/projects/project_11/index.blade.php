@extends('projects.project_11.layouts.main')
@section('title')Personal Blog | Home @endsection
@section('content')
<div class="page">
    <main class="main">
        <div class="container">
            <div class="main__stories stories" id="stories6">
                @foreach($stories6 as $story)
                    <div class="stories__story story">
                        <img src="{{ $story->img }}" alt="{{ $story->title }}" class="story__img">
                        <div class="story__desc">
                            <p class="story__title">{{ $story->title }}</p>
                            <p class="story__date">{{ Date::parse($story->created_at)->format('j F Y') }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="main__stories stories" id="stories4">
                @foreach($stories4 as $story)
                    <div class="stories__story story">
                        <img src="{{ $story->img }}" alt="{{ $story->title }}" class="story__img">
                        <div class="story__desc">
                            <p class="story__title">{{ $story->title }}</p>
                            <p class="story__date">{{ Date::parse($story->created_at)->format('j F Y') }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="main__stories stories" id="stories2">
                @foreach($stories2 as $story)
                    <div class="stories__story story">
                        <img src="{{ $story->img }}" alt="{{ $story->title }}" class="story__img">
                        <div class="story__desc">
                            <p class="story__title">{{ $story->title }}</p>
                            <p class="story__date">{{ Date::parse($story->created_at)->format('j F Y') }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="add-post">
                <form action="{{ route('personalblog-addpost') }}" class="add-post__form" method="POST" required>
                    @csrf
                    <input name="desc" placeholder="Напишите что-нибудь" class="add-post__textarea"></textarea>
                    <input type="hidden" value="3" name="cat_id">
                    <div class="add-post__actions">
                        <label for="file" class="add-post__file">
                            <input type="file" id="post-file">
                        </label>
                        <button type="submit" class="add-post__send">
                            <img src="{{ asset('img/projects/project_11/arr.svg') }}" alt="add-post">
                        </button>
                    </div>
                </form>
            </div>
            <div class="main__posts posts">
                @foreach($posts as $post)
                    <div class="posts__post post">
                        @if($post->img)
                            <a href="{{ route('personalblog-onepost', $post->id) }}">
                                <img src="{{ $post->img }}" alt="{{ $post->title }}" class="post__img">
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
                                    <p class="post__desc">{{ mb_strimwidth($post->desc, 0, 100, "...") }}</p>
                                </a>
                            @endif
                            <div class="post__footer">
                                <div class="post__create">
                                    <p class="post__date">{{ Date::parse($post->created_at)->format('j F Y') }}</p>
                                    @if($post->category_id == 1 || $post->category_id == 2)
                                        <a href="#" class="post__category">{{ $post->category->name }}</a>
                                    @endif
                                </div>
                                @if($post->video)
                                    <a href="{{ route('personalblog-onepost', $post->id) }}" class="post__link">оставить комментарий</a>
                                @elseif($post->img)
                                    <a href="{{ route('personalblog-onepost', $post->id) }}" class="post__link">читать</a>
                                @endif
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </main>
</div>
@endsection