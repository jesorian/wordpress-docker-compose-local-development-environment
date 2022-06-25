FROM php:7.4-fpm-alpine

# handles the connection of the PHP container to the MYSQL container so they can be network together
RUN docker-php-ext-install mysqli pdo pdo_mysql && docker-php-ext-enable pdo_mysql