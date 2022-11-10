FROM php:8.1.0-fpm

RUN mkdir -p /var/www/html

RUN curl -sS https://getcomposer.org/installer | php -- \
        --install-dir=/usr/local/bin --filename=composer

RUN apt-get update && \
    apt-get upgrade -y && \
    apt-get install -y git

RUN apt-get install zip unzip
