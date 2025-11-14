#!/usr/bin/env bash

# Exit on error
set -o errexit

# Run composer
echo "Running composer..."
composer install --no-dev --no-progress --prefer-dist

# Caching config
echo "Caching config..."
php artisan config:cache

# Caching routes
echo "Caching routes..."
php artisan route:cache

# Run database migrations
echo "Running migrations..."
php artisan migrate --force