FROM php:7.1.9-fpm-alpine

COPY database /var/www/database
WORKDIR /var/www
RUN echo -e 'http://dl-cdn.alpinelinux.org/alpine/edge/main\nhttp://dl-cdn.alpinelinux.org/alpine/edge/community\nhttp://dl-cdn.alpinelinux.org/alpine/edge/testing' > /etc/apk/repositories \
    && apk add --no-cache libxml2-dev mysql-client \
    && docker-php-ext-install opcache mbstring pdo_mysql tokenizer xml \
    && curl --silent --show-error https://getcomposer.org/installer | php

COPY composer.lock composer.json package.json yarn.lock /var/www/

RUN php composer.phar install --no-dev --no-scripts && rm composer.phar && yarn

ADD uploads.ini /usr/local/etc/php/conf.d/uploads.ini
COPY . /var/www
RUN chown -R www-data:www-data \
        /var/www/storage \
        /var/www/bootstrap/cache


