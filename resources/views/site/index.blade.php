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
                            <h2>Projects</h2>
                            <ul class="portfolio__list">
                                <li class="portfolio__item item">
                                    <div class="item__row">
                                        <img src="#" alt="">
                                        <a href="{{ route('project1') }}">Project 1</a>
                                    </div>
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
                        <div class="portfolio__column">
                            <h2>Elements</h2>
                            <ul class="portfolio__list">
                                <li>
                                    <a href="{{ route('element1') }}">Flex practice</a>
                                </li>
                                <li>
                                    <a href="{{ route('element2') }}">Menu burger</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
