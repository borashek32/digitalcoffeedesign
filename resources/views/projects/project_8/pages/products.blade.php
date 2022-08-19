@extends('projects.project_8.layouts.main')
@section('title')Organic | Products @endsection
@section('content')
<section class="products">
    <div class="products__content">
        <h1 class="products__title block__title">Organic Fruit & Vegetables</h1>
        <p class="products__text block__text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley...</p>
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
    </div>
    <div class="products__footer">
        <div class="products__img">
            <img src="{{ asset('img/projects/project_8/vegetables.jpg') }}" alt="vegetables">
        </div>
        <div class="products__items">
            <div class="product-items__product-item product-item">
                <div class="product-item__img">
                    <img src="{{ asset('img/projects/project_8/users.png') }}" alt="users">
                </div>
                <div class="product-item__desc">
                    <div class="product-item__number">30k</div>
                    <div class="product-item__name">User Order</div>
                </div>
            </div>
            <div class="product-items__product-item product-item">
                <div class="product-item__img">
                    <img src="{{ asset('img/projects/project_8/star.png') }}" alt="reviews">
                </div>
                <div class="product-item__desc">
                    <div class="product-item__number">20k</div>
                    <div class="product-item__name">Reviews(4.8)</div>
                </div>
            </div>
            <div class="product-items__product-item product-item">
                <div class="product-item__img">
                    <img src="{{ asset('img/projects/project_8/items.png') }}" alt="items">
                </div>
                <div class="product-item__desc">
                    <div class="product-item__number">300</div>
                    <div class="product-item__name">Items</div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection