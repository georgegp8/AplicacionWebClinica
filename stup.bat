@echo on
call composer install
call npm install && npm run dev
call copy .env.example .env
call php artisan key:generate
call php artisan ui bootstrap --auth