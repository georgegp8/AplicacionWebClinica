@echo on
call composer install
call npm install
call copy .env.example .env
call php artisan key:generate
call npm install @vitejs/plugin-vue --save-dev
call npm install vue-the-mask --save
call npm install -D sass-embedded
call php artisan storage:link
call php artisan ui bootstrap --auth
call composer update --with-all-dependencies
call composer require spatie/laravel-permission
call php artisan vendor:publish --provider="Spatie\Permission\PermissionServiceProvider"
call php artisan optimize:clear
call composer require barryvdh/laravel-dompdf
call php artisan vendor:publish --provider="Barryvdh\DomPDF\ServiceProvider"
call php artisan migrate:fresh --seed
call php artisan cache:forget spatie.permission.cache
call php artisan config:clear
call php artisan route:clear
call php artisan view:clear
call npm run dev
