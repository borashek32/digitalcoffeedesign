Digitalcoffeedesign.com - примеры работ по верстке и вообще по вебу

Этот сайт: Laravvel9, Node.js, Webpack, Spatie Laravel permissions, Taikwind css, Jetstream, BrowserSync

1. Клонировать репозиторий `git clone https://github.com/borashek32/republic.git`, `cd republic`
2. `composer install`
3. `npm install`
4. `npm run dev`
5. Переименовать `.env.example` в `.env`, отредактировать файл в соответствии с вашими настройками сервера и бд (у меня MAMP pro, создаю хост на сервере и бд в PhpMyAdmin ручками и заполяю `.env`, для MacOs нужно прописать сокет `DB_SOCKET=/Applications/MAMP/tmp/mysql/mysql.sock`)
6. `php artisan migrate --seed` (бд нужно сидить, потому что так создаются роли и админ)
7. `php artisan storage:link`, `php artisan key:generate`, `php artisan config:cache`
8. Запустить приложение `php artisan serv`. Откроется главная страница с публичными постами, которые видно всем пользователям


