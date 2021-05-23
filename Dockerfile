FROM php:7.4.6-fpm

RUN apt-get update \
    && docker-php-ext-install pdo_mysql