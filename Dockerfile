# Use the official PHP image as a base image
FROM php:8.2-apache

# Copy only the application source into the web root
COPY ./SRC/ /var/www/html/

# Install necessary PHP extensions
RUN docker-php-ext-install mysqli

# Ensure Apache's user owns the app files
RUN chown -R www-data:www-data /var/www/html

# Expose port 80 to the host
EXPOSE 80
