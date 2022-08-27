<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scale=0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contractor X</title>
    <link rel="stylesheet" href="{{ asset('assets/projects/project_12/css/style.css') }}">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css?family=Barlow:regular&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Roboto:regular&display=swap" rel="stylesheet" />
</head>
<body>
    <div class="wrapper">
        <header class="header">
            <div class="header__container _container">
                <nav class="header__menu">
                    <ul class="header__list header__list_left">
                        <li class="header__li">
                            <a href="#home" class="header__link">Home</a>
                        </li>
                        <li class="header__li">
                            <a href="#about" class="header__link">About</a>
                        </li>
                        <li class="header__li">
                            <a href="#blog" class="header__link">Blog</a>
                        </li>
                        <li class="header__li">
                            <a href="#pages" class="header__link">Pages</a>
                        </li>
                    </ul>
                    <ul class="header__list header__list_right">
                        <li class="header__li">
                            <a href="#contact" class="header__link">Contact</a>
                        </li>
                        <li class="header__li">
                            <a href="#" class="header__link">Cart</a>
                        </li>
                        <li class="header__li">
                            <a href="#quote" class="header__link">Get a quote</a>
                        </li>
                    </ul>
                </nav>
                <div class="header__burger">
                    <span></span>
                </div>
            </div>
        </header>
        <main class="main">
            @include('projects.project_12.blocks.promo')
            @include('projects.project_12.blocks.about')
            @include('projects.project_12.blocks.services')
            @include('projects.project_12.blocks.trigger')
            @include('projects.project_12.blocks.quality')
            @include('projects.project_12.blocks.projects')
            @include('projects.project_12.blocks.testimonials')
            @include('projects.project_12.blocks.blog')
        </main>
        <footer class="footer">
            <div class="_container">
                <div class="footer__container">
                    <div class="footer__column footer__column_center footer__column_20">
                        <p class="footer_desc">Lorem ipsum dolor sit amet consectetur adipiscing elit.</p>
                        <div class="footer__span-wrapper">
                            <div></div>
                            <div></div>
                            <div></div>
                            <div></div>
                        </div>
                    </div>
                    <div class="footer__column footer__column_30">
                        <div class="footer__title">Menu</div>
                        <ul class="footer__menu menu">
                            <div class="menu__column">
                                <li class="footer__item">Home</li>
                                <li class="footer__item">About</li>
                                <li class="footer__item">Blog</li>
                                <li class="footer__item">Blog Post</li>
                                <li class="footer__item">Services</li>
                                <li class="footer__item">Services Single</li>
                                <li class="footer__item">Shop</li>
                            </div>
                            <div class="menu__column">
                                <li class="footer__item">Shop</li>
                                <li class="footer__item">Shop Single</li>
                                <li class="footer__item">Projects</li>
                                <li class="footer__item">Projects Single</li>
                                <li class="footer__item">Contact</li>
                            </div>
                        </ul>
                    </div>
                    <div class="footer__column footer__column_20">
                        <div class="footer__title">Utility Pages</div>
                        <ul class="footer__menu menu">
                            <div class="menu__column menu__column_single">
                                <li class="footer__item">Home</li>
                                <li class="footer__item">About</li>
                                <li class="footer__item">Blog</li>
                                <li class="footer__item">Blog Post</li>
                                <li class="footer__item">Services</li>
                                <li class="footer__item">Services Single</li>
                                <li class="footer__item">Shop</li>
                            </div>
                        </ul>
                    </div>
                    <div class="footer__column footer__column_30">
                        <div class="footer__title">Contact us</div>
                        <div class="footer__btns-wrapper">
                            <a href="tel:3232380682">
                                <div class="footer__btn btn">
                                    <div class="btn__icon-wrapper">
                                        <img src="{{ asset('img/projects/project_12/icons/call.png') }}" alt="contact us" class="btn__icon">
                                    </div>
                                    <div class="footer__description">
                                        <p>Call us</p>
                                        <p>(323) 238-0682</p>
                                    </div>
                                </div>
                            </a>
                            <a href="mailto:info@contractor.com">
                                <div class="footer__btn btn">
                                    <div class="btn__icon-wrapper">
                                        <iconify-icon icon="carbon:email" style="color: white;" width="32" height="32"></iconify-icon>
                                    </div>
                                    <div class="footer__description">
                                        <p>Email us</p>
                                        <p>info@contractor.com</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="footer__last-line last-line">
                    <div class="last-line__column">
                        <p class="">Copyright © Contractor X</p>
                    </div>
                    <div class="last-line__column">
                        <p class="last-line__text">Designed by <span>BRIX Templates </span>| Powered by <span>Webflow</span></p>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.slim.min.js"></script>
    <script src="https://code.iconify.design/iconify-icon/1.0.0-beta.3/iconify-icon.min.js"></script>
    <script src="{{ asset('assets/projects/project_12/js/script.js') }}"></script>
</body>
</html>