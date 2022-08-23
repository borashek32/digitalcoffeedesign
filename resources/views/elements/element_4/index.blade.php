<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scale=0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sliders</title>
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link href="http://fonts.cdnfonts.com/css/gilroy-medium" rel="stylesheet">
    <link href="http://fonts.cdnfonts.com/css/gilroy-bold" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/elements/element_4/css/style.css') }}">
</head>
<body>
    <div class="wrapper">
        <main class="main__container">
            <section class="sliders">
                <div class="title__block">
                    <div class="title_block__title title">
                        Slider One
                    </div>
                </div>
                <div class="slider_1">
                    <div class="slider_1__line">
                        <img src="img/elements/element_4/elephant.png" alt="elephant">
                        <img src="img/elements/element_4/gorilla.png" alt="gorilla">
                        <img src="img/elements/element_4/home.png" alt="home">
                        <img src="img/elements/element_4/ice_cream.png" alt="ice_cream">
                    </div>
                </div>
                <button class="slider_1__button_prev">Prev</button>
                <button class="slider_1__button_next">Next</button>
                <div class="title__block">
                    <div class="title_block__title title">
                        Slider Two
                    </div>
                </div>
                <div class="slider_2_wrapper">
                    <div class="prev n">
                        <p>Prev</p>
                    </div>
                    <div class="slider_2">
                        <div class="img current">1</div>
                        <div class="img">2</div>
                        <div class="img">3</div>
                        <div class="img">4</div>
                        <div class="img">5</div>
                    </div>
                    <div class="next n">
                        <p>Next</p>
                    </div>
                </div>
            </section>
        </main>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="{{ asset('assets/elements/element_4/js/script.js') }}"></script>
</body>
</html>