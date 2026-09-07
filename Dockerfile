FROM php:8.2-apache

# Copy root-level PHP entry point(s)
COPY index.php /var/www/html/

# Copy application source
COPY ./SRC/ /var/www/html/SRC/

RUN docker-php-ext-install mysqli
RUN chown -R www-data:www-data /var/www/html

EXPOSE 80
