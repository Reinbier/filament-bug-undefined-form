## Setup instructions

After you cloned the repository locally, run the following steps:

Install the dependencies

```shell
composer install
```

Setup your environment

```shell
php artisan key:generate
```

Migrate and seed the SQLite database

```shell
php artisan migrate --seed
```

When you're prompted you need to create a database first, type '**yes**'.

## Login credentials

**Email:** test@example.com  
**Password:** test