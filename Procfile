release: php artisan migrate:rollback --force && php artisan migrate --force && php artisan db:seed --force && php artisan cache:clear && php artisan config:cache
web: vendor/bin/heroku-php-apache2 public/
