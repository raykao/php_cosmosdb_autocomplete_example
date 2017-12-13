FROM rk-php-base:latest

RUN pecl install mongodb
RUN docker-php-ext-enable mongodb
COPY src/ /var/www/html/
WORKDIR /var/www/html/
RUN php composer.phar install