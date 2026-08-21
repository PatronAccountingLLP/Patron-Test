#!/usr/bin/env bash
#
# Production deploy for patronaccounting.com — Laravel app at /var/www/patron.
#
# Run by .github/workflows/deploy.yml after it resets the working tree to
# origin/main, and safe to run by hand:
#
#     cd /var/www/patron && git pull origin main && bash deploy.sh
#
# Key safety: artisan is run AS the php-fpm user (www-data) and the writable
# dirs are handed back to www-data, so a root-run deploy never leaves cache /
# compiled views that www-data can't read or rewrite — that was the cause of an
# earlier HTTP 500.
set -euo pipefail
cd "$(dirname "$0")"

WEBUSER="www-data"

echo "==> Deploying $(git rev-parse --short HEAD 2>/dev/null || echo unknown)"

# Install PHP deps (production). Non-fatal so a deploy still finishes if composer
# is unavailable on the box.
if command -v composer >/dev/null 2>&1; then
    echo "==> composer install"
    composer install --no-dev --optimize-autoloader --no-interaction || echo "!! composer install skipped/failed (continuing)"
fi

# Hand the writable dirs to the web user (AFTER composer, which may have written
# bootstrap/cache as root).
echo "==> chown storage + bootstrap/cache to ${WEBUSER}"
chown -R "${WEBUSER}:${WEBUSER}" storage bootstrap/cache 2>/dev/null || true

# Refresh caches as the web user so nothing root-owned is created.
# NOTE: deliberately NO `config:cache` — this app has shipped a cached config with
# a wrong absolute path before; clearing keeps config resolving from the live .env.
run_artisan() {
    if [ "$(id -un)" = "${WEBUSER}" ]; then
        php artisan "$@"
    else
        sudo -u "${WEBUSER}" php artisan "$@"
    fi
}
# Apply any pending migrations. --force is required to run in production without a
# prompt. A failing migration MUST fail the deploy (no `|| true`) so a schema change
# can't half-apply silently.
echo "==> migrate"
run_artisan migrate --force

echo "==> refresh caches as ${WEBUSER}"
# A compiled route table left behind by an earlier root-run deploy survives
# `route:clear`: www-data cannot rewrite a root-owned bootstrap/cache/routes-*.php,
# the clear fails, and the `|| true` that used to sit on that line swallowed it. The
# result is a deploy that reports success while every newly added route 404s - files
# land, routes stay frozen. That is what happened to the 71 stock audit glossary URLs:
# their views deployed and their routes never took effect.
#
# So: delete the compiled table outright before clearing, and let a real failure fail
# the deploy rather than hiding it.
rm -f bootstrap/cache/routes-*.php
chown "${WEBUSER}:${WEBUSER}" bootstrap/cache 2>/dev/null || true
run_artisan config:clear || true
run_artisan route:clear
run_artisan view:clear
run_artisan view:cache   || true

# Prove the routes just deployed are resolvable. A route that cannot be listed is a
# route that will 404, and this is a better place to find that out than a live URL.
echo "==> verify routes resolve"
run_artisan route:list --path=glossary >/dev/null

# Publish the accounting-cluster blogs (CMS Post rows) as the web user.
# Both seeders are idempotent (upsert by slug), so this is safe on every deploy.
# Images ship in git under storage/app/public/blog/ and serve via /storage/.
echo "==> seed accounting-cluster blogs as ${WEBUSER}"
run_artisan db:seed --class=BookkeepingVsAccountingBlogSeeder --force || true
run_artisan db:seed --class=AccountingBlogsSeeder --force || true

echo "==> Deploy complete"
