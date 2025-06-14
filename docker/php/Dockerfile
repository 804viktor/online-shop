FROM php:8.1-fpm

RUN apt update && \
    apt install -y libpq-dev && \
    docker-php-ext-install pdo_pgsql pgsql && \
    rm -rf /var/lib/apt/lists/*

