@extends('projects.project_11.layouts.main')
@section('title')Personal Blog | Works @endsection
@section('content')
<div class="page">
    <main class="main">
        <div class="container">
            <div class="main__works works">
                <div class="works__work work post">
                    <img src="{{ $work->img }}" alt="{{ $work->title }}" class="post__img work__img">
                    <div class="work__content-wrapper">
                        <div class="post__content work__content">
                            <a href="#">
                                <h4 class="post__title work__title">{{ $work->title }}</h4>
                            </a>
                                <a href="#" class="">
                                    <p class="post__desc">{{ $work->desc }}</p>
                                </a>
                                <div class="work__areas">
                                    @foreach($work->areas as $area)
                                        <a href="#" class="work_area">{{ $area->name }}</a>
                                    @endforeach
                                </div>
                            <div class="work__site">
                                <a href="#" class="buttons__button button_send-comment button_site">Перейти на сайт
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</div>
@endsection