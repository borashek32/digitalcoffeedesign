@extends('projects.project_11.layouts.main')
@section('title')Personal Blog Admin | Посты @endsection
@section('content')
<div class="page">
    <main class="main">
        <div class="container">
            <div class="admin-post__new-post">
                <h2 class="search__title profile__title admin-post__title">Посты</h2>
                <a href="{{ route('personalblog-posts.create') }}">
                    <button class="buttons__button button_blue">Новый пост</button>
                </a>
            </div>
            @foreach($posts as $post)
                <div class="admin-post">
                    <div class="admin-post__title">
                        @if($post->title)
                            <p class="">{{ $post->title }}</p>
                        @else
                            <p class="">{{ mb_strimwidth($post->desc, 0, 40) }}...</p>
                        @endif
                    </div>
                    <div class="admin-post__actions">
                        <button class="buttons__button button_blue button_edit-post">
                            <a href="{{ route('personalblog-posts.edit', $post) }}">
                                Редактировать
                            </a>
                        </button>
                        <form action="{{ route('personalblog-posts.destroy', $post) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <input type="submit" value="Удалить" class="buttons__button button_red">
                        </form>
                    </div>
                </div>
            @endforeach
        </div>
    </main>
</div>
@endsection