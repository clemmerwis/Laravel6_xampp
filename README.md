# Laravel6_xampp
Laravel:
1. laravel new blog

2. Configuration 
    *configure "/.env" & "/config/app.php"
      -Note*.env = no whitespace in values

3. Pretty Urls
    *rename-item "/server.php" to "/index.php", cp "/public/.htaccess" to root "/.htaccess"

4. composer require barryvdh/laravel-debugbar --dev

5. composer update, composer install, php artisan cache:clear, php artisan config:cache

6. npm install, npm run dev

Errors:
1. artisan ansi error = composer require symfony/console:4.3.4
2. Too many characters error =  https://laravel-news.com/laravel-5-4-key-too-long-error