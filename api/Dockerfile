FROM php:8.1-fpm-alpine3.16

RUN apk add -U --no-cache \
    linux-headers \
    autoconf \
    php8-mbstring \
    openssl-dev \
    oniguruma-dev \
    git \
    make \
    g++ \
    bash

RUN docker-php-ext-install \
    opcache \
    mbstring \
    && mv "$PHP_INI_DIR/php.ini-production" "$PHP_INI_DIR/php.ini" \
    && pecl install apcu \
    && docker-php-ext-enable apcu \
    && echo "apc.enable_cli=1" >> "$PHP_INI_DIR/php.ini" \
    && echo "apc.enable=1" >> "$PHP_INI_DIR/php.ini" \
    && pecl install xdebug \
    && docker-php-ext-enable xdebug

COPY --from=composer:latest /usr/bin/composer /usr/local/bin/composer
COPY . /api

WORKDIR /api

RUN composer install -d /api && touch /api/.env

CMD ["/usr/bin/php", "-S", "0.0.0.0:8000"]
