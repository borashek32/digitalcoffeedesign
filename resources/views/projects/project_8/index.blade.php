<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scale=0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Organic</title>
    <link rel="stylesheet" href="{{ asset('assets/projects/project_8/css/style.css') }}">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700,900&display=swap" rel="stylesheet" />
</head>
<body>
    <div class="wrapper__container">
        {{-- header --}}
        <header class="header">
            <h1 class="header__logo logo">
                <a href="#">organic juicy co.</a>
            </h1>
            <nav class="header__nav">
                <ul>
                    <li><a href="#">home</a></li>
                    <li><a href="#">about</a></li>
                    <li><a href="#">products</a></li>
                    <li><a href="#">location</a></li>
                    <li><a href="#">contact</a></li>
                </ul>
            </nav>
            <button type="button" class="header__menu menu">
                <span></span>
            </button>
            <div class="header__search search">
                <svg class="search__icon" width="20" height="20" viewBox="0 0 14 14" xmlns="http://www.w3.org/2000/svg">
                    <path d="M12.5746 13.9986L7.80758 9.23258C6.76669 9.91924 5.50802 10.1952 4.27531 10.0071C3.0426 9.81892 1.92357 9.18003 1.13491 8.21412C0.346247 7.24821 -0.0559253 6.02401 0.00627149 4.77858C0.0684683 3.53315 0.590608 2.3551 1.47158 1.47258C2.35395 0.591272 3.53198 0.068789 4.77752 0.00632441C6.02306 -0.0561402 7.24746 0.345858 8.21358 1.13446C9.17969 1.92306 9.81876 3.04214 10.007 4.27496C10.1953 5.50777 9.91931 6.76658 9.23258 7.80758L13.9976 12.5756L12.5746 13.9986ZM5.03158 2.01258C4.23063 2.01204 3.46227 2.32971 2.89553 2.8957C2.3288 3.46168 2.01011 4.22962 2.00958 5.03057C2.00905 5.83153 2.32672 6.59989 2.8927 7.16662C3.45869 7.73336 4.22663 8.05204 5.02758 8.05258C5.42417 8.05284 5.81693 7.97498 6.18344 7.82346C6.54994 7.67193 6.88301 7.4497 7.16363 7.16945C7.44425 6.8892 7.66692 6.55643 7.81893 6.19013C7.97094 5.82382 8.04932 5.43117 8.04958 5.03458C8.04984 4.63798 7.97199 4.24522 7.82046 3.87872C7.66893 3.51222 7.4467 3.17915 7.16646 2.89853C6.88621 2.61791 6.55343 2.39524 6.18713 2.24322C5.82083 2.09121 5.42817 2.01284 5.03158 2.01258V2.01258Z"/>
                </svg>
            </div>
        </header>
        {{-- content --}}
        <main class="main">
            {{-- sliders --}}
            <div class="slider-arrows">
                <div class="slider-arrows__items-wrapper">
                    <img src="img/projects/project_8/apple.jpg" alt="apple" class="slider-arrows__item">
                    <img src="img/projects/project_8/apples-many.jpg" alt="apple" class="slider-arrows__item">
                    <img src="img/projects/project_8/apples-green-red.jpg" alt="apple" class="slider-arrows__item">
                </div>
                <div class="slider-arrows__nav">
                    <button class="slider-arrows__arrow slider-arrows__arrow_prev opacity"><</button>
                    <button class="btn opacity">start drinking</button>
                    <button class="slider-arrows__arrow slider-arrows__arrow_next opacity">></button>
                </div>
            </div>
            <div class="slider-dots">
                <div class="slider-dots__items-wrapper">
                    <img src="img/projects/project_8/carrots.jpg" alt="apple" class="slider-arrows__item">
                    {{-- <img src="img/projects/project_8/carrots-1.jpg" alt="apple" class="slider-arrows__item">
                    <img src="img/projects/project_8/carrots-2.jpg" alt="apple" class="slider-arrows__item"> --}}
                </div>
                <div class="slider-dots__btn-wrapper">
                    <button class="btn opacity">start drinking</button>
                </div>
                <div class="slider-dots__nav">
                    <div class="slider-dots__nav-item opacity"></div>
                    <div class="slider-dots__nav-item opacity slider-dots__nav-item_active"></div>
                    <div class="slider-dots__nav-item opacity"></div>
                </div>
            </div>
            <div class="slider-orange">
                <img src="img/projects/project_8/orange.jpg" class="slider-orange__img" alt="orange">
                <div class="orange__btn-wrapper">
                    <button class="btn orange-btn opacity">start drinking</button>
                </div>
                <div class="orange__nav">
                    <a href="#" class="orange__arrow opacity">
                        <svg width="60" height="60" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M2.00013 8.97486C2.0006 8.84225 2.05374 8.71527 2.14784 8.62183C2.24195 8.5284 2.36931 8.47618 2.50192 8.47666L14.2948 8.5189L11.1591 5.36165C11.0656 5.26742 11.0133 5.1399 11.0138 5.00712C11.0142 4.87435 11.0674 4.7472 11.1617 4.65365C11.2559 4.5601 11.3834 4.50781 11.5162 4.50829C11.649 4.50876 11.7761 4.56196 11.8697 4.65619L15.8553 8.67049C15.9017 8.7171 15.9384 8.77241 15.9634 8.83324C15.9884 8.89408 16.0012 8.95924 16.0009 9.02501C16.0007 9.09078 15.9875 9.15585 15.9621 9.21651C15.9366 9.27716 15.8995 9.3322 15.8528 9.37848L11.8385 13.3641C11.7442 13.4577 11.6167 13.51 11.4839 13.5095C11.3512 13.509 11.224 13.4558 11.1305 13.3616C11.0369 13.2674 10.9846 13.1398 10.9851 13.0071C10.9856 12.8743 11.0388 12.7471 11.133 12.6536L14.2913 9.51889L2.49834 9.47665C2.36573 9.47617 2.23874 9.42304 2.14531 9.32894C2.05188 9.23483 1.99965 9.10747 2.00013 8.97486V8.97486Z" fill="white"/>
                        </svg>
                    </a>
                </div>
            </div>
            {{-- articles --}}
            <article class="freshy">
                <div class="common">
                    <h2 class="common__title common__title_freshy">
                        go green and stay
                        <span>fre-<wbr>shy</span>
                    </h2>
                    <div class="common__desc common__desc_freshy">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ex quod commodi veniam esse in beatae nobis consectetur doloribus corrupti magnam delectus provident libero a, eum vitae laudantium eos laborum eligendi ab animi quisquam, porro quo.</p>
                    </div>
                </div>
            </article>
            <article class="healthy">
                <div class="healthy__grid">
                    <div class="common common__healthy">
                    <h2 class="common__title common__title_healthy">
                        worry less drink
                        <span>hea-<wbr>lthy</span>
                    </h2>
                    <div class="common__desc common__desc_healthy">
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Rem, cupiditate? Laboriosam fugiat, voluptas doloribus non ipsam odio optio nihil nesciunt amet culpa dolorem inventore mollitia fugit cum labore, totam quod.</p>
                    </div>
                </div>
                </div>
            </article>
            <article class="thirsty">
                {{-- <div class="thirsty__grid"> --}}
                    <div class="common common__thirsty">
                        <h2 class="common__title common__title_thirsty">
                            are you summer
                            <span>thir-<wbr>sty?</span>
                        </h2>
                        <div class="common__desc common__desc_thirsty">
                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Rem, cupiditate? Laboriosam fugiat, voluptas doloribus non ipsam odio optio nihil nesciunt amet culpa dolorem inventore mollitia fugit cum labore, totam quod.</p>
                        </div>
                    </div>
                {{-- </div> --}}
            </article>
        </main>
        {{-- footer --}}
        <footer class="footer">
            <div class="footer__grid">
                <div class="footer__socials socials">
                    <div class="socials__list">
                        <ul>
                            <li>
                                <a href="#" class="socials__link opacity">
                                    <img src="img/projects/project_8/ig.svg" alt="ig">
                                </a>
                            </li>
                            <li>
                                <a href="#" class="socials__link opacity">
                                    <img src="img/projects/project_8/tw.svg" alt="tw">
                                </a>
                            </li>
                            <li>
                                <a href="#" class="socials__link opacity">
                                    <img src="img/projects/project_8/fb.svg" alt="fb">
                                </a>
                            </li>
                            <li>
                                <a href="#" class="socials__link opacity">
                                    <img src="img/projects/project_8/in.svg" alt="in">
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <form action="#" class="footer__form form">
                    <div class="form__row">
                        <p>sign up<br>for new new</p>
                        <div class="form__div">
                            <input type="email" placeholder="YOUR EMAIL">
                            <button class="opacity">SUBMIT</button>
                        </div>
                    </div>
                </form>
                <div class="footer__footer-logo footer-logo">
                    <div class="footer-logo__rights">
                        <img src="img/projects/project_8/logo.png" class="opacity footer-logo__logo-img" width="50px" alt="logo">
                        <p class="footer-logo__reserved">&copy; All rights reserved <?= date('Y') ?></p>
                    </div>
                </div>
                <article class="footer__sidebar sidebar">
                    <div class="common common__juicy">
                        <h2 class="common__title common__title_juicy">
                            now try out our
                            <span>jui-<wbr>cy</span>
                        </h2>
                        <div class="common__desc common__desc_juicy">
                            <div>Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque quam sapiente sed!</div>
                            <button class="btn btn_rounded">more</button>
                        </div>
                    </div>
                </article>
            </div>
        </footer>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.slim.min.js"></script>
    <script src="{{ asset('assets/projects/project_8/js/script.js') }}"></script>
</body>
</html>