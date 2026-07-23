# ---------------------------------------------------------------------------
# Patron Accounting (Laravel 10) — production image for Render.com
# Apache + PHP 8.2, document root -> /public, SQLite baked in.
# ---------------------------------------------------------------------------
FROM php:8.2-apache

# --- System packages + PHP extensions --------------------------------------
RUN apt-get update && apt-get install -y --no-install-recommends \
        git unzip libzip-dev libpng-dev libjpeg-dev libfreetype6-dev \
        libonig-dev libxml2-dev sqlite3 libsqlite3-dev \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install -j"$(nproc)" \
        pdo pdo_mysql pdo_sqlite zip gd mbstring exif bcmath \
    && rm -rf /var/lib/apt/lists/*

# --- Composer --------------------------------------------------------------
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

# --- Apache: serve Laravel's public/ dir and enable rewrites ---------------
ENV APACHE_DOCUMENT_ROOT=/var/www/html/public
RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/sites-available/*.conf \
    && sed -ri -e 's!/var/www/!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/apache2.conf /etc/apache2/conf-available/*.conf \
    && a2enmod rewrite headers

WORKDIR /var/www/html

# --- Production defaults baked into the image ------------------------------
# These apply even if the service was NOT created from render.yaml (a plain
# Docker web service ignores the blueprint's envVars). Any env var set in the
# Render dashboard overrides these, so switching to a real DB later just works.
# APP_KEY is intentionally omitted — the entrypoint mints one if unset.
ENV APP_NAME="Patron Accounting" \
    APP_ENV=production \
    APP_DEBUG=false \
    APP_TIMEZONE=Asia/Kolkata \
    APP_URL=https://patron-test.onrender.com \
    LOG_CHANNEL=stderr \
    LOG_LEVEL=error \
    DB_CONNECTION=sqlite \
    DB_DATABASE=/var/www/html/database/database.sqlite \
    SESSION_DRIVER=file \
    CACHE_DRIVER=file \
    QUEUE_CONNECTION=sync \
    FILESYSTEM_DISK=local \
    BROADCAST_DRIVER=log \
    MAIL_MAILER=log

# --- PHP dependencies (cached layer) ---------------------------------------
COPY composer.json composer.lock ./
RUN composer install --no-dev --no-scripts --no-autoloader --prefer-dist --no-interaction

# --- Application source -----------------------------------------------------
COPY . .

# These dirs are gitignored (empty), so they aren't in the repo — recreate them
# before autoload/artisan run, or package:discover aborts.
RUN mkdir -p bootstrap/cache \
        storage/framework/sessions storage/framework/views \
        storage/framework/cache/data storage/logs

RUN composer dump-autoload --optimize --no-dev --no-interaction

# Keep a seed copy of the content DB outside any mount path, so a fresh
# Render persistent disk (which mounts over database/) can be seeded at boot.
RUN cp -f database/database.sqlite /opt/seed-database.sqlite 2>/dev/null || true

# --- Permissions ------------------------------------------------------------
RUN chown -R www-data:www-data storage bootstrap/cache database \
    && chmod -R 775 storage bootstrap/cache

# --- Runtime entrypoint -----------------------------------------------------
COPY docker/entrypoint.sh /usr/local/bin/entrypoint.sh
RUN sed -i 's/\r$//' /usr/local/bin/entrypoint.sh && chmod +x /usr/local/bin/entrypoint.sh

# Render injects $PORT; the entrypoint rewrites Apache to listen on it.
EXPOSE 10000
CMD ["entrypoint.sh"]
