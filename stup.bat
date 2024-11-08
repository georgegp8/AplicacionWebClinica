@echo on
call composer install
call npm install
call copy .env.example .env
call php artisan key:generate

