FROM php:8.1-apache

RUN apt-get update && apt-get install -y \
    libonig-dev \
    && docker-php-ext-install pdo mbstring

COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

WORKDIR /var/www/html

COPY . .

RUN composer install

EXPOSE 80

