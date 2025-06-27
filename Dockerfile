FROM php:8.1-fpm-alpine AS build

RUN apk add --no-cache tzdata ${PHPIZE_DEPS} \
 && pecl install redis \
 && docker-php-ext-enable redis opcache \
 && apk del ${PHPIZE_DEPS}

WORKDIR /var/www/html
COPY --from=build /app /var/www/html
