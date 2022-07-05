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
                    <img src="{{ asset('img/coffee_green.jpg') }}" width="400px" alt="digitalcoffeedesign.com">
                </div>
            </div>
        </section>
        <div class="page__portfolio portfolio">
            <div class="portfolio__container _container">
                <div class="portfolio__body">
                    <div class="title-block">
                        <h2 class="title-block__title">Portfolio</h2>
                        <h4 class="title-block__subtitle">There are some of my frontend projects with small descriptions below</h4>
                    </div>
                    <ul class="portfolio__list">
                        <li class="portfolio__item">
                            <a href="{{ route('project1') }}">Project 1</a>
                        </li>
                        <li>
                            <a href="{{ route('project2') }}">Project 2</a>
                        </li>
                        <li>
                            <a href="{{ route('project3') }}">Project 3</a>
                        </li>
                        <li>
                            <a href="{{ route('project4') }}">Project 4</a>
                        </li>
                        <li>
                            <a href="{{ route('project5') }}">Project 5</a>
                        </li>
                        <li>
                            <a href="{{ route('project6') }}">Project 6</a>
                        </li>
                        <li>
                            <a href="{{ route('project7') }}">Project 7</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </main>
@endsection
