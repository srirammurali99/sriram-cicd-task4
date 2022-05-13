FROM php:8.0-apache
#RUN apt-get update && apt-get upgrade -y
RUN docker-php-ext-install mysqli
WORKDIR /var/www/html
COPY index.php index.php
EXPOSE 80
