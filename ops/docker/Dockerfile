FROM php:7.3.4-apache-stretch

LABEL maintainer Bricx Carasco <bricxraincarasco21@gmail.com>

WORKDIR /var/www/html

RUN apt-get update && apt-get install -y \
    build-essential \
    mysql-client \
    libzip-dev  \
    locales \
    zip \
    vim \
    unzip \
    git \
    curl

RUN apt-get autoremove -y && \
    apt-get clean && rm -rf /var/lib/apt/lists/*

RUN docker-php-ext-install pdo_mysql mbstring zip exif pcntl bcmath

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

RUN a2enmod rewrite && \
    a2enmod headers && \
    a2enmod proxy && \
    a2enmod proxy_http

RUN /bin/cp -f /usr/share/zoneinfo/Asia/Tokyo /etc/localtime

EXPOSE 80 443

