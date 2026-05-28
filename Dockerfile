FROM php:8.3-fpm

RUN apt-get update && apt-get install -y \
    git curl libpng-dev libonig-dev libxml2-dev libzip-dev libicu-dev \
    libsqlite3-dev sqlite3 zip unzip nginx supervisor \
 && apt-get clean && rm -rf /var/lib/apt/lists/*

RUN docker-php-ext-install pdo_sqlite mbstring exif pcntl bcmath gd zip intl

COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

WORKDIR /var/www/html

COPY . .

# Install PHP deps (no dev). Skip post-install scripts so artisan calls don't run before .env exists.
RUN composer install --no-interaction --optimize-autoloader --no-dev --no-scripts

# Storage + cache writable
RUN chown -R www-data:www-data /var/www/html \
 && chmod -R 775 /var/www/html/storage /var/www/html/bootstrap/cache \
 && mkdir -p /var/www/html/database \
 && touch /var/www/html/database/database.sqlite \
 && chown www-data:www-data /var/www/html/database/database.sqlite \
 && chmod 664 /var/www/html/database/database.sqlite

# nginx + supervisor
COPY docker/nginx.conf /etc/nginx/sites-available/default
COPY docker/supervisord.conf /etc/supervisor/conf.d/supervisord.conf

EXPOSE 80

CMD ["/usr/bin/supervisord", "-c", "/etc/supervisor/conf.d/supervisord.conf"]
