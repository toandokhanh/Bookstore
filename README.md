# Bookstore

A Laravel bookstore built for the CT299 web systems development course in 2022–2023. It includes a book catalog, search, shopping cart, order history and an administrator interface for books, authors, publishers and customers.

This is a historical academic prototype. The 2026 maintenance pass updates configuration, access checks and repository hygiene. The application has not been validated end to end with its original runtime and external services.

## Stack and structure

- Laravel 9, PHP 8, MySQL/PostgreSQL, Blade and Laravel Breeze.
- Tailwind CSS, jQuery and Vite for the interface and assets.
- `app/Http/Controllers/`: customer and administration flows.
- `database/`: schema migrations and synthetic demo seed data.
- `resources/views/`: Blade templates; `tests/`: the original test suite and maintenance regression tests.

## Local setup

Use an isolated local database. Dependency versions in the lockfiles describe the original project; review compatibility before installing them on a modern runtime.

```sh
git clone https://github.com/toandokhanh/Bookstore.git
cd Bookstore
composer install
npm ci
cp .env.example .env
php artisan key:generate
```

Set database credentials in `.env`. To create demo accounts, also set a unique `DEMO_SEED_PASSWORD` of at least 12 characters. Seed users use `example.com` addresses; the last demo account is the administrator (role 2). Public registration always creates role 1.

```sh
php artisan migrate --seed
npm run dev
php artisan serve
```

The seeders populate demo data and are intended for an empty local database. Account password changes require the current password. Order totals are calculated on the server; mutation forms use POST and CSRF protection.

## Screenshots

<img src="https://user-images.githubusercontent.com/98395447/201471936-6c628bd5-2a3f-4525-b8af-de9e0c693d09.png" alt="Customer Interface">
<img src="https://user-images.githubusercontent.com/98395447/201474598-6dd76041-3aa2-4438-a74f-3d84cccab6c1.png" alt="Customer Interface">

## Scope

This coursework demonstrates a small store workflow. It does not integrate a payment provider or production fulfillment. The legacy schema stores order totals in a floating-point column; a production redesign should use fixed-precision amounts and order-item snapshots. See [third-party notices](THIRD_PARTY_NOTICES.md).
