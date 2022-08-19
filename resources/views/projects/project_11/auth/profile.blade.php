@extends('projects.project_11.layouts.main')
@section('title')Personal Blog Admin | Профайл @endsection
@section('content')
<div class="page">
    <main class="main">
        <div class="container">
            <h2 class="search__title profile__title">Профайл</h2>
            <div class="main__profile-page profile-page">
                <div class="profile-page__info">
                    <input type="text" class="discussion__input profile-page__name" placeholder="Ваше имя">
                    <input type="email" class="discussion__input profile-page__email" placeholder="Ваш email">
                    <input type="password" class="discussion__input profile-page__password" placeholder="Новый пароль">
                    <input type="password" class="discussion__input profile-page__password-conf" placeholder="Подтвердите пароль">
                    <button class="buttons__button button_send-comment button_site">Сохранить</button>
                </div>
                <div class="profile-page__photo">
                    <img src="{{ asset('img/main/me.jpg') }}" alt="">
                    <a href="#" class="profile-page__choose-photo">выбрать аватар</a>
                </div>
            </div>
        </div>
    </main>
</div>
@endsection