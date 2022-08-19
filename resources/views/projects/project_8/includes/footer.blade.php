<footer class="footer">
    <div class="footer__grid">
        <div class="footer__socials socials">
            <div class="socials__list">
                <ul>
                    <li>
                        <a href="#" class="socials__link opacity">
                            <img src="{{ asset('img/projects/project_8/ig.svg') }}" alt="ig">
                        </a>
                    </li>
                    <li>
                        <a href="#" class="socials__link opacity">
                            <img src="{{ asset('img/projects/project_8/tw.svg') }}" alt="tw">
                        </a>
                    </li>
                    <li>
                        <a href="#" class="socials__link opacity">
                            <img src="{{ asset('img/projects/project_8/fb.svg') }}" alt="fb">
                        </a>
                    </li>
                    <li>
                        <a href="#" class="socials__link opacity">
                            <img src="{{ asset('img/projects/project_8/in.svg') }}" alt="in">
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <form action="#" class="footer__form form">
            <div class="form__row">
                <p>sign up<br>for new new</p>
                <div class="form__div">
                    <input type="email" placeholder="YOUR EMAIL">
                    <button class="opacity">SUBMIT</button>
                </div>
            </div>
        </form>
        <div class="footer__footer-logo footer-logo">
            <div class="footer-logo__rights">
                <img src="{{ asset('img/projects/project_8/logo.png') }}" class="opacity footer-logo__logo-img" width="50px" alt="logo">
                <p class="footer-logo__reserved">&copy; All rights reserved <?= date('Y') ?></p>
            </div>
        </div>
        <article class="footer__sidebar sidebar">
            <div class="common common__juicy">
                <h2 class="common__title common__title_juicy">
                    now try out our
                    <span>jui-<wbr>cy</span>
                </h2>
                <div class="common__desc common__desc_juicy">
                    <div>Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque quam sapiente sed!</div>
                    <button class="btn btn_rounded">more</button>
                </div>
            </div>
        </article>
    </div>
</footer>