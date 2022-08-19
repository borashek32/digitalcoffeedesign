<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scale=0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto:regular,medium,light&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('css/reset.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/projects/project_11/css/style.css') }}">
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
</head>
<body>
    @include('projects.project_11.includes.header')
    @include('projects.project_11.includes.aside')
    @yield('content')
    @include('projects.project_11.modals.contact-modal')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.slim.min.js"></script>
    <script src="{{ asset('assets/projects/project_11/js/script.js') }}"></script>
</body>
</html>