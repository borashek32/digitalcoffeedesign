<section class="page__portfolio portfolio portfolio_section_2" id="contacts">
    <div class="contacts contacts__container">
        <h2 class="title scroll-item">Контакты</h2>
        <h4 class="subtitle scroll-item">Напишите мне письмо или позвоните:)</h4>
        <div class="contacts__row">
            <div class="contacts__column contacts__column_write-me scroll-item">
                <ul id="saveForm_errList"></ul>

                <form action="#" class="contacts__form" method="POST">
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
                <div class="contacts__line scroll-item">
                    Наталья
                </div>
                <div class="contacts__line scroll-item">
                    <p>Телефон:</p>
                    <a href="tel:+79169174630">+7 (916) 917-46-30</a>
                </div>
                <div class="contacts__line scroll-item">
                    <p>Электронная почта:</p>
                    <a href="mailto:borashek@inbox.ru">borashek@inbox.ru</a>
                </div>
            </div>
        </div>
    </div>
</section>