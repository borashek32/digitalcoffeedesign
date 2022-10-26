<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100italic,300,300italic,regular,italic,500,500italic,700,700italic,900,900italic" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('assets/projects/project_17/css/style.css') }}">
    <script type="module" src="{{ asset('assets/projects/project_17/js/script.js') }}" defer></script>
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
</head>
<body>
    <div class="wrapper">
        @include('projects.project_17.includes.nav')
        @include('projects.project_17.includes.header')
        <main class="main">
            @yield('content')
        </main>
        @include('projects.project_17.includes.footer')
    </div>
</body>
</html>