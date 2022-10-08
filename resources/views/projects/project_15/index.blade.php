@extends('projects.project_15.layouts.main')
@section('title') ТрансТехСервис @endsection
@section('content')
    <main class="main">
        <section class="main__app app">
            <div class="_container">
                @include('projects.project_15.blocks.navbar')
            </div>
            @include('projects.project_15.blocks.promo-top')
            @include('projects.project_15.blocks.content')
            @include('projects.project_15.blocks.promo-bottom')
            @include('projects.project_15.blocks.dontwork')
        </section>
    </main>
@endsection