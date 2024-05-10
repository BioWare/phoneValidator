FROM php:7.4-fpm

# Установка необходимых расширений PHP
RUN apt-get update && apt-get install -y \
    libfreetype6-dev \
    libjpeg62-turbo-dev \
    libpng-dev \
    libxml2-dev \
    libzip-dev \
    unzip \
    git \
    zip

RUN docker-php-ext-install pdo_mysql gd xml zip

# Копирование composer в контейнер и установка зависимостей
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

