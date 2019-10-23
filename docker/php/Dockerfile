FROM php:7.1-fpm
LABEL MAINTAINER tm

RUN apt-get update && apt-get install -y libmcrypt-dev libxml2-dev \
  git vim unzip \
  && docker-php-ext-install pdo_mysql mysqli mbstring iconv mcrypt xml \
  && pecl install xdebug \
  && docker-php-ext-enable xdebug \
  && apt-get clean
# install composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
