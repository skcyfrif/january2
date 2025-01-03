# Use PHP with Apache as the base image
FROM php:7.4-apache

# Install necessary PHP extensions and dependencies for CakePHP
RUN apt-get update && apt-get install -y \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    libicu-dev \
    zip \
    unzip \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-configure intl \
    && docker-php-ext-install gd pdo pdo_mysql mysqli intl \
    && apt-get clean

# Enable Apache rewrite module (needed for CakePHP routing)
RUN a2enmod rewrite

# Set the working directory to the web root of CakePHP
WORKDIR /var/www/html

# Copy the entire CakePHP project into the container
COPY ./ /var/www/html/

# Set appropriate permissions
RUN chown -R www-data:www-data /var/www/html/
RUN chmod -R 755 /var/www/html/

# Install Composer (specific version)
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Expose port 80 for web access
EXPOSE 80

# Run Apache in the foreground
CMD ["apache2-foreground"]
