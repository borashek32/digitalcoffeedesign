<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scale=0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Calm</title>
    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
  />
    {{-- <link rel="stylesheet" href="{{ asset('assets/common/css/animate.css') }}"> --}}
    <link rel="stylesheet" href="{{ asset('assets/projects/project_10/css/css.css') }}">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
</head>
<body>
    <div class="wrapper">
        <header class="header">
            <div class="_container">
                <div class="header__body">
                    <div class="header__logo">
                        <a href="#">
                            <img src="{{ asset('/img/projects/project_10/logo.svg') }}" alt="logo" width="50px">
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
                                <a href="#archive" class="header__link">Archive</a>
                            </li>
                            <li>
                                <a href="#about" class="header__link">About</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </header>
        <main class="main">
            <div class="main__promo promo anim-js-down-down" id="main">
                <div class="container">
                    <div class="promo__logo ">
                        <a href="#">
                            <img src="{{ asset('/img/projects/project_10/logo.svg') }}" alt="logo" width="50px">
                        </a>
                    </div>
                    <div class="promo__description ">
                        <p>
                            Welcome to Calm – a lifestyle blog about<br>minimalism, technology, design & travel.
                        </p>
                    </div>
                </div>
            </div>
            <div class="main__grid grid" id="about">
                <div class="container">
                    <div class="grid__1">
                        <div class="grid__item item item__travel anim-js-down">
                            <img src="{{ asset('img/projects/project_10/img1.jpg') }}" alt="travel" class="item__img">
                            <div class="item__flex">
                                <h3 class="item__title">travel</h3>
                                <h2 class="item__subtitle">Travel spots in Iceland</h2>
                                <p class="item__description">
                                    Delectus sint nisi ut recusandae molestiae. Qui iure accusantium esse temporibus et. Aut atque vel labore officiis a dolor et. Molestiae dolor quo eius. Perferendis error eveniet sit quia occaecati excepturi nisi prod.
                                </p>
                                <p class="item__date">November 24, 2021</p>
                            </div>
                        </div>
                        <div class="grid__item item item__climb anim-js-down">
                            <img src="{{ asset('img/projects/project_10/img2.jpg') }}" alt="climb" class="item__img">
                            <div class="item__flex">
                                <h3 class="item__title">Exercise</h3>
                                <p class="item__description">
                                    Climbing as exercise
                                </p>
                                <p class="item__date">November 24, 2021</p>
                            </div>
                        </div>
                        <div class="grid__item item item__photo anim-js-down">
                            <img src="{{ asset('img/projects/project_10/img3.jpg') }}" alt="photo" class="item__img">
                            <div class="item__flex">
                                <h3 class="item__title">tech</h3>
                                <p class="item__description">
                                    The move to mirrorless cameras
                                </p>
                                <p class="item__date">November 24, 2021</p>
                            </div>
                        </div>
                    </div>
                    <div class="grid__2">
                        <div class="grid__item item item__helicopter anim-js-down">
                            <img src="{{ asset('img/projects/project_10/img4.jpg') }}" alt="travel" class="item__img">
                            <div class="item__flex">
                                <h3 class="item__title">tech</h3>
                                <p class="item__description">
                                    Drone photography on a space budget
                                </p>
                                <p class="item__date">November 24, 2021</p>
                            </div>
                        </div>
                        <div class="grid__item item item__ppl anim-js-down">
                            <img src="{{ asset('img/projects/project_10/img5.jpg') }}" alt="travel" class="item__img">
                            <div class="item__flex">
                                <h3 class="item__title">tutorial</h3>
                                <p class="item__description">
                                    How to make the perfect cup of coffee
                                </p>
                                <p class="item__date">November 24, 2021</p>
                            </div>
                        </div>
                    </div>
                    <div class="grid__3">
                        <div class="grid__item item item__pen anim-js-down">
                            <img src="{{ asset('img/projects/project_10/img6.jpg') }}" alt="review" class="item__img">
                            <div class="item__flex">
                                <h3 class="item__title">review</h3>
                                <p class="item__description">
                                    The best pen I've ever used
                                </p>
                                <p class="item__date">November 24, 2021</p>
                            </div>
                        </div>
                        <div class="grid__item item item__man anim-js-down">
                            <img src="{{ asset('img/projects/project_10/img7.jpg') }}" alt="review" class="item__img">
                            <div class="item__flex">
                                <h3 class="item__title">review</h3>
                                <p class="item__description">
                                    The best pen I've ever used
                                </p>
                                <p class="item__date">November 24, 2021</p>
                            </div>
                        </div>
                        <div class="grid__item item item__tv anim-js-down">
                            <img src="{{ asset('img/projects/project_10/img8.jpg') }}" alt="review" class="item__img">
                            <div class="item__flex">
                                <h3 class="item__title">review</h3>
                                <p class="item__description">
                                    Desk accessories to keep you organized
                                </p>
                                <p class="item__date">November 24, 2021</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="main__know know">
                <div class="container">
                    <div class="know__flex">
                        <div class="know__column">
                            <h4 class="know__title">Stay in the know.</h4>
                            <p class="know__text">
                                Sign-up to my newsletter to get an update whenever I post a new article. I try to be very mindful of not spamming my subscribers.
                            </p>
                        </div>
                        <div class="know__column">
                            <form action="#" class="know__form">
                                <div>
                                    <label for="name" class="know__label">Name</label>
                                    <input type="text" name="name" class="know__input">
                                </div>
                                <div>
                                    <label for="email" class="know__label">Email</label>
                                    <input type="email" name="email" class="know__input">
                                </div>
                                <button class="know__button">Send</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="main__blog blog" id="archive">
                <div class="container">
                    <div class="blog__post post">
                        <img src="{{ asset('img/projects/project_10/img1.jpg') }}" alt="travel" class="post__img">
                        <div>
                            <div class="post__title">Travel spots in Iceland</div>
                            <div class="post__description">
                                Delectus sint nisi ut recusandae molestiae. Qui iure accusantium esse temporibus et. Aut atque vel labore officiis a dolor et. Molestiae dolor quo eius. Perferendis error eveniet sit quia occaecati excepturi nisi prod.
                            </div>
                            <div class="item__date">November 24, 2021</div>
                        </div>
                    </div>
                    <div class="blog__post post">
                        <img src="{{ asset('img/projects/project_10/img2.jpg') }}" alt="travel" class="post__img">
                        <div>
                            <div class="post__title">Climbing as exercise</div>
                            <div class="post__description">
                                Consequuntur voluptas quis dicta expedita in minus velit impedit deserunt. Quasi sit similique nemo praesentium excepturi commodi suscipit placeat. Incidunt libero necessitatibus. Commodi modi placeat. Sit et delenit.
                            </div>
                            <div class="item__date">November 24, 2021</div>
                        </div>
                    </div>
                    <div class="blog__post post">
                        <div>
                            <div class="post__title">Meditation apps I use</div>
                            <div class="post__description">
                                Sit quis quaerat expedita aut sed error facilis odit similique. Saepe culpa aut fuga aut esse quaerat. Vero vero facere perferendis d
                            </div>
                            <div class="item__date">November 24, 2021</div>
                        </div>
                    </div>
                    <div class="blog__post post">
                        <div>
                            <div class="post__title">How much stuff do you actually need?</div>
                            <div class="post__description">
                                Veritatis perspiciatis est dolores adipisci ut sed. Culpa eligendi sunt cupiditate aut est. Recusandae pariatur qui quo animi exercitationem sint voluptas tenetur ut. Nihil
                            </div>
                            <div class="item__date">November 24, 2021</div>
                        </div>
                    </div>
                    <div class="blog__post post">
                        <img src="{{ asset('img/projects/project_10/img3.jpg') }}" alt="travel" class="post__img">
                        <div>
                            <div class="post__title">Drone photography on a space budget</div>
                            <div class="post__description">
                                Aut quia voluptatem rem assumenda dolorem eos nostrum. Voluptatem facere ipsum aut maxime ab. Ea et voluptatum maiores odit voluptatib
                            </div>
                            <div class="item__date">November 24, 2021</div>
                        </div>
                    </div>
                    <div class="blog__post post">
                        <img src="{{ asset('img/projects/project_10/img4.jpg') }}" alt="travel" class="post__img">
                        <div>
                            <div class="post__title">Drone photography on a space budget</div>
                            <div class="post__description">
                                Aut quia voluptatem rem assumenda dolorem eos nostrum. Voluptatem facere ipsum aut maxime ab. Ea et voluptatum maiores odit voluptatib
                            </div>
                            <div class="item__date">November 24, 2021</div>
                        </div>
                    </div>
                    <div class="blog__post post">
                        <img src="{{ asset('img/projects/project_10/img5.jpg') }}" alt="travel" class="post__img">
                        <div>
                            <div class="post__title">How to make the perfect cup of coffee</div>
                            <div class="post__description">
                                Aut nihil suscipit voluptas libero deleniti similique maxime. Ea rerum illo assumenda delectus ipsum dolores nam. Reiciendis
                            </div>
                            <div class="item__date">November 24, 2021</div>
                        </div>
                    </div>
                    <div class="blog__post post">
                        <div>
                            <div class="post__title">Decision fatigue & minimalism</div>
                            <div class="post__description">
                                Accusamus nihil qui iste consequatur iste labore maiores nobis natus. Maiores harum accusantium. Hic sunt aut vel et hic. Et quas necessitatibus. Iusto est sit. Rerum id ut. Id dolore voluptatem eum perferendis vitae.
                            </div>
                            <div class="item__date">November 24, 2021</div>
                        </div>
                    </div>
                    <div class="blog__post post">
                        <img src="{{ asset('img/projects/project_10/img6.jpg') }}" alt="travel" class="post__img">
                        <div>
                            <div class="post__title">The best pen I've ever used</div>
                            <div class="post__description">
                                Mollitia voluptatum cum consequatur possimus ut veritatis quod non sint. Voluptatibus fuga ut magnam culpa quasi. Odio commodi modi vero dolore. Esse aut et distinctio. Voluptatem corrupti quasi. Ut omnis reprehenderi
                            </div>
                            <div class="item__date">November 24, 2021</div>
                        </div>
                    </div>
                    <div class="blog__post post">
                        <div>
                            <div class="post__title">Best travel tripods</div>
                            <div class="post__description">
                                Sequi asperiores culpa nihil. Qui placeat ut eos molestiae arc
                            </div>
                            <div class="item__date">November 24, 2021</div>
                        </div>
                    </div>
                    <div class="blog__post post">
                        <div>
                            <div class="post__title">Decision fatigue & minimalism</div>
                            <div class="post__description">
                                Accusamus nihil qui iste consequatur iste labore maiores nobis natus. Maiores harum accusantium. Hic sunt aut vel et hic. Et quas necessitatibus. Iusto est sit. Rerum id ut. Id dolore voluptatem eum perferendis vitae.
                            </div>
                            <div class="item__date">November 24, 2021</div>
                        </div>
                    </div>
                    <div class="blog__post post">
                        <div>
                            <div class="post__title">EDC must-haves</div>
                            <div class="post__description">
                                Nisi ad perferendis quia modi a. Magni ut aut voluptatum. Dolorem vero molestiae itaque. Qui itaque itaque. Nihil autem perspiciatis sed similique dolor excepturi harum. Perspiciatis suscipit unde aliq
                            </div>
                            <div class="item__date">November 24, 2021</div>
                        </div>
                    </div>
                    <div class="blog__post post">
                        <div>
                            <div class="post__title">Journals & how to use them</div>
                            <div class="post__description">
                                Assumenda aut eos et consequatur sint vitae fugit. Nulla voluptatibus et voluptatum sed.
                            </div>
                            <div class="item__date">November 24, 2021</div>
                        </div>
                    </div>
                    <div class="blog__post post">
                        <div>
                            <div class="post__title">Minimalism in the workplace?</div>
                            <div class="post__description">
                                Nostrum quia sapiente natus consequatur. Dicta debitis aut minus consectetur est officiis aut. Atque itaque quia asperiores odit in tempore nisi qui. Sit ut aut ipsa v
                            </div>
                            <div class="item__date">November 24, 2021</div>
                        </div>
                    </div>
                    <div class="blog__post post">
                        <div>
                            <div class="post__title">How I structure my work</div>
                            <div class="post__description">
                                Inventore alias consequatur accusantium ut explicabo aut. Et fuga voluptatem est reiciendis officia qui qui. Dolorem est sequi numquam ratione cum sequi porro. Sint debitis delectus nihil placeat dolor non laborum iusto
                            </div>
                            <div class="item__date">November 24, 2021</div>
                        </div>
                    </div>
                    <div class="blog__post post">
                        <img src="{{ asset('img/projects/project_10/img7.jpg') }}" alt="travel" class="post__img">
                        <div>
                            <div class="post__title">Tech-focused travel backpack</div>
                            <div class="post__description">
                                Delectus et iusto perspiciatis impedit dolor eligendi sit. Voluptatem excepturi temporibus fugit molestiae. Nesciunt sequi molestiae. Molestiae recusandae sed esse illo nobis. Qui aut porro id. Tempore sed
                            </div>
                            <div class="item__date">November 24, 2021</div>
                        </div>
                    </div>
                    <a href="#" class="blog__more">
                        <div class="blog__flex">
                            <p class="blog__archive">View archive</p>
                            <img src="{{ asset('img/projects/project_10/arrow.svg') }}" alt="arrow">
                        </div>
                    </a>
                </div>
            </div>
        </main>
        <footer class="footer">
            <div class="container">
                <a href="#">
                    <img src="{{ asset('/img/projects/project_10/logo.svg') }}" alt="logo" class="footer__logo">
                </a>
                <p class="footer__text">
                    A lifestyle blog about minimalism, technology, design & travel. Powered by Webflow
                </p>
                <ul class="footer__list">
                    <li class="footer__link">
                        <a href="#">Start</a>
                    </li>
                    <li class="footer__link">
                        <a href="#">Archive</a>
                    </li>
                </ul>
                <ul class="footer__list">
                    <li class="footer__link">
                        <a href="#">Instructions</a>
                    </li>
                    <li class="footer__link">
                        <a href="#">Style guide</a>
                    </li>
                    <li class="footer__link">
                        <a href="#">Licenses</a>
                    </li>
                    <li class="footer__link">
                        <a href="#">Changelog</a>
                    </li>
                </ul>
            </div>
        </footer>
    </div>
    <script src="{{ asset('assets/common/js/jquery.js') }}"></script>
    <script src="{{ asset('assets/common/js/wow.min.js') }}"></script>
    <script src="{{ asset('assets/projects/project_10/js/script.js') }}"></script>
</body>
</html>