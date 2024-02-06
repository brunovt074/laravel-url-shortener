FROM php:8.3.2-apache

RUN apt-get update && \
    apt-get install -y libzip-dev zip && \
    docker-php-ext-install pdo_mysql zip

COPY . /var/www/html

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
RUN cd /var/www/html && \
    composer install --optimize-autoloader --no-dev \
    php artisan migrate --force

EXPOSE 8000

ENV APP_ENV=production
ENV APP_DEBUG=false