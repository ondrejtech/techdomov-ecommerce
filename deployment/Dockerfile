FROM php:8.3-fpm

# Instalace systémových balíčků a PHP extensions
RUN apt-get update && apt-get install -y \
    git curl zip unzip libpng-dev libonig-dev libxml2-dev \
    libzip-dev libpq-dev libjpeg-dev libfreetype6-dev \
    nodejs npm \
    && docker-php-ext-install pdo pdo_mysql mbstring exif pcntl bcmath gd zip

# Instalace Composeru
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

# Nastavení pracovního adresáře
WORKDIR /var/www

# Zkopírování aplikace
COPY . .

# Instalace PHP balíčků
RUN composer install 

# Vytvoření práv pro Laravel
RUN chown -R www-data:www-data /var/www/storage /var/www/bootstrap/cache && \
    chmod -R 775 /var/www/storage /var/www/bootstrap/cache

# Exponování portu
EXPOSE 9000

CMD ["php-fpm"]
