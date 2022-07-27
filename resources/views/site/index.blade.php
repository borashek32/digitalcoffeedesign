@extends('layouts.main')

@section('title')DigitalCoffeeeDesign.com @endsection

@section('content')
    <main class="page">
        {{-- promo-block --}}
        <section class="page__main-block main-block">
            <div class="main-block__bg">
                <div class="main-block__image">
                    <img src="{{ asset('img/main/promo.jpg') }}" alt="digitalcoffeedesign.com">
                </div>
            </div>
            <div class="main-block__body">
                <div class="main-block__title">
                    <h1>Digital <span>Coffee</span><br>Des<span>ign</span></h1>
                </div>
                <div class="main-block__text">
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptatum eum alias laboriosam commodi, facilis laborum impedit itaque velit deserunt delectus molestias, tempora qui natus reiciendis. Sed consectetur aperiam quisquam iusto.</p>
                </div>
            </div>
            <div class="main-block__buttons">
                <a href="#contacts">
                    <button class="main-block_button button button_brown">
                        Напишите мне
                    </button>
                </a>
            </div>
            <div class="main-block__images images">
                <div class="images__item images__item_big-shadow">
                    <img src="{{ asset('img/main/promo-small-1.jpg') }}" class="images__image" alt="coffee">
                </div>
                <a href="#about">
                    <div class="images__item">
                        <img src="{{ asset('img/main/me.jpg') }}" class="images__image" alt="coffee">
                    </div>
                </a>
                <div class="images__item">
                    <img src="{{ asset('img/main/promo-small-3.jpg') }}" class="images__image" alt="coffee">
                </div>
            </div>
        </section>
        {{-- main project --}}
        <section class="page__main-project main-project" id="main-project">
            <div class="main-project__container">
                <a href="https://lemma-auto.ru/" target="_blank">
                    <h2 class="title">lemma-auto.ru</h2>
                </a>
                <h4 class="subtitle">Действующий проет, интернет-магазин автозавпчастей</h4>
                <div class="main-project__row">
                    <div class="main-project__column">
                        <div class="main-project__img item">
                            <a href="https://lemma-auto.ru/" target="_blank">
                                <img src="img/main/la.jpg" alt="lemma-auto.ru">
                            </a>
                        </div>
                    </div>
                    <div class="main-project__column">
                        <div class="main-project__description">
                            <p class="text">
                                Мой последний проект lemma-auto.ru, сайт интернет-магазина. Разрабатывала самостоятельно с нуля, сайт полностью адаптирован под мобильные устройства средствами Bootstrap и самостоятельно мною. На сайте подключено api, есть блог с комментариями и категориями, магазин с отложенными товарами, корзиной и заказом, новостная рассылка и многое другое. Cтэк:
                            </p>
                            <ul>
                                <li>Mysql</li>
                                <li>Laravel 8</li>
                                <li>JavaScript</li>
                                <li>Jquery</li>
                                <li>HTML</li>
                                <li>Bootstrap</li>
                                <li>Tailwind CSS</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        {{-- portfolio SECTION 1 --}}
        <section class="page__portfolio portfolio" id="portfolio">
            <div class="portfolio__container">
                <div class="portfolio__body">
                    <h2 class="portfolio__title title">Portfolio</h2>
                    <h4 class="portfolio__subtitle subtitle">
                        Лэндинги, с импользованием JavaScript, CSS, HTML.<br>Все сайты полностью адаптированы под мобильные устройства.<br>Эта часть портфолио находится в постоянной разработке.
                    </h4>
                    <div class="portfolio__grid">
                        @foreach ($projects as $project)
                        @if($project->category_id == 1)
                            <div class="portfolio__item">
                                <div class="item">
                                    <div class="item__title">
                                        @if($project->link)
                                            <a href="{{ $project->link}}">
                                                {{ $project->title }}
                                            </a>
                                        @endif
                                        @if(empty($project->link))
                                            <a href="{{ route($project->slug) }}">
                                                {{ $project->title }}
                                            </a>
                                        @endif
                                    </div>
                                    {{-- <div class="item__description">
                                        <div class="item__text text">{{ $project->description }}</div>
                                    </div> --}}
                                    <div class="item__img">
                                        @if($project->link)
                                            <a href="{{ $project->link}}">
                                                <img src="{{ $project->img }}" alt="{{ $project->title }}">
                                            </a>
                                        @endif
                                        @if(empty($project->link))
                                            <a href="{{ route($project->slug) }}">
                                                <img src="{{ $project->img }}" alt="{{ $project->title }}">
                                            </a>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        @endif
                        @endforeach
                    </div>
                </div>
            </div>
        </section>
        {{-- portfolio SECTION 2 small apps --}}
        <section class="page__portfolio portfolio portfolio_section_2">
            <div class="portfolio__container">
                <div class="portfolio__body">
                    <h2 class="portfolio__title title">Small Apps</h2>
                    <h4 class="portfolio__subtitle subtitle">
                        Многостраничные сайты, с импользованием JavaScript, CSS, HTML.<br>Все сайты полностью адаптированы под мобильные устройства.<br>Эта часть портфолио находится в постоянной разработке.
                    </h4>
                    <div class="portfolio__grid">
                        @foreach ($projects as $project)
                        @if($project->category_id == 4)
                            <div class="portfolio__item">
                                <div class="item">
                                    <div class="item__title">
                                        @if($project->link)
                                            <a href="{{ $project->link}}">
                                                {{ $project->title }}
                                            </a>
                                        @endif
                                        @if(empty($project->link))
                                            <a href="{{ route($project->slug) }}">
                                                {{ $project->title }}
                                            </a>
                                        @endif
                                    </div>
                                    <div class="item__img">
                                        @if($project->link)
                                            <a href="{{ $project->link}}">
                                                <img src="{{ $project->img }}" alt="{{ $project->title }}">
                                            </a>
                                        @endif
                                        @if(empty($project->link))
                                            <a href="{{ route($project->slug) }}">
                                                <img src="{{ $project->img }}" alt="{{ $project->title }}">
                                            </a>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        @endif
                        @endforeach
                    </div>
                </div>
            </div>
        </section>
        {{-- portfolio SECTION 3 blocks --}}
        <section class="page__portfolio portfolio portfolio_section_2">
            <div class="portfolio__container">
                <div class="portfolio__body">
                    <h2 class="portfolio__title title">Blocks</h2>
                    <h4 class="portfolio__subtitle subtitle">
                        Элементы, без которых не обходится ни один сайт.<br>Сделаны с использованием JavaScript, CSS, HTML.<br>Все элементы адаптированы под мобильные устройства.<br>Эта часть портфолио находится в постоянной разработке.
                    </h4>
                    <div class="portfolio__grid">
                        @foreach ($projects as $project)
                        @if($project->category_id == 3)
                            <div class="portfolio__item portfolio__grid_section_2">
                                <div class="item">
                                    <div>
                                        <div class="item__title item__title_section_2">
                                            @if($project->link)
                                                <a href="{{ $project->link}}">
                                                    {{ $project->title }}
                                                </a>
                                            @endif
                                            @if(empty($project->link))
                                                <a href="{{ route($project->slug) }}">
                                                    {{ $project->title }}
                                                </a>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="item__description item__description_section_2">
                                        <div class="item__text text">{!! $project->description !!}</div>
                                    </div>
                                    <div class="item__img">
                                        @if($project->link)
                                            <a href="{{ $project->link}}">
                                                <img src="{{ $project->img }}" alt="{{ $project->title }}">
                                            </a>
                                        @endif
                                        @if(empty($project->link))
                                            <a href="{{ route($project->slug) }}">
                                                <img src="{{ $project->img }}" alt="{{ $project->title }}">
                                            </a>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        @endif
                        @endforeach
                    </div>
                </div>
            </div>
        </section>
        {{-- separate --}}
        <div class="separate">
            <img src="{{ asset('img/main/separate.jpg') }}" alt="separate">
        </div>
        {{-- about me --}}
        <section class="page__portfolio portfolio portfolio_section_2">
            <div class="portfolio__container">
                <div class="portfolio__body">
                    <h2 class="portfolio__title title">About me</h2>
                    <h4 class="portfolio__subtitle subtitle">Немножко обо мне, как о fullstack разработчике</h4>
                </div>
            </div>
        </section>
        {{-- contacts --}}
        <section class="page__contacts" id="contacts">
            <div class="contacts contacts__container">
                <h2 class="title">Contacts</h2>
                <h4 class="subtitle">Напишите мне письмо или позвоните:)</h4>
                <div class="contacts__row">
                    <div class="contacts__column contacts__column_write-me">
                        <ul id="saveForm_errList"></ul>

                        <form action="{{ route('message') }}" class="contacts__form" method="POST">
                            @csrf
                            <label for="" class="contacts__label">Ваше имя</label>
                            <input type="text" name="name" id="name" class="contacts__input name" placeholder="Введите ваше имя">
                            <label for="" class="contacts__label">Ваш email</label>
                            <input type="email" name="email" id="email" class="contacts__input email" placeholder="Введите ваш электронный адрес">
                            <label for="" class="contacts__label">Ваше сообщение</label>
                            <textarea name="message" id="message" cols="1" rows="3" class="contacts__textarea contacts__input message"></textarea>
                            <button type="submit" class="contacts_button button button_border send-message">Отправить</button>
                        </form>
                    </div>
                    <div class="contacts__column contacts__column_my-contacts">
                        <div class="contacts__line">
                            Наталья
                        </div>
                        <div class="contacts__line">
                            <p>Телефон:</p>
                            <a href="tel:+79169174630">+7 (916) 917-46-30</a>
                        </div>
                        <div class="contacts__line">
                            <p>Электронная почта:</p>
                            <a href="mailto:borashek@inbox.ru">borashek@inbox.ru</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection

@section('scripts')
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        $(document).ready(function() {
            $(document).on("click", ".send-message", function (e) {
            e.preventDefault();

            var data = {
                'name': $('.name').val(),
                'email': $('.email').val(),
                'message': $('.message').val()
            }

            $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $.ajax({
                type: "POST",
                url: "{{ route('message') }}",
                data: data,
                dataType: "json",
                success: function (response) {
                    if(response.status == 200) {
                        Swal.fire({
                            icon: 'success',
                            title: 'Ok',
                            text: 'Ваше сообщение успешно отправлено'
                        })
                        $('#name').val('')
                        $('#email').val('')
                        $('#message').val('')
                    } else {
                            Swal.fire({
                            icon: 'error',
                            title: 'Oops...',
                            text: 'Что-то пошло не так! Попробуйте позже'
                        })
                    }
                },
                error: function(response) {
                        Swal.fire({
                            icon: 'error',
                            title: 'Oops...',
                            text: 'Что-то пошло не так! Проверте правильно ли заполнены поля формы'
                        })
                    }
                });
            });
        });
    </script>
@endsection
