#!/bin/bash
# Simpan di hosting, jalankan via SSH

echo "Starting deployment..."
cd ~/public_html

# Backup dulu
tar -czf backup-$(date +%Y%m%d).tar.gz .

# Update code
git reset --hard
git pull origin main

# Install dependencies
composer install --no-dev --optimize-autoloader

# Run migrations (optional)
# php artisan migrate --force

# Clear cache
php artisan optimize:clear
php artisan config:cache
php artisan route:cache
php artisan view:cache

# Fix permissions
chmod 755 storage bootstrap/cache
chmod -R 755 storage

echo "Deployment finished!"
