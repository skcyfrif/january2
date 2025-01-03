# Use a base PHP image with Composer installed
FROM php:8.1-cli

# Set the working directory
WORKDIR /app

# Copy composer.json and composer.lock first (to leverage caching)
COPY app/composer.* ./

# Install Composer dependencies
RUN php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');" && \
    php composer-setup.php --install-dir=/usr/local/bin --filename=composer && \
    rm composer-setup.php && \
    composer install

# Copy the rest of the application code
COPY app/ .

# Expose the port (if your PHP app uses a specific port, like with a built-in server)
EXPOSE 8000

# Start the PHP development server (replace with your app's start command)
CMD ["php", "-S", "0.0.0.0:8000", "-t", "public"]
