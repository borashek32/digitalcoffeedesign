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
        <h1>Some of our finest work</h1>

        <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
            ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
            laboris nisi ut aliquip ex ea commodo consequat.
        </p>

        <div class="portfolio">
            <div class="item">
                <img src="{{ asset('img/projects/project_2/portfolio-item1.jpg') }}" alt="">
                <div class="action">
                    <a href="#">Launch</a>
                </div>
            </div>

            <div class="item">
                <img src="{{ asset('img/projects/project_2/portfolio-item2.jpg') }}" alt="">
                <div class="action">
                    <a href="#">Launch</a>
                </div>
            </div>

            <div class="item">
                <img src="{{ asset('img/projects/project_2/portfolio-item3.jpg') }}" alt="">
                <div class="action">
                    <a href="#">Launch</a>
                </div>
            </div>

            <div class="item">
                <img src="{{ asset('img/projects/project_2/portfolio-item4.jpg') }}" alt="">
                <div class="action">
                    <a href="#">Launch</a>
                </div>
            </div>

            <div class="item">
                <img src="{{ asset('img/projects/project_2/portfolio-item5.jpg') }}" alt="">
                <div class="action">
                    <a href="#">Launch</a>
                </div>
            </div>

            <div class="item">
                <img src="{{ asset('img/projects/project_2/portfolio-item6.jpg') }}" alt="">
                <div class="action">
                    <a href="#">Launch</a>
                </div>
            </div>

            <div class="item">
                <img src="{{ asset('img/projects/project_2/portfolio-item7.jpg') }}" alt="">
                <div class="action">
                    <a href="#">Launch</a>
                </div>
            </div>

            <div class="item">
                <img src="{{ asset('img/projects/project_2/portfolio-item8.jpg') }}" alt="">
                <div class="action">
                    <a href="#">Launch</a>
                </div>
            </div>

            <div class="item">
                <img src="{{ asset('img/projects/project_2/portfolio-item9.jpg') }}" alt="">
                <div class="action">
                    <a href="#">Launch</a>
                </div>
            </div>

            <div class="item">
                <img src="{{ asset('img/projects/project_2/portfolio-item10.jpg') }}" alt="">
                <div class="action">
                    <a href="#">Launch</a>
                </div>
            </div>

            <div class="item">
                <img src="{{ asset('img/projects/project_2/portfolio-item11.jpg') }}" alt="">
                <div class="action">
                    <a href="#">Launch</a>
                </div>
            </div>

            <div class="item">
                <img src="{{ asset('img/projects/project_2/portfolio-item12.jpg') }}" alt="">
                <div class="action">
                    <a href="#">Launch</a>
                </div>
            </div>

            <div class="item">
                <img src="{{ asset('img/projects/project_2/portfolio-item13.jpg') }}" alt="">
                <div class="action">
                    <a href="#">Launch</a>
                </div>
            </div>

            <div class="item">
                <img src="{{ asset('img/projects/project_2/portfolio-item14.jpg') }}" alt="">
                <div class="action">
                    <a href="#">Launch</a>
                </div>
            </div>

            <div class="item">
                <img src="{{ asset('img/projects/project_2/portfolio-item15.jpg') }}" alt="">
                <div class="action">
                    <a href="#">Launch</a>
                </div>
            </div>

            <div class="item">
                <img src="{{ asset('img/projects/project_2/portfolio-item16.jpg') }}" alt="">
                <div class="action">
                    <a href="#">Launch</a>
                </div>
            </div>
        </div>
    </div>
</section>

<script src="{{ asset('assets/projects/project_2/js/script.js') }}"></script>
</body>
</html>
