# Use an official PHP image as the base image
FROM php:8.1.0-fpm

# Install dependencies
RUN apt-get update && apt-get install -y \
    libzip-dev \
    unzip \
    git

# Install PHP extensions
RUN docker-php-ext-install pdo_mysql zip

# Install Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Set the working directory to /app
WORKDIR /app

# Copy the composer.lock and composer.json files to the container
COPY composer.lock composer.json ./

# Install composer dependencies
RUN composer install --no-scripts --no-autoloader

# Copy the rest of the project files to the container
COPY . .

# Generate the autoloader
RUN composer dump-autoload

# Run any pending database migrations
# RUN php artisan migrate

# Set the command to run when the container starts
CMD ["php-fpm"]
