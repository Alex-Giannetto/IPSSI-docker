FROM php:7.1.2-apache 
RUN useradd -ms /bin/bash alexandreg
RUN apt-get update \
 && apt-get install -y git zlib1g-dev \
 && docker-php-ext-install pdo pdo_mysql zip

