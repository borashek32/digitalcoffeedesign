@extends('projects.project_11.layouts.main')
@section('title')Personal Blog | Home @endsection
@section('content')
<div class="page">
    <main class="main">
        <div class="container">
            <h2 class="search__title profile__title">Обо мне</h2>
            <div class="main__profile-page profile-page">
                <div class="profile-page__info">
                    <p>
                        Front-end разработчик. Практик верстки сайтов. Созданием сайтов занимаюсь с 2012 года. Работал в нескольких ИТ компаниях и наработал более 10 000 часов в создании сайтов различной сложности.
                    </p>
                </div>
                <div class="profile-page__photo">
                    <img src="{{ asset('img/main/me.jpg') }}" alt="">
                </div>
            </div>
        </div>
    </main>
</div>
@endsection