command: composer install

copy .env.example > .env

DB_DATABASE=bintangpelajar
DB_USERNAME=root
DB_PASSWORD=

command: php artisan key:generate

command npm install