<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('assets/elements/element_6/css/style.css') }}">
    <link href="http://fonts.cdnfonts.com/css/gilroy-medium" rel="stylesheet">
    <link href="http://fonts.cdnfonts.com/css/gilroy-bold" rel="stylesheet">
    <title>Digital Clock</title>
</head>
<body>
    <div class="wrapper">
        <section class="digital">
            <div class="_container">
                <h1 class="digital__title">Digital Clock</h1>
                <div class="digital__clock clock">
                    <div class="clock__item">
                        <span class="clock__time" id="hours"></span>
                        <div class="clock__text-wrapper">
                            <span class="clock__text">Hours</span>
                        </div>
                    </div>
                    <div class="clock__item">
                        <span class="clock__time" id="minutes"></span>
                        <div class="clock__text-wrapper">
                            <span class="clock__text">Minutes</span>
                        </div>
                    </div>
                    <div class="clock__item">
                        <span class="clock__time" id="seconds"></span>
                        <div class="clock__text-wrapper">
                            <span class="clock__text">Seconds</span>
                        </div>
                    </div>
                    <div class="digital__wrapper">
                        <span id="ampm" class="digital__ampm"></span>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <script src="{{ asset('assets/elements/element_6/js/script.js') }}"></script>
</body>
</html>