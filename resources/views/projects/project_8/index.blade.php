@extends('projects.project_8.layouts.main')
@section('title')Organic | Home @endsection
@section('content')
<main class="main">
    {{-- sliders --}}
    @include('projects.project_8.parts.sliders')
    {{-- articles --}}
    @include('projects.project_8.parts.articles')
</main>
@endsection