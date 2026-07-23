# Deploying to Render.com

This app ships as a **Docker web service** (Render has no native PHP runtime).
Everything needed is in the repo: `Dockerfile`, `docker/entrypoint.sh`,
`render.yaml`, `.dockerignore`, and `public/.htaccess`.

## What the image does
- `php:8.2-apache`, document root pointed at `public/`, `mod_rewrite` on.
- `composer install --no-dev` at build; caches optimized at boot.
- Serves the existing **SQLite** DB (`database/database.sqlite`) — no external
  database required. Service/city/static pages render even without it.
- Binds Apache to Render's `$PORT` automatically.

## One-time deploy steps
1. **Push this folder to a Git repo** (GitHub/GitLab). Render deploys from Git.
   > This is currently not a git repo. Per the Patron workflow, promoting to
   > `patronmain` / git needs explicit sign-off first.
2. In Render: **New → Blueprint**, point it at the repo. It reads `render.yaml`
   and creates the `patron-accounting` web service.
3. Set **`APP_KEY`** in the service's *Environment* tab for a stable key:
   run `php artisan key:generate --show` locally and paste the `base64:...`
   value. (If left blank, the container mints a throwaway key each boot —
   fine for a preview, but it invalidates sessions/encrypted cookies on
   every restart.)
4. Deploy. First build takes a few minutes.

## Data persistence
`render.yaml` mounts a 1 GB persistent disk at `database/`, so the SQLite file
(and form submissions/sessions) survives deploys. On first boot the content DB
is seeded onto the fresh disk from the image.

- **Pure content preview?** Delete the `disk:` block in `render.yaml` — each
  deploy then ships the baked-in DB read-mostly (writes are lost on redeploy).

## Notes / knobs
- `plan: starter` avoids free-tier cold starts; switch to `free` to cut cost.
- `region: singapore` is the closest Render region to India.
- Pre-existing app quirks (`/blog` 500, `/search` 404) are unrelated to deploy.
- To move off SQLite later: add a Render PostgreSQL/MySQL instance and set the
  `DB_*` env vars — both `pdo_mysql` and `pdo_sqlite` are already in the image.

## Test the container locally (optional, needs Docker)
```bash
docker build -t patron .
docker run --rm -e PORT=8080 -p 8080:8080 patron
# open http://localhost:8080
```
