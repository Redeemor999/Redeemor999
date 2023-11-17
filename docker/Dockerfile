FROM php:8.1-fpm-alpine3.18

RUN apk add --update \
    git \
    curl \
    zip \
    unzip

RUN curl -sS http://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

WORKDIR /var/www