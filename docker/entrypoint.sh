#!/usr/bin/env bash
# ---------------------------------------------------------------------------
# Runtime entrypoint for the Render Docker deployment.
# Binds Apache to Render's $PORT, prepares Laravel, then serves.
# ---------------------------------------------------------------------------
set -e
cd /var/www/html

# --- Bind Apache to the port Render provides (defaults to 10000) ------------
: "${PORT:=10000}"
sed -ri "s/^Listen 80$/Listen ${PORT}/" /etc/apache2/ports.conf
sed -ri "s/:80>/:${PORT}>/" /etc/apache2/sites-available/000-default.conf

# --- App key: use the injected one, else mint an ephemeral key --------------
# Set APP_KEY in the Render dashboard for a stable key across restarts.
if [ -z "${APP_KEY}" ]; then
    export APP_KEY="$(php artisan key:generate --show)"
    echo "entrypoint: generated ephemeral APP_KEY (set APP_KEY in Render for a stable one)"
fi

# --- Writable dirs + SQLite + storage symlink -------------------------------
mkdir -p storage/framework/sessions storage/framework/views \
         storage/framework/cache/data bootstrap/cache
: "${DB_DATABASE:=/var/www/html/database/database.sqlite}"
# Seed the content DB onto a fresh persistent disk (empty on first mount).
if [ ! -f "${DB_DATABASE}" ] && [ -f /opt/seed-database.sqlite ]; then
    cp /opt/seed-database.sqlite "${DB_DATABASE}"
    echo "entrypoint: seeded ${DB_DATABASE} from image"
fi
[ -f "${DB_DATABASE}" ] || touch "${DB_DATABASE}"

# public/storage may be a dead (Windows) symlink from the repo — refresh it.
rm -f public/storage
php artisan storage:link || true

chown -R www-data:www-data storage bootstrap/cache database || true
chmod -R 775 storage bootstrap/cache || true

# --- Optimize caches (all non-fatal so a bad cache never blocks boot) -------
php artisan config:clear || true
php artisan migrate --force || true
# Idempotent content seeders (safe to run every boot). These upsert specific
# posts whose migrations may already be recorded on the persistent disk, and
# fix records hidden by a future published_at (server UTC vs IST).
php artisan db:seed --class=BookkeepingVsAccountingBlogSeeder --force || true
php artisan config:cache || true
# Route caching is intentionally skipped: the app has pre-existing duplicate
# route names (e.g. br.loan) that make route:cache fail. Uncached routes work
# fine; ensure no stale cache is left behind.
php artisan route:clear || true
php artisan view:cache   || true

echo "entrypoint: starting Apache on port ${PORT}"
exec apache2-foreground
