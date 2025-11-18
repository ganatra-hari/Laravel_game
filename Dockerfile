FROM richarvey/nginx-php-fpm:3.1.6

COPY . .

# Image config
ENV WEBROOT /var/www/html/public
ENV PHP_ERRORS_STDERR 1
ENV RUN_SCRIPTS 1
ENV REAL_IP_HEADER 1

# Laravel config
ENV APP_ENV production
ENV APP_DEBUG false
ENV LOG_CHANNEL stderr

# Allow composer to run as root
ENV COMPOSER_ALLOW_SUPERUSER 1

# 1. Prevent the container from trying to install Composer at runtime (saves memory)
ENV SKIP_COMPOSER 1

# 2. Install Composer dependencies during the BUILD phase instead
RUN composer install --no-dev --no-interaction --prefer-dist --optimize-autoloader

CMD ["/start.sh"]