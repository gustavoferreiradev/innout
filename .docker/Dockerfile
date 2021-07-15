FROM php:7.4-apache

COPY . /var/www/html
COPY .docker/vhost.conf /etc/apache2/sites-available/000-default.conf

WORKDIR /var/www/html

RUN docker-php-ext-install mysqli pdo pdo_mysql bcmath \
    && chown -R www-data:www-data /var/www/html \
    && a2enmod rewrite && service apache2 restart
RUN apt-get update && \
    apt-get install -y locales locales-all \
    && update-locale LANG=pt_BR.UTF-8

