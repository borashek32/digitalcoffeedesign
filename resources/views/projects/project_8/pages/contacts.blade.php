@extends('projects.project_8.layouts.main')
@section('title')Organic | Contacts @endsection
@section('content')
<section class="contacts">
    <div class="contacts__img">
        <img src="{{ asset('img/projects/project_8/phone.jpg') }}" alt="phone" class="contacts__phone">
        <img src="{{ asset('img/projects/project_8/phone.jpg') }}" alt="phone" class="contacts__phone_bg">
    </div>
    <div class="contacts__description">
        <a href="#">
            <div class="contacts__btn">Download App</div>
        </a>
        <div class="block__title contacts__title">
            Simple Way To Order Your Organic Fruit
        </div>
        <div class="block__text contacts__text">
            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer...
        </div>
        <div class="contacts__footer">
            <a href="#">
                <img src="{{ asset('img/projects/project_8/apple-store.jpg') }}" alt="apple-store">
            </a>
            <a href="#">
                <img src="{{ asset('img/projects/project_8/google-play.jpg') }}" alt="apple-store">
            </a>
        </div>
    </div>
</section>
@endsection