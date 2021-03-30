#!/bin/bash
php artisan migrate:rollback
#
php artisan migrate
#
php artisan db:seed
#
php artisan route:cache
