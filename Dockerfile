# 1. Imagem oficial PHP + Apache
FROM php:8.2-apache

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
COPY . /var/www/html

# 5. Documenta porta exposta
EXPOSE 80

# 6. Comando para iniciar Apache
CMD ["apache2-foreground"]
