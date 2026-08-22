#!/usr/bin/env bash
#
# Pre-deploy validation — catches the things that take THIS Laravel site down:
#   * PHP parse / syntax errors
#   * Blade template syntax errors and missing @include targets
#
# It is run by CI before every deploy (deploy is gated on this passing), and is
# safe to run by hand on any box that has PHP + the composer deps installed:
#
#     bash bin/validate.sh
#
# It only reads/compiles code — it never serves traffic, touches the DB, or deploys.
set -euo pipefail
cd "$(dirname "$0")/.."

echo "==> PHP syntax check (php -l) on all source files"
find app config database routes resources -name '*.php' -print0 \
  | xargs -0 -n1 -P4 php -l > /dev/null
echo "    OK"

echo "==> Compiling every Blade template (catches view syntax / missing includes)"
php artisan view:clear >/dev/null 2>&1 || true
php artisan view:cache
echo "    OK"

# view:cache only TRANSLATES Blade to PHP — it never runs the result, so a template that
# compiles to broken PHP passes it. That is not theoretical: `disabled@endif` (a directive
# glued to a word char, which Blade does not recognise) compiled to an unclosed if() and
# 500'd 200 pages while CI stayed green. Lint what the compiler actually produced.
echo "==> php -l on every COMPILED view (catches Blade that compiles to invalid PHP)"
compiled=$(find storage/framework/views -name '*.php' 2>/dev/null | wc -l)
if [ "$compiled" -eq 0 ]; then
    echo "!! no compiled views found — view:cache produced nothing, refusing to pass"
    exit 1
fi
if ! find storage/framework/views -name '*.php' -print0 | xargs -0 -n1 -P4 php -l > /tmp/view-lint.log 2>&1; then
    echo "!! a Blade template compiled to invalid PHP:"
    grep -v '^No syntax errors' /tmp/view-lint.log | head -20
    exit 1
fi
echo "    OK ($compiled views)"

echo "==> Validation passed — safe to deploy"
