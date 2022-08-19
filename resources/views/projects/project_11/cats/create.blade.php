


@extends('projects.project_11.layouts.main')
@section('title')Personal Blog Admin | Новая категория @endsection
@section('content')
<div class="page">
    <main class="main">
        <div class="container">
            <div class="admin-post__new-post">
                <h2 class="search__title profile__title admin-post__title">Новая категория</h2>
                <a href="{{ route('personalblog-cats.index') }}">
                    <button class="buttons__button button_blue">Назад</button>
                </a>
            </div>
            <form action="{{ route('personalblog-cats.store') }}" method="post">
                @csrf
                <div class="profile-page__info profile-page__info_posts">
                    <input value="{{ old('name') }}" type="text" class="discussion__input profile-page__name" placeholder="Название каиегории" name="name">
                    <input type="submit" class="buttons__button button_send-comment button_site" value="Сохранить">
                </div>
            </form>
        </div>
    </main>
</div>
@endsection