# Hackathon Portfolio

Laravel-authored portfolio with a static export for GitHub Pages.

## Local Preview

```bash
cd laravel_portfolio
php artisan serve
```

Open the local URL shown by Artisan.

## Export for GitHub Pages

```bash
cd laravel_portfolio
composer export
```

The static site is written to `laravel_portfolio/docs/index.html`.

## Deploy Options

- Automatic: push to `main`, then enable GitHub Pages using GitHub Actions.
- Manual: run `composer export`, commit `laravel_portfolio/docs`, then set GitHub Pages to deploy from that folder.

## Edit Portfolio Content

Update the profile, stats, projects, experience, stack, and gallery arrays at the top of `laravel_portfolio/resources/views/welcome.blade.php`.
