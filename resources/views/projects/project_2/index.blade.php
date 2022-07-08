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
                <li><a href="{{ route('project2') }}">Home</a></li>
                <li><a href="{{ route('project2_services') }}">Services</a></li>
                <li><a href="{{ route('project2_work') }}">Work</a></li>
                <li><a href="{{ route('project2_contact') }}">Contact</a></li>
            </ul>

            @include('projects.project_2.social-bar')
        </div>
    </header>

    <section class="home">
        <img src="{{ asset('img/projects/project_2/home-img.jpg') }}" alt="home" class="home-img">

        <div class="home-content">
            <h1>We help to achieve <br>
            your goals</h1>

            <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                laboris nisi ut aliquip ex ea commodo consequat.
            </p>

            <a href="#" class="button">Get started</a>
        </div>
    </section>

    <script src="{{ asset('assets/projects/project_2/js/script.js') }}"></script>
</body>
</html>
