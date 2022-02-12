FROM php:7.4-fpm

WORKDIR /var/www/html

RUN apt-get update \
    && apt-get install -y libonig-dev libzip-dev unzip \
    # xdebug install
    && pecl install xdebug \
    && docker-php-ext-enable xdebug

# composer
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

COPY ./app /var/www/html
COPY ./docker/php/php.ini /usr/local/etc/php/php.ini
COPY ./docker/php/xdebug.ini /usr/local/etc/conf.d/xdebug.ini
