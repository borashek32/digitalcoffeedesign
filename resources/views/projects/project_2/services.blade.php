<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('assets/projects/project_2/css/style.css') }}">
    <title>Creative Agency</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
</head>
<body>
<header>
    <div class="logo">
        Creative Agency
    </div>

    <div class="toggle">

    </div>

    <div class="navigation">
        <ul>
            <li><a href="{{ route('creative-agency') }}">Home</a></li>
            <li><a href="{{ route('creative-agency_services') }}">Services</a></li>
            <li><a href="{{ route('creative-agency_work') }}">Work</a></li>
            <li><a href="{{ route('creative-agency_contact') }}">Contact</a></li>
        </ul>

        @include('projects.project_2.social-bar')
    </div>
</header>

<section>
    <div class="title">
        <h1>Services we can help you with</h1>

        <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
            ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
            laboris nisi ut aliquip ex ea commodo consequat.
        </p>

        <div class="services">
            <div class="service">
                <div class="icon">
                    <img src="img/projects/project_2/001.png" alt="">
                </div>
                <h2>Design</h2>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur at corporis
                cupiditate ducimus laboriosam maxime praesentium, quod soluta tenetur! Odio?
            </div>

            <div class="service">
                <div class="icon">
                    <img src="img/projects/project_2/002.png" alt="">
                </div>
                <h2>Development</h2>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur at corporis
                cupiditate ducimus laboriosam maxime praesentium, quod soluta tenetur! Odio?
            </div>

            <div class="service">
                <div class="icon">
                    <img src="img/projects/project_2/003.png" alt="">
                </div>
                <h2>SEO</h2>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur at corporis
                cupiditate ducimus laboriosam maxime praesentium, quod soluta tenetur! Odio?
            </div>

            <div class="service">
                <div class="icon">
                    <img src="img/projects/project_2/004.png" alt="">
                </div>
                <h2>Marketing</h2>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur at corporis
                cupiditate ducimus laboriosam maxime praesentium, quod soluta tenetur! Odio?
            </div>

            <div class="service">
                <div class="icon">
                    <img src="img/projects/project_2/005.png" alt="">
                </div>
                <h2>App Development</h2>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur at corporis
                cupiditate ducimus laboriosam maxime praesentium, quod soluta tenetur! Odio?
            </div>

            <div class="service">
                <div class="icon">
                    <img src="img/projects/project_2/006.png" alt="">
                </div>
                <h2>Error Fixing</h2>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur at corporis
                cupiditate ducimus laboriosam maxime praesentium, quod soluta tenetur! Odio?
            </div>
        </div>
    </div>
</section>

<script src="{{ asset('assets/projects/project_2/js/script.js') }}"></script>
</body>
</html>
