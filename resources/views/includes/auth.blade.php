@if (Route::has('login'))
    <div class="header__item">
        <div class="header__menu menu">
            <ul class="menu__list">
                @auth
                    <li class="menu__item">
                        <div>
                            <a href="{{ route('dashboard') }}" class="menu__link">
                                Личный кабинет
                            </a>
                        </div>
                    </li>
                @else
                    <li class="menu__item">
                        <div style="margin-top:-4px">
                            <a href="{{ route('login') }}" class="menu__link">
                                Вход
                            </a>
                        </div>

                        <div>
                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="menu__link">
                                    Регистрация
                                </a>
                            @endif
                        </div>
                    </li>
                @endif
            </ul>
        </div>
    </div>
@endif
