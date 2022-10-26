<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('assets/elements/element_8/css/style.css') }}">
    <script src="{{ asset('assets/common/js/gasp/gsap.min.js') }}" defer></script>
    <script src="{{ asset('assets/common/js/gasp/ScrollTrigger.min.js') }}" defer></script>
    <script src="{{ asset('assets/common/js/gasp/ScrollSmoother.min.js') }}" defer></script>
    <script src="{{ asset('assets/elements/element_8/js/script.js') }}" defer></script>
    <title>Parallax Effect</title>
</head>
<body>
    <div class="wrapper">
        <div class="content">
            <header class="header">
                <div class="header__layers layers">
                    <div class="layers__title-block">
                        <h1 class="layers__caption">Welcome to Parallax</h1>
                        <div class="layers__title">Fairy Forest</div>
                    </div>
                    <div class="layers__layer layer__base" style="background-image: url('/img/elements/element_8/layer-base.png')"></div>
                    <div class="layers__layer layer__middle" style="background-image: url('/img/elements/element_8/layer-middle.png')"></div>
                    <div class="layers__layer layer__front" style="background-image: url('/img/elements/element_8/layer-front.png')"></div>
                </div>
            </header>
            <main class="main">
                <article class="main__article article" style="background-image: url('/img/elements/element_8/dungeon.jpg')">
                    <div class="article__content">
                        <h2 class="article__header">To Be Continued...</h2>
                        <p class="article__desc">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Assumenda mollitia sapiente non porro, cupiditate tempore consectetur ex laboriosam repellat, cum cumque totam. Ullam dignissimos temporibus quidem ducimus dolor necessitatibus.</p>
                    </div>
                    <div class="article__copy">© <a href="https://www.digitalcoffeedesign.com/">DigitalCoffeeDesign.com</a></div>
                </article>
            </main>
        </div>
    </div>
</body>
</html>