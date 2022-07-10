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
        <h1>Contact us</h1>

        <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
            ut labore et dolore magna aliqua.
        </p>
    </div>

    <div class="contact">
        <div class="contact-form">
            <form>
                <div class="row">
                    <div class="input50">
                        <input placeholder="First Name" class="text">
                    </div>

                    <div class="input50">
                        <input placeholder="Last Name" class="text">
                    </div>
                </div>

                <div class="row">
                    <div class="input50">
                        <input placeholder="Email" class="text">
                    </div>

                    <div class="input50">
                        <input placeholder="Subject" class="text">
                    </div>
                </div>

                <div class="row">
                    <div class="input100">
                        <textarea placeholder="Message"></textarea>
                    </div>
                </div>

                <div class="row">
                    <div class="input100">
                        <input type="submit" value="Send">
                    </div>
                </div>
            </form>
        </div>

        <div class="contact-info">
            <div class="info-box">
                <img src="img/projects/project_2/projects/project_2/img/projects/project_2/address.png" class="contact-icon" alt="">

                <div class="details">
                    <h4>Address</h4>
                    <p>28 Neon Tower, New Your City, USA</p>
                </div>
            </div>

            <div class="info-box">
                <img src="img/projects/project_2/address.png" class="contact-icon" alt="">

                <div class="details">
                    <h4>Email</h4>
                    <a href="mailto:borashek@inbox.ru">borashek@inbox.ru</a>
                    <a href="mailto:borashek@inbox.ru">borashek@inbox.ru</a>
                </div>
            </div>

            <div class="info-box">
                <img src="img/projects/project_2/call.png" class="contact-icon" alt="">

                <div class="details">
                    <h4>Call</h4>
                    <a href="tel:+79169174630">+7 916 917 46 30</a><br>
                    <a href="tel:+79169174630">+7 916 917 46 30</a>
                </div>
            </div>
        </div>
    </div>
</section>

<script src="{{ asset('assets/projects/project_2/js/script.js') }}"></script>
</body>
</html>
