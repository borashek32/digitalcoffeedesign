@extends('elements.element_7.layouts.main')
@section('title')JS animation @endsection
@section('content')
<div class="wrapper">
    <header>
        @include('elements.element_7.includes.header')
    </header>
    <main>
        @include('elements.element_7.blocks.promo')
        @include('elements.element_7.blocks.portfolio')
        <div class="divider scroll-item">
            <img src="img/elements/element_7/divider.png" alt="divider">
        </div>
        @include('elements.element_7.blocks.services')
        @include('elements.element_7.blocks.social')
    </main>
    <footer>
        @include('elements.element_7.includes.footer')
    </footer>
</div>
<script src="{{ asset('assets/elements/element_7/js/script.js') }}"></script>
@endsection