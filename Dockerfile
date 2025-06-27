# 1. Imagem oficial PHP + Apache
FROM php:8.1-fpm-alpine

# 2. Instala extensões extras
RUN apt-get update && \
    apt-get install -y libpq-dev libzip-dev && \
    docker-php-ext-install pdo pdo_pgsql zip && \
    docker-php-source delete

# 3. Configurações do Apache (mod_rewrite)
COPY ./docker/apache/000-default.conf /etc/apache2/sites-available/000-default.conf

RUN a2enmod rewrite

# 4. Ajusta diretório de trabalho e copia código
WORKDIR /var/www/html
COPY --from=build /app /var/www/html
