@extends('projects.project_8.layouts.main')
@section('title')Organic | Reviews @endsection
@section('content')
<section class="reviews">
    <div class="reviews__review review">
        <h2 class="block__title">What Our Customers About Us saying</h2>
        <div class="block__text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularis.</div>
        <div class="review__footer">
            <div class="review__author">Ahmed Hridoy</div>
            <div class="review__actions actions">
                <div class="actions__star-rating">
                    <img src="{{ asset('img/projects/project_8/star.png') }}" alt="star" class="actions__star">
                    <img src="{{ asset('img/projects/project_8/star.png') }}" alt="star" class="actions__star">
                    <img src="{{ asset('img/projects/project_8/star.png') }}" alt="star" class="actions__star">
                    <img src="{{ asset('img/projects/project_8/star.png') }}" alt="star" class="actions__star">
                    <img src="{{ asset('img/projects/project_8/star-half.png') }}" alt="star" class="actions__star">
                </div>
                <div class="review__buttons-slider buttons-slider">
                    <div class="buttons-slider__wrapper">
                        <div class=""><</div>
                    </div>
                    <div class="buttons-slider__wrapper buttons-slider__wrapper_green">
                        <div class="">></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="review__author-img author-img">
        <img src="{{ asset('img/projects/project_8/author.png') }}" alt="review-author" class="author-img__img">
        <div class="author-img__other-reviews other-reviews">
            <div class="other-reviews__star-rating">
                <div class="actions__star-rating">
                    <img src="{{ asset('img/projects/project_8/star.png') }}" alt="star" class="actions__star actions__star_right">
                    <img src="{{ asset('img/projects/project_8/star.png') }}" alt="star" class="actions__star actions__star_right">
                    <img src="{{ asset('img/projects/project_8/star.png') }}" alt="star" class="actions__star actions__star_right">
                    <img src="{{ asset('img/projects/project_8/star.png') }}" alt="star" class="actions__star actions__star_right">
                    <img src="{{ asset('img/projects/project_8/star-half.png') }}" alt="star" class="actions__star actions__star_right">
                </div>
            </div>
            <div class="other-reviews__images">
                <img src="{{ asset('img/projects/project_8/author.png') }}" alt="review-author">
                <img src="{{ asset('img/projects/project_8/author.png') }}" alt="review-author">
                <img src="{{ asset('img/projects/project_8/author.png') }}" alt="review-author">
                <img src="{{ asset('img/projects/project_8/author.png') }}" alt="review-author">
                <img src="{{ asset('img/projects/project_8/author.png') }}" alt="review-author">
                <img src="{{ asset('img/projects/project_8/author.png') }}" alt="review-author">
                <div class="cross__wrapper">
                    <span class="cross"></span>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection