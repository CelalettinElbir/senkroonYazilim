php artisan make:filament-user


docker exec -it $(docker ps -qf name=php-fpm-mailcow) php -r "echo '{BLF-CRYPT}' . password_hash('YeniSifreniz', PASSWORD_BCRYPT)"

