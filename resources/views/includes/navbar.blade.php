<header class="header">
    <div class="header__container _container">
        <div class="header__row">
            <a href="#" class="header__link">
                <img src="{{ asset('img/logo0.png') }}" alt="logo" class="header__logo">
            </a>
            <div class="header__item">
                <nav class="header__menu menu">
                    <ul class="menu__list">
                        <li class="menu__item">
                            <a href="#" class="menu__link">
                                Домой
                            </a>
                        </li>
                        <li class="menu__item">
                            <a href="#" class="menu__link">
                                Портфолио
                            </a>
                        </li>
                        <li class="menu__item">
                            <a href="#" class="menu__link">
                                Обо мне
                            </a>
                        </li>
                        <li class="menu__item">
                            <a href="#" class="menu__link">
                                Контакты
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
            @include('includes.auth')
            <div class="header__burger">
                <span></span>
            </div>
        </div>
    </div>
</header>
