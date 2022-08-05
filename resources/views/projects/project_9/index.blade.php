<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scale=0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Velocity</title>
    <link rel="stylesheet" href="{{ asset('assets/projects/project_9/css/style.css') }}">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:regular&display=swap" rel="stylesheet" />
</head>
<body>
    <div class="wrapper">
        <header class="header">
            <div class="_container">
                <div class="header__body">
                    <div class="header__title">
                        <a href="#">
                            <h1>velocity</h1>
                        </a>
                    </div>
                    <div class="header__burger">
                        <span></span>
                    </div>
                    <nav class="header__menu">
                        <ul class="header__list">
                            <li>
                                <a href="#main" class="header__link">Home</a>
                            </li>
                            <li>
                                <a href="#contact" class="header__link">Contact</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </header>
        <main class="main" id="main">
            <section class="main__promo promo">
                <div class="_container">
                    <h1 class="promo__title" id="main">this is velocity</h1>
                    <div class="promo__buttons buttons">
                        <button class="buttons__button buttons__button_blue">
                            <p class="buttons__link">sign up</p>
                        </button>
                        <button class="buttons__button buttons__button_border">
                            <p class="buttons__link">learn more</p>
                        </button>
                    </div>
                </div>
            </section>
            <section class="main__about about">
                <div class="_container">
                    <div class="block-title">
                        <h2 class="title">what we do</h2>
                        <p class="subtitle">This is some text inside of a div block.</p>
                    </div>
                    <div class="about__flex flex">
                        <div class="about__item item item_border">
                            <img src="{{ asset('img/projects/project_9/watch.svg') }}" alt="watch" class="item__img">
                            <h3 class="item__title">Graphic Design</h3>
                            <p class="item__description">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in eros elementum tristique.
                            </p>
                        </div>
                        <div class="about__item item item_border">
                            <img src="{{ asset('img/projects/project_9/arrows.svg') }}" alt="watch" class="item__img">
                            <h3 class="item__title">Awesome code</h3>
                            <p class="item__description">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in eros elementum tristique.
                            </p>
                        </div>
                        <div class="about__item item item_border">
                            <img src="{{ asset('img/projects/project_9/box.svg') }}" alt="watch" class="item__img">
                            <h3 class="item__title">free template</h3>
                            <p class="item__description">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in eros elementum tristique.
                            </p>
                        </div>
                    </div>
                </div>
            </section>
            <section class="main__services services">
                <div class="_container">
                    <div class="block-title block-title_white">
                        <h2 class="title">services</h2>
                        <p class="subtitle">This is some text inside of a div block.</p>
                    </div>
                    <div class="services__flex flex">
                        <div class="item">
                            <img src="{{ asset('img/projects/project_9/bridge.jpg') }}" alt="watch" class="item__img">
                            <h3 class="item__title item_white">services one</h3>
                            <p class="item__description item__description_white">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in eros elementum tristique.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius.
                            </p>
                            <div class="services__buttons buttons">
                                <button class="buttons__button buttons__button_border">
                                    <p class="buttons__link">learn more</p>
                                </button>
                            </div>
                        </div>
                        <div class="item">
                            <img src="{{ asset('img/projects/project_9/earphones.jpg') }}" alt="watch" class="item__img">
                            <h3 class="item__title item_white">services two</h3>
                            <p class="item__description item__description_white">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in eros elementum tristique.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius.
                            </p>
                            <div class="services__buttons buttons">
                                <button class="buttons__button buttons__button_border">
                                    <p class="buttons__link">learn more</p>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="main__tab tab">
                <div class="_container">
                    <div class="block-title">
                        <h2 class="title">tab section</h2>
                        <p class="subtitle">This is some text inside of a div block.</p>
                    </div>
                    <div class="tab__flex">
                        <button class="item__button active-btn">
                            tab button 1
                        </button>
                        <button class="item__button">
                            tab button 2
                        </button>
                        <button class="item__button">
                            tab button 3
                        </button>
                    </div>
                    <div class="tab__content">
                        <img src="{{ asset('img/projects/project_9/man.jpg') }}" alt="man" class="tab__img">
                        <h4 class="tab__title">Some Title Here 1</h4>
                        <p class="tab__description">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in eros elementum tristique.
                        <br>
                            Duis cursus, mi quis viverra ornare, eros dolor interdum nulla, ut commodo diam libero vitae erat.
                        <br>
                            Aenean faucibus nibh et justo cursus id rutrum lorem imperdiet. Nunc ut sem vitae risus tristique posuere.
                        </p>
                    </div>
                    <div class="tab__content">
                        <img src="{{ asset('img/projects/project_9/light.jpg') }}" alt="man" class="tab__img">
                        <h4 class="tab__title">Some Title Here 2</h4>
                        <p class="tab__description">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in eros elementum tristique.
                        <br>
                            Duis cursus, mi quis viverra ornare, eros dolor interdum nulla, ut commodo diam libero vitae erat.
                        <br>
                            Aenean faucibus nibh et justo cursus id rutrum lorem imperdiet. Nunc ut sem vitae risus tristique posuere.
                        </p>
                    </div>
                    <div class="tab__content">
                        <img src="{{ asset('img/projects/project_9/bike.jpg') }}" alt="man" class="tab__img">
                        <h4 class="tab__title">Some Title Here 3</h4>
                        <p class="tab__description">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in eros elementum tristique.
                        <br>
                            Duis cursus, mi quis viverra ornare, eros dolor interdum nulla, ut commodo diam libero vitae erat.
                        <br>
                            Aenean faucibus nibh et justo cursus id rutrum lorem imperdiet. Nunc ut sem vitae risus tristique posuere.
                        </p>
                    </div>
                </div>
            </section>
        </main>
        <footer class="footer">
            <div class="_container">
                <div class="footer__flex flex">
                    <div class="footer__item item">
                        <div class="footer__title">about velocity</div>
                        <div class="item__description item__description_footer footer__description item__description item__description_footer_noborder">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in eros elementum tristique. Duis cursus, mi quis viverra ornare, eros dolor interdum nulla, ut commodo diam libero vitae erat.
                        </div>
                    </div>
                    <div class="footer__item item">
                        <div class="footer__title">useful links</div>
                        <ul class="footer__list">
                            <li class="item__description item__description_footer footer__li">Phasellus gravida semper nisi</li>
                            <li class="item__description item__description_footer footer__li">Suspendisse nisl elit</li>
                            <li class="item__description item__description_footer footer__li">Dellentesque habitant morbi</li>
                            <li class="item__description item__description_footer footer__li">Etiam sollicitudin ipsum</li>
                        </ul>
                    </div>
                    <div class="footer__item item" id="contact">
                        <div class="footer__title">social</div>
                        <ul class="footer__list">
                            <li>
                                <a href="#" class="footer__social">
                                    <img src="{{ asset('img/projects/project_9/twitter.svg') }}" alt="Twitter">
                                    <p class="item__description item__description_footer">Twitter</p>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="footer__social">
                                    <img src="{{ asset('img/projects/project_9/fb.svg') }}" alt="Facebook">
                                    <p class="item__description item__description_footer">Facebook</p>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="footer__social">
                                    <img src="{{ asset('img/projects/project_9/pinterest.svg') }}" alt="Pinterest">
                                    <p class="item__description item__description_footer">Pinterest</p>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="footer__social">
                                    <img src="{{ asset('img/projects/project_9/google.svg') }}" alt="Google">
                                    <p class="item__description item__description_footer">Google</p>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="footer__social">
                                    <img src="{{ asset('img/projects/project_9/webflow.svg') }}" alt="Webflow">
                                    <p class="item__description item__description_footer">Webflow</p>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="footer__end">
                <p>Copyright Velocity Inc. Made in Webflow.</p>
            </div>
        </footer>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.slim.min.js"></script>
    <script src="{{ asset('assets/projects/project_9/js/script.js') }}"></script>
</body>
</html>