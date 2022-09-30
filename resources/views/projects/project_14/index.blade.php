<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scale=0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Momentum</title>
    <link rel="stylesheet" href="{{ asset('assets/projects/project_14/css/style.css') }}">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link href="http://fonts.cdnfonts.com/css/gilroy-medium" rel="stylesheet">
    <link href="http://fonts.cdnfonts.com/css/gilroy-bold" rel="stylesheet">
</head>
<body>
    <div class="wrapper">
        <main class="main">
            <div class="_container">
                @include('projects.project_14.includes.header')
            </div>
            <section class="main__promo promo">
                <div class="_container">
                    @include('projects.project_14.blocks.promo')
                </div>
            </section>
            @include('projects.project_14.blocks.about')
            @include('projects.project_14.blocks.features')
            @include('projects.project_14.blocks.cards')
            @include('projects.project_14.blocks.statistics')
            @include('projects.project_14.blocks.advs')
            @include('projects.project_14.blocks.reviews')
            @include('projects.project_14.blocks.links')
            <div class="main__apps">
                <img src="img/projects/project_14/phones.jpg" alt="apps">
            </div>
            @include('projects.project_14.includes.footer')
        </main>
        <footer></footer>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.slim.min.js"></script>
    <script src="{{ asset('assets/projects/project_14/js/script.js') }}"></script>
</body>
</html>