<header class="header header-container">
    <div class="header__body">
        <div class="header__logo">
            <a href="#">
                <img src="img/logo0.png" alt="logo" width="50px">
            </a>
        </div>
        <div class="header__burger">
            <span></span>
        </div>
        <nav class="header__menu">
            <ul class="header__list">
                <li class="header__item">
                    <a href="#" class="header__link">
                        Домой
                    </a>
                </li>
                <li class="header__item">
                    <a href="#portfolio" class="header__link">
                        Портфолио
                    </a>
                </li>
                <li class="header__item">
                    <a href="#contacts" class="header__link">
                        Контакты
                    </a>
                </li>
                @include('includes.auth')
            </ul>
        </nav>
    </div>
</header>
