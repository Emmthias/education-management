FROM php:7.0.6-fpm
RUN rm /etc/apt/sources.list

RUN echo "deb http://archive.debian.org/debian-security jessie/updates main" >> /etc/apt/sources.list.d/jessie.list

RUN echo "deb http://archive.debian.org/debian jessie main" >> /etc/apt/sources.list.d/jessie.list

RUN apt-get update && \
    apt-get install -y --force-yes --no-install-recommends \
        libzip-dev zlib1g-dev zip
RUN docker-php-ext-install mysqli && docker-php-ext-enable mysqli
#RUN pecl install xdebug
#RUN docker-php-ext-enable xdebug

RUN docker-php-ext-install zip && docker-php-ext-enable zip

COPY php/php.ini /usr/local/etc/php/