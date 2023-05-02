# Laravel Tutorial

### Stack
    - Laravel 9.x
    - PHP 8.1.x
    - MySQL 5.7.34
    
### Clone Repository
```console
$ git clone https://github.com/salahudienfauzi/laravel_tutorial.gitgit 
```

### Install Package Dependencies
```console
$ composer install
```

### Install & Compile JavaScript Scaffolding
```console
$ npm install && npm run dev
```

### Setup Environment
```console
$ cp .env.example .env
```

### Setup Database on .env file
```
DB_CONNECTION=mysql
DB_HOST=yourhost
DB_PORT=3306
DB_DATABASE=mpp
DB_USERNAME=yourusername
DB_PASSWORD=yourpassword
```

### Generate APP_KEY
```console
$ php artisan key:generate && php artisan config:cache
```

### Migrate tables and seeds
```console
$ php artisan migrate --seed
```
