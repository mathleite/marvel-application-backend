FROM php:7.3-fpm

RUN apt-get update \
    && apt-get install -y \
        zlib1g-dev \
        libicu-dev \
        libpq-dev \
        libmcrypt-dev \
        libpng-dev \
        libzip-dev \
        zip \
        g++ \
        git \
        libxml2-dev \
    && docker-php-ext-configure intl \
    && docker-php-ext-configure zip --with-libzip \
    && docker-php-ext-install intl zip gd opcache pdo_pgsql \
    && apt-get clean \
    && rm -rf /var/lib/apt/lists/* /tmp/* /var/tmp/*
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer && chmod +x /usr/local/bin/composer
