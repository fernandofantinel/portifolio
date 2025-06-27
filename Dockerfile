FROM php:8.2-fpm-alpine AS build
WORKDIR /app
COPY . .

RUN find components -name '*.php' \
    | sed "s#^#require_once '/var/www/html/#" \
    | sed 's#$#;\#/' > preload.php

FROM php:8.2-fpm-alpine
WORKDIR /var/www/html
COPY --from=build /app /var/www/html
RUN apk add --no-cache tzdata \
    && pecl install redis \
    && docker-php-ext-enable redis \
    && docker-php-ext-install opcache
COPY ./docker/php/conf.d/opcache.ini /usr/local/etc/php/conf.d/opcache.ini