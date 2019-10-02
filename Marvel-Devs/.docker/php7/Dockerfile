FROM php: 7.3-fpm

EXECUTAR apt-get update \
    && apt-get install -y \
        zlib1g-dev \
        libicu-dev \
        libpq-dev \
        libmcrypt-dev \
        libpng-dev \
        libzip-dev \
        fecho eclair \
        g ++ \
        git \
        libxml2-dev \
    && docker-php-ext-configure intl \
    && docker-php-ext-configure zip --with-libzip \
    && docker-php-ext-install arquivo zip internacional gd opcache pdo_pgsql \
    && apt-get clean \
EXECUTAR curl -sS https://getcomposer.org/installer | php - --install-dir = / usr / local / bin --filename = compositor && chmod + x / usr / local / bin / compositer
