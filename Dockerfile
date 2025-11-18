FROM richarvey/nginx-php-fpm:3.1.6

COPY . .

# Image config
# ENV SKIP_COMPOSER 1  <-- I REMOVED THIS LINE. It was the cause of your crash.
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

# --- FIX FOR RENDER FREE TIER MEMORY LIMIT ---
# Create a temporary swap file so 'composer install' doesn't run out of RAM
RUN fallocate -l 1G /swapfile \
    && chmod 600 /swapfile \
    && mkswap /swapfile \
    && swapon /swapfile \
    && composer install --no-dev --no-interaction --prefer-dist --optimize-autoloader \
    && swapoff /swapfile \
    && rm /swapfile
# ---------------------------------------------

CMD ["/start.sh"]