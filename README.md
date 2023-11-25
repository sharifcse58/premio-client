# Premio Assesment client project

## Follow step by step for initial installation

### Copy .env.example file to .env

```
cp .env.example .env
```

### Install vendor files

```
composer install
```

### Install nodemodules files

```
npm install
```

### Minify css or js

```
npm run dev
```

### Migrate databse and seed data

```
php artisan migrate
```

### Genrate app key

```
php artisan key:generate
```

### Please make a local virtual host named http://premio-client.test

### for testing routes hit http://premio-client.test/aaa or http://premio-client.test/abc or http://premio-client.test/abc/def
