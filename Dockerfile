FROM php:7.4-apache

LABEL maintainer="Katie-Jane Price"

RUN docker-php-ext-install pdo_mysql
 
#apache Configuration
COPY docker/apache/vhost.conf /etc/apache2/sites-available/000-default.conf

#PHP Configuration
COPY docker/php/php.ini /usr/local/etc/php/php.ini 

COPY app /srv/app

WORKDIR /srv/app