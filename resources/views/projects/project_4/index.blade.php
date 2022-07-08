<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Project_4</title>
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('assets/projects/project_4/css/style.css') }}">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kumbh+Sans:wght@300&family=Raleway&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap" rel="stylesheet">
</head>

<body>
    <nav class="navbar">
        <div class="navbar__container">
            <a href="#home" id="navbar__logo">color</a>

            <div class="navbar__toggle" id="mobile-menu">
                <span class="bar"></span>
                <span class="bar"></span>
                <span class="bar"></span>
            </div>

            <ul class="navbar__menu">
                <li class="navbar__item">
                    <a href="#home" class="navbar__links" id="home-page">Home</a>
                </li>

                <li class="navbar__item">
                    <a href="#about" class="navbar__links" id="about-page">About</a>
                </li>

                <li class="navbar__item">
                    <a href="#services" class="navbar__links" id="services-page">Services</a>
                </li>

                <li class="navbar__btn">
                    <a href="#sign-up" class="navbar__button" id="signup">Sign up</a>
                </li>
            </ul>
        </div>
    </nav>

    {{-- hero section --}}
    <div class="hero" id="home">
        <div class="hero__container">
            <h1 class="hero__heading">
                Choose your <span>colors</span>
            </h1>

            <p class="hero__description">Unlimited possibilities</p>

            <button class="hero__btn">
                <a href="#">Explore</a>
            </button>
        </div>
    </div>

    {{-- about section  --}}
    <div class="main" id="about">
        <div class="main__container">
            <div class="main__img--container">
                <div class="main__img--card">

                </div>
            </div>

            <div class="main__content">
                <h1>What do we do?</h1>
                <h2>We help businesses scale</h2>
                <p>Schedule a call to learn more about our services</p>

                <button class="main__btn">
                    <a href="#">Schedule a call</a>
                </button>
            </div>
        </div>
    </div>

    {{-- services section --}}
    <div class="services" id="services">
        <h1 class="services__header">Our Services</h1>

        <div class="services__wrapper">
            <div class="services__card">
                <h2>Custom Colorways</h2>
                <p>AI Powered technology</p>
                <div class="services__btn"><button>Get Started</button></div>
            </div>
            <div class="services__card">
                <h2>Are you Ready?</h2>
                <p>Take the lepa</p>
                <div class="services__btn"><button>Get Started</button></div>
            </div>
            <div class="services__card">
                <h2>Full Gradients</h2>
                <p>100 Combinations</p>
                <div class="services__btn"><button>Get Started</button></div>
            </div>
            <div class="services__card">
                <h2>Infinite Choices</h2>
                <p>1000's of colors</p>
                <div class="services__btn"><button>Get Started</button></div>
            </div>
        </div>
    </div>

    {{-- features section --}}
    <div class="main" id="sign-up">
        <div class="main__container">
            <div class="main__content">
                <h1>Join Our Team</h1>
                <h2>Sign Up Today</h2>
                <p>See what makes us different</p>
                <button class="main__btn"><a href="#">Sign Up</a></button>
            </div>
            <div class="main__img--container">
                <div class="main__img--card" id="card-2">
                <i class="fas fa-users"></i>
                </div>
            </div>
        </div>
    </div>

    {{-- footer --}}
    <div class="footer">
        <div class="footer__container">
            <div class="footer__links">
                <div class="footer__link--wrapper">
                    <div class="footer__link--items">
                        <h2>About Us</h2>
                        <a href="/sign__up">How it works</a> <a href="/">Testimonials</a>
                        <a href="/">Careers</a> <a href="/">Terms of Service</a>
                    </div>

                    <div class="footer__link--items">
                        <h2>Contact Us</h2>
                        <a href="/">Contact</a> <a href="/">Support</a>
                        <a href="/">Destinations</a>
                    </div>
                </div>

                <div class="footer__link--wrapper">
                    <div class="footer__link--items">
                        <h2>Videos</h2>
                        <a href="/">Submit Video</a> <a href="/">Ambassadors</a>
                        <a href="/">Agency</a>
                    </div>

                    <div class="footer__link--items">
                        <h2>Social Media</h2>
                        <a href="/">Instagram</a> <a href="/">Facebook</a>
                        <a href="/">Youtube</a> <a href="/">Twitter</a>
                    </div>
                </div>
            </div>

            <section class="social__media">
                <div class="social__media--wrap">
                    <div class="footer__logo">
                        <a href="/" id="footer__logo">COLOR</a>
                    </div>

                    <p class="website__rights">© COLOR 2020. All rights reserved</p>

                    <div class="social__icons">
                        <a href="/" class="social__icon--link" target="_blank">
                            <i class="fab fa-facebook"></i>
                        </a>
                        <a href="/" class="social__icon--link">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="/" class="social__icon--link">
                            <i class="fab fa-youtube"></i>
                        </a>
                        <a href="/" class="social__icon--link">
                            <i class="fab fa-linkedin"></i>
                        </a>
                        <a href="/" class="social__icon--link">
                            <i class="fab fa-twitter"></i>
                        </a>
                    </div>
                </div>
            </section>
        </div>
    </div>

    <script src="{{ asset('assets/projects/project_4/js/script.js') }}"></script>
</body>
</html>
