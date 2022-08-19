@extends('projects.project_8.layouts.main')
@section('title')Organic | About @endsection
@section('content')
<section class="about">
    <div class="about__wrapper">
        <div class="about__img">
            <img src="{{ asset('img/projects/project_8/about-img.jpg') }}" alt="about image">
        </div>
        <div class="about__description">
            <div class="block__title about__title">Explore Our Special Items</div>
            <div class="block__text about__text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer...</div>
            <div class="about__footer">
                <div class="about__nav">
                    <div class="about__link">
                        <a href="#">Explore Now</a>
                    </div>
                    <a href="#">
                        <div class="buttons-slider__wrapper buttons-slider__wrapper_green">
                            <span class="buttons-slider__wrapper_arrow"></span>
                        </div>
                    </a>
                </div>
                <img src="{{ asset('img/projects/project_8/about-leaves.png') }}" alt="leaves" class="about__leaves">
            </div>
        </div>
    </div>
</section>
@endsection