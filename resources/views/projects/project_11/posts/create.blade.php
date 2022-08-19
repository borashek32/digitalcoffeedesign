


@extends('projects.project_11.layouts.main')
@section('title')Personal Blog Admin | Новый пост @endsection
@section('content')
<div class="page">
    <main class="main">
        <div class="container">
            <div class="admin-post__new-post">
                <h2 class="search__title profile__title admin-post__title">Новый пост</h2>
                <a href="{{ route('personalblog-posts.index') }}">
                    <button class="buttons__button button_blue">Назад</button>
                </a>
            </div>
            <form action="{{ route('personalblog-posts.store') }}" method="post">
                @csrf
                <div class="profile-page__info profile-page__info_posts">
                    <input value="{{ old('title') }}" type="text" class="discussion__input profile-page__name" placeholder="Название поста" name="title">
                    <input value="{{ old('desc') }}" type="text" class="discussion__input profile-page__email" placeholder="Текст" name="desc">
                    <div class="posts__media">
                        <input value="{{ old('img') }}" type="text" class="discussion__input profile-page__password posts__media_img" placeholder="Ссылка на картинку поста" name="img">
                        <p class="posts__media_or">ИЛИ</p>
                        <input value="{{ old('video') }}" type="text" class="discussion__input profile-page__password-conf posts__media_video" placeholder="Ссылка на видео поста" name="video">
                    </div>
                    <select value="{{ old('cat_id') }}" name="cat_id" class="discussion__input profile-page__password-conf">
                        <option value="{{ old('cat_id') }}" selected>Выберите категорию</option>
                        @foreach($cats as $cat)
                            <option value="{{ $cat->id }}">
                                {{ $cat->name }}
                            </option>
                        @endforeach
                    </select>
                    <input type="submit" class="buttons__button button_send-comment button_site" value="Сохранить">
                </div>
            </form>
        </div>
    </main>
</div>
@endsection