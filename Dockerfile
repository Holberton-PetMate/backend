# Use an existing PHP image as the base image
FROM php:8.1.0-fpm-alpine

# Set the environment variable for the MySQL root password
ENV MYSQL_ROOT_PASSWORD=root

# Install the required dependencies for MySQL and PHP
RUN apk add --no-cache \
        mariadb \
        mariadb-client \
        && docker-php-ext-install mysqli \
        && docker-php-ext-install pdo_mysql

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

# Start the MySQL service
CMD mysqld
