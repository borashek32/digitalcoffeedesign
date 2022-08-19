<header class="header">
    <div class="header__burger">
        <span></span>
    </div>
    <div class="header__nav">
        <nav class="header__menu">
            <ul class="header__left">
                <li class="">
                    <a href="{{ route('personal-blog') }}" class="header__link">
                        <div class="header__li">главная</div>
                    </a>
                </li>
                <li class="header__li header__li_subnav">
                    <div class="header__li_flex">
                        <a href="#" class="header__link header__link_down">мои работы</a>
                        <div class="arrow"></div>
                    </div>
                    <ul class="subnav">
                        @foreach ($works as $item)
                            <li class="subnav__li">
                                <a href="{{ route('personalblog-onework', $item->id) }}">
                                    <p class="subnav__a">{{ $item->title }}</p>
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </li>
                <li class="header__li header__li_subnav">
                    <div class="header__li_flex">
                        <a href="#" class="header__link header__link_down">статьи</a>
                        <div class="arrow"></div>
                    </div>
                    <ul class="subnav">
                        @foreach ($cats as $item)
                            <li class="subnav__li">
                                <a href="{{ route('personalblog-category', $item->id) }}">
                                    <p class="subnav__a">{{ $item->name }}</p>
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </li>
                <li class="">
                    <a href="{{ route('personalblog-about') }}" class="header__link">
                        <div class="header__li" style="padding-top:15px">обо мне</div>
                    </a>
                </li>
                <li class="">
                    <a href="#" class="header__link send-me-letter">
                        <div class="header__li" style="padding-top:15px">написать</div>
                    </a>
                </li>
            </ul>
            <ul class="header__right">
                <li class="header__li header__li_subnav">
                    <div class="header__li_flex">
                        <a href="#" class="header__link header__link_down">admin</a>
                        <div class="arrow"></div>
                    </div>
                    <ul class="subnav">
                        {{-- <li class="subnav__li">
                            <a href="#">
                                <a href="{{ route('personalblog-login') }}">
                                    <p class="subnav__a">Вход</p>
                                </a>
                            </a>
                        </li>
                        <li class="subnav__li">
                            <a href="{{ route('personalblog-registration') }}">
                                <p class="subnav__a">Регистрация</p>
                            </a>
                        </li> --}}
                        <li class="subnav__li">
                            <a href="{{ route('personalblog-profile') }}">
                                <p class="subnav__a">Профиль</p>
                            </a>
                        </li>
                        <li class="subnav__li">
                            <a href="{{ route('personalblog-posts.index') }}">
                                <p class="subnav__a">Посты</p>
                            </a>
                        </li>
                        <li class="subnav__li">
                            <a href="{{ route('personalblog-cats.index') }}">
                                <p class="subnav__a">Категории</p>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
        <div class="header__search">
            <form action="{{ route('personal-blog') }}" method="get">
                <input type="text" name="search" class="header__search-placeholder" placeholder="Поиск по сайту">
            </form>
        </div>
    </div>
</header>