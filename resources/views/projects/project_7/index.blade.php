<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scale=0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Project_7</title>
    <link rel="stylesheet" href="{{ asset('assets/project_7/css/style.css') }}">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link href="http://fonts.cdnfonts.com/css/gilroy-medium" rel="stylesheet">
    <link href="http://fonts.cdnfonts.com/css/gilroy-bold" rel="stylesheet">
</head>
<body>
    <div class="wrapper">
        {{-- header --}}
        <header class="nav">
            <div class="nav__container _container">
                <nav class="nav__row">
                    <ul class="nav__list">
                        <li class="nav__item">
                            <a href="#promo">Home</a>
                        </li>
                        <li class="nav__item">
                            <a href="#about">About me</a>
                        </li>
                        <li class="nav__item">
                            <a href="#skills">Skills</a>
                        </li>
                        <li class="nav__item">
                            <a href="#portfolio">Portfolio</a>
                        </li>
                        <li class="nav__item">
                            <a href="#footer">Contacts</a>
                        </li>
                    </ul>
                    <div class="nav__burger">
                        <span></span>
                    </div>
                </nav>
            </div>
        </header>
        {{-- content --}}
        <main class="main">
            {{-- promo --}}
            <a href="#" id="promo"></a>
            <div class="main__promo promo">
                <div class="promo__container _container">
                    <div class="promo__row">
                        <div class="promo__name">
                            Denis<br>Novik
                        </div>
                        <div class="promo__profession description">
                            <p>UX | UI designer<br>24 years old, Minsk</p>
                        </div>
                        <div class="promo__lang">
                            <a href="#">RU </a>
                            <a href="#"> | ENG</a>
                        </div>
                    </div>
                    <div class="promo__photo">
                        <img src="img/project_7/promo/promo.jpg" alt="photo of me">
                    </div>
                    <div class="promo__photo_mobile">
                        <img src="img/project_7/promo/promo-mobile.jpg" alt="photo of me">
                    </div>
                </div>
            </div>
            {{-- about --}}
            <a href="#" id="about"></a>
            <section class="main__about about">
                <div class="about__container">
                    <div class="about__title title">About me</div>
                    <div class="about__description description">
                        <p>
                            Hi, I'm Denis – UX/UI designer from Minsk.<br>
                            I'm interested in design and everything connected with it.
                        </p>

                        <p>
                            I'm studying at courses "Web and mobile design<br>
                            interfaces" in IT-Academy.
                        </p>

                        <p>
                            Ready to implement excellent projects<br>
                            with wonderful people.
                        </p>
                    </div>
                </div>
            </section>
            {{-- skills --}}
            <a href="#" id="skills"></a>
            <section class="main__skills skills">
                <div class="skills__container _container">
                    <div class="skills__title title">Skills</div>
                    <div class="skills__description description">
                        <p>I work in such programs as</p>
                    </div>
                    <div class="skills__row">
                        <div class="skills__column">
                            <div class="skills__item">
                                <div class="skills__img">
                                    <img src="img/project_7/skills/photoshop.png" alt="photoshop">
                                </div>
                                <div class="skills__name">
                                    Adobe<br>Photoshop
                                </div>
                                <div class="skills__level stars">
                                    <div class="stars__row">
                                        <div class="stars__star">
                                            <img src="img/project_7/star.png" alt="level star">
                                        </div>
                                        <div class="stars__star">
                                            <img src="img/project_7/star.png" alt="level star">
                                        </div>
                                        <div class="stars__star">
                                            <img src="img/project_7/star.png" alt="level star">
                                        </div>
                                        <div class="stars__star">
                                            <img src="img/project_7/star.png" alt="level star">
                                        </div>
                                        <div class="stars__star">
                                            <img src="img/project_7/star-grey.png" alt="level star">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="skills__column">
                            <div class="skills__item">
                                <div class="skills__img">
                                    <img src="img/project_7/skills/illustrator.png" alt="illustrator">
                                </div>
                                <div class="skills__name">
                                    Adobe<br>Illustrator
                                </div>
                                <div class="skills__level stars">
                                    <div class="stars__row">
                                        <div class="stars__star">
                                            <img src="img/project_7/star.png" alt="level star">
                                        </div>
                                        <div class="stars__star">
                                            <img src="img/project_7/star.png" alt="level star">
                                        </div>
                                        <div class="stars__star">
                                            <img src="img/project_7/star.png" alt="level star">
                                        </div>
                                        <div class="stars__star">
                                            <img src="img/project_7/star-grey.png" alt="level star">
                                        </div>
                                        <div class="stars__star">
                                            <img src="img/project_7/star-grey.png" alt="level star">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="skills__column">
                            <div class="skills__item">
                                <div class="skills__img">
                                    <img src="img/project_7/skills/effects.png" alt="after effect">
                                </div>
                                <div class="skills__name">
                                    Adobe<br>After Effect
                                </div>
                                <div class="skills__level stars">
                                    <div class="stars__row">
                                        <div class="stars__star">
                                            <img src="img/project_7/star.png" alt="level star">
                                        </div>
                                        <div class="stars__star">
                                            <img src="img/project_7/star.png" alt="level star">
                                        </div>
                                        <div class="stars__star">
                                            <img src="img/project_7/star.png" alt="level star">
                                        </div>
                                        <div class="stars__star">
                                            <img src="img/project_7/star.png" alt="level star">
                                        </div>
                                        <div class="stars__star">
                                            <img src="img/project_7/star-grey.png" alt="level star">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="skills__column">
                            <div class="skills__item">
                                <div class="skills__img">
                                    <img src="img/project_7/skills/figma.png" alt="figma">
                                </div>
                                <div class="skills__name">
                                    Figma
                                </div>
                                <div class="skills__level stars">
                                    <div class="stars__row">
                                        <div class="stars__star">
                                            <img src="img/project_7/star.png" alt="level star">
                                        </div>
                                        <div class="stars__star">
                                            <img src="img/project_7/star.png" alt="level star">
                                        </div>
                                        <div class="stars__star">
                                            <img src="img/project_7/star.png" alt="level star">
                                        </div>
                                        <div class="stars__star">
                                            <img src="img/project_7/star.png" alt="level star">
                                        </div>
                                        <div class="stars__star">
                                            <img src="img/project_7/star-grey.png" alt="level star">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            {{-- portfolio --}}
            <a href="#" id="portfolio"></a>
            <section class="main__portfolio portfolio">
                <div class="portfolio__container _container">
                    <div class="portfolio__title title">Portfolio</div>
                    <div class="portfolio__list">
                        <div class="portfolio__item">
                            <a href="#">
                                <img src="img/project_7/works/0.jpg" class="portfolio_img" alt="fasion store">
                            </a>
                            <div class="portfolio__link">
                                <a href="#" class="portfolio__description description">
                                    <p>Online fashion store - Homepage</p>
                                </a>
                            </div>
                        </div>
                        <div class="portfolio__item">
                            <a href="#">
                                <img src="img/project_7/works/01.jpg" class="portfolio_img" alt="reebok">
                            </a>
                            <div class="portfolio__link">
                                <a href="#" class="portfolio__description description">
                                    <p>Reebok Store - Concept</p>
                                </a>
                            </div>
                        </div>
                        <div class="portfolio__item">
                            <a href="#">
                                <img src="img/project_7/works/02.jpg" class="portfolio_img" alt="braun">
                            </a>
                            <div class="portfolio__link">
                                <a href="#" class="portfolio__description description">
                                    <p>Braun Landing Page - Concept</p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>
        {{-- footer --}}
        <a href="#" id="footer"></a>
        <footer class="footer">
            <div class="footer__container _container">
                <div class="footer__title title">Contacts</div>
                <div class="footer__description description">
                    <p>Want to know more or just chat?<br>You are welcome!</p>
                </div>
                <div class="footer__button-container">
                    <a href="#">
                        <button class="footer__button">Send message</button>
                    </a>
                </div>
                <div class="footer__row">
                    <div class="footer__item">
                        <a href="#">
                            <img src="img/project_7/social/social.png" width="40px" alt="in">
                        </a>
                    </div>
                    <div class="footer__item">
                        <a href="#">
                            <img src="img/project_7/social/social1.png" width="40px" alt="ig">
                        </a>
                    </div>
                    <div class="footer__item">
                        <a href="#">
                            <img src="img/project_7/social/social2.png" width="40px" alt="be">
                        </a>
                    </div>
                    <div class="footer__item">
                        <a href="#">
                            <img src="img/project_7/social/social3.png" width="40px" alt="ball">
                        </a>
                    </div>
                </div>
                <div class="footer__likeme description">
                    <p>Like me on<br>LinkedIn, Instagram, Behance, Dribble</p>
                </div>
            </div>
        </footer>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.slim.min.js"></script>
    <script src="{{ asset('assets/project_7/js/script.js') }}"></script>
</body>
</html>