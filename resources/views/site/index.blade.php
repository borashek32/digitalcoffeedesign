@extends('layouts.main')

@section('title')DigitalCoffeeeDesign.com @endsection

@section('content')
    <main class="page">
        {{-- promo-block --}}
        <section class="page__main-block main-block" id="home">
            <div class="main-block__image_small">
                <img src="{{ asset('img/main/promo_small.jpg') }}" alt="digitalcoffeedesign.com">
            </div>
            <div class="main-block__container">
                <div class="main-block__body">
                    <div class="main-block__title">
                        <h2>Зуева Наталья</h2>
                        <br>
                        <h1>Digital Coffee Design</h1>
                        <h3>Digital<br>Coffee Design</h3>
                        <h4>Digital<br>Coffee<br>Design</h4>
                    </div>
                    <div class="main-block__desc">
                        <a href="#about" class="main-block__me">
                            <img src="{{ asset('img/main/me.jpg') }}" class="main-block__img" alt="coffee">
                        </a>
                        <div class="main-block__text">
                            <p>fullstack developer portfolio</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        {{-- main project --}}
        @include('site.parts.main-project')
        {{-- portfolio SECTION 1  landings--}}
        @include('site.parts.landings')
        {{-- portfolio SECTION 2 small apps --}}
        @include('site.parts.small-apps')
        {{-- portfolio SECTION 3 blocks --}}
        @include('site.parts.blocks')
        {{-- separate --}}
        <div class="separate">
            <img src="{{ asset('img/main/separate.jpg') }}" alt="separate">
        </div>
        {{-- about me --}}
        @include('site.parts.about')
        {{-- contacts --}}
        @include('site.parts.contacts')
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
