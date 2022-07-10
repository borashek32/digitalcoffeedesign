@extends('layouts.main')

@section('title')DigitalCoffeeeDesign.com @endsection

@section('content')
    <main class="page">
        <section class="page__main-block main-block">
            <div class="main-block__container _container">
                <div class="main-block__body">
                    <h1 class="main-block__title">
                        Digital Coffee Design
                    </h1>
                    <div class="main-block__text">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                    </div>
                    <div class="main-block__text">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                    </div>
                    <div class="main-block__buttons">
                        <a href="#" class="main-block__button main-block__button_green">Contact me</a>
                        <a href="#" class="main-block__button main-block__button_border">About</a>
                    </div>
                </div>
                <div class="main-block__image">
                    <img src="{{ asset('img/main/coffee_green.jpg') }}" width="400px" alt="digitalcoffeedesign.com">
                </div>
            </div>
        </section>
        <div class="page__portfolio portfolio">
            <div class="portfolio__container _container">
                <div class="portfolio__body">
                    <h2 class="portfolio__title title">Portfolio</h2>
                    <h4 class="portfolio__subtitle subtitle">There are some of my frontend projects with small descriptions below</h4>
                    <div class="portfolio__row">
                        <div class="portfolio__column">
                            @foreach ($projects as $project)
                                @if($project->category_id == 2)
                                    <div class="portfolio__item item">
                                        <small>*веб-приложение</small>
                                        <div class="item__title">
                                            @if($project->link)
                                                <a href="{{ $project->link}}">
                                                    {{ $project->title }}
                                                </a>
                                            @endif
                                            @if(empty($project->link))
                                                <a href="{{ route($project->slug) }}">
                                                    {{ $project->title }}
                                                </a>
                                            @endif
                                        </div>
                                        <div class="item__body">
                                            <div class="item__img">
                                                @if($project->link)
                                                    <a href="{{ $project->link}}">
                                                        <img src="{{ $project->img }}" alt="{{ $project->title }}" width="200px">
                                                    </a>
                                                @endif
                                                @if(empty($project->link))
                                                    <a href="{{ route($project->slug) }}">
                                                        <img src="{{ $project->img }}" alt="{{ $project->title }}" width="200px">
                                                    </a>
                                                @endif
                                            </div>
                                            <div class="item__description">
                                                <div class="item__text">{{ $project->description }}</div>
                                                @if($project->link)
                                                    <a href="{{ $project->link}}">
                                                        Перейти...
                                                    </a>
                                                @endif
                                                @if(empty($project->link))
                                                    <a href="{{ route($project->slug) }}">
                                                        Перейти...
                                                    </a>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                @endif
                            @endforeach
                        </div>
                        <div class="portfolio__column">
                            @foreach ($projects as $project)
                                @if($project->category_id == 1)
                                    <div class="portfolio__item item">
                                        <small>*лэндинг</small>
                                        <div class="item__title">
                                            @if($project->link)
                                                <a href="{{ $project->link}}">
                                                    {{ $project->title }}
                                                </a>
                                            @endif
                                            @if(empty($project->link))
                                                <a href="{{ route($project->slug) }}">
                                                    {{ $project->title }}
                                                </a>
                                            @endif
                                        </div>
                                        <div class="item__img">
                                            @if($project->link)
                                                <a href="{{ $project->link}}">
                                                    <img src="{{ $project->img }}" alt="{{ $project->title }}" width="200px">
                                                </a>
                                            @endif
                                            @if(empty($project->link))
                                                <a href="{{ route($project->slug) }}">
                                                    <img src="{{ $project->img }}" alt="{{ $project->title }}" width="200px">
                                                </a>
                                            @endif
                                        </div>
                                        <div class="item__description">
                                            <div class="item__text">{{ $project->description }}</div>
                                            @if($project->link)
                                                <a href="{{ $project->link}}">
                                                    Перейти...
                                                </a>
                                            @endif
                                            @if(empty($project->link))
                                                <a href="{{ route($project->slug) }}">
                                                    Перейти...
                                                </a>
                                            @endif
                                        </div>
                                    </div>
                                @endif
                            @endforeach
                        </div>
                        <div class="portfolio__column">
                            @foreach ($projects as $project)
                                @if($project->category_id == 3)
                                    <div class="portfolio__item item">
                                        <small>*элемент'</small>
                                        <div class="item__title">
                                            @if($project->link)
                                                <a href="{{ $project->link}}">
                                                    {{ $project->title }}
                                                </a>
                                            @endif
                                            @if(empty($project->link))
                                                <a href="{{ route($project->slug) }}">
                                                    {{ $project->title }}
                                                </a>
                                            @endif
                                        </div>
                                        <div class="item__body">
                                            <div class="item__img">
                                                @if($project->link)
                                                    <a href="{{ $project->link}}">
                                                        <img src="{{ $project->img }}" alt="{{ $project->title }}" width="200px">
                                                    </a>
                                                @endif
                                                @if(empty($project->link))
                                                    <a href="{{ route($project->slug) }}">
                                                        <img src="{{ $project->img }}" alt="{{ $project->title }}" width="200px">
                                                    </a>
                                                @endif
                                            </div>
                                            <div class="item__description">
                                                <div class="item__text">{{ $project->description }}</div>
                                                @if($project->link)
                                                    <a href="{{ $project->link}}">
                                                        Перейти...
                                                    </a>
                                                @endif
                                                @if(empty($project->link))
                                                    <a href="{{ route($project->slug) }}">
                                                        Перейти...
                                                    </a>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                @endif
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
