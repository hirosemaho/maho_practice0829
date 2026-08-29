FROM php:8.2-fpm

RUN apt-get update && apt-get install -y --no-install-recommends \
        libpng-dev libjpeg-dev libfreetype6-dev zip unzip git curl default-mysql-client \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install pdo_mysql mysqli gd \
    && rm -rf /var/lib/apt/lists/*

WORKDIR /var/www/html

COPY src/ /var/www/html/
COPY docker/php/php.ini /usr/local/etc/php/conf.d/custom.ini
