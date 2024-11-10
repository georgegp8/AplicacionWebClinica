@echo on
call composer install
call npm install
call copy .env.example .env
call php artisan key:generate
call npm install @vitejs/plugin-vue --save-dev
call npm install vue-the-mask --save
call npm install -D sass-embedded

