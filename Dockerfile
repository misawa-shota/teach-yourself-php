FROM php:8.2-apache

RUN docker-php-ext-install intl pdo_mysql zip bcmath