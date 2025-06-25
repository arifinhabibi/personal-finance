# Gunakan base image PHP + Apache
FROM php:8.2-apache

# Install dependensi system
RUN apt-get update && apt-get install -y \
    git zip unzip curl libzip-dev libonig-dev libpq-dev \
    && docker-php-ext-install pdo pdo_mysql zip

# Install Composer
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

# Set working directory
WORKDIR /var/www/html

# Salin semua file project ke container
COPY . .

# Install dependency Laravel
RUN composer install --no-dev --optimize-autoloader

# Copy default Apache config (opsional)
RUN echo "ServerName localhost" >> /etc/apache2/apache2.conf

# Laravel permissions
RUN chown -R www-data:www-data /var/www/html \
    && chmod -R 755 /var/www/html/storage /var/www/html/bootstrap/cache

# Expose port
EXPOSE 80

# Start Apache
CMD ["apache2-foreground"]
