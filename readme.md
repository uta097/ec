##  setup

```bash
$ cp .env.example .env
$ composer install
$ php artisan key:generate
$ touch database/database.sqlite
$ php artisan serve
```

## DB Setup

```bash
$ php artisan migrate   // or php artisan migrate:refresh
$ php artisan db:seed
