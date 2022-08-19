@extends('projects.project_11.layouts.main')
@section('title')Personal Blog | {{ $cat->name }} @endsection
@section('content')
<div class="page">
    <main class="main">
        <div class="container">
            <h2 class="search__title">{{ $cat->name }}</h2>
            <div class="main__posts posts">
                @foreach($cat->posts as $post)
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
                                    <p class="post__desc">{{ substr($post->desc, 0, 200) }}</p>
                                </a>
                            @endif
                            <div class="post__footer">
                                <div class="post__create">
                                    <p class="post__date">{{ Date::parse($post->created_at)->format('j F Y') }}</p>
                                    @if($post->category_id == 1 || $post->category_id == 2)
                                        <a href="#" class="post__category">{{ $post->cat->name }}</a>
                                    @endif
                                </div>
                                <a href="{{ route('personalblog-onepost', $post->id) }}" class="post__link">перейти</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </main>
</div>
@endsection