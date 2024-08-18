# Use the official PHP image as a base image
FROM php:8.2-apache

# Copy the PHP source code to the container
COPY . /var/www/html/

# Install necessary PHP extensions (if needed)
RUN docker-php-ext-install mysqli

# Expose port 80 to the host
EXPOSE 80
