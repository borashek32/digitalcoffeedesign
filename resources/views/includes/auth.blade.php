@if (Route::has('login'))
    @auth
        <li class="header__item">
            <a href="{{ route('dashboard') }}" class="header__link">
                Личный кабинет
            </a>
        </li>
    @else
        <li class="header__item">
            <a href="{{ route('login') }}" class="header__link">
                Вход
            </a>
        </li>
        <li class="header__item">
            @if (Route::has('register'))
                <a href="{{ route('register') }}" class="header__link">
                    Регистрация
                </a>
            @endif
        </li>
    @endif
@endif
