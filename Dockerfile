FROM php:8.2-apache

# Install required system packages and PHP extensions
RUN apt-get update && apt-get install -y \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    libzip-dev \
    libcurl4-openssl-dev \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install gd curl zip \
    && rm -rf /var/lib/apt/lists/*

# Use PHP's production defaults; application errors are logged by includes/security.php.
RUN cp "$PHP_INI_DIR/php.ini-production" "$PHP_INI_DIR/php.ini"

# Enable required Apache modules
RUN a2enmod rewrite expires headers

# Set the working directory
WORKDIR /var/www/html

# Copy the existing application to the document root
COPY . /var/www/html/

# Ensure appropriate permissions
RUN chown -R www-data:www-data /var/www/html/

# Copy entrypoint script and make it executable
COPY docker-entrypoint.sh /usr/local/bin/
RUN chmod +x /usr/local/bin/docker-entrypoint.sh

# Runtime directories must be writable by Apache for cache, logs, analytics, and uploads.
RUN mkdir -p /var/www/html/cache /var/www/html/logs /var/www/html/data /var/www/html/uploads/chunks /var/www/html/uploads/software \
    && chown -R www-data:www-data /var/www/html/cache /var/www/html/logs /var/www/html/data /var/www/html/uploads

# Use the entrypoint script to dynamically configure the port and start Apache
ENTRYPOINT ["docker-entrypoint.sh"]
CMD ["apache2-foreground"]
