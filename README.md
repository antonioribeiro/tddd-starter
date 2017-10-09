# Tests Watcher Starter

![Starter](https://raw.githubusercontent.com/antonioribeiro/ci/master/docs/dashboard.png)

#### A watcher, tester & dashboard for your tests

This is an app starter repository for the [Tests Watcher Package](https://github.com/antonioribeiro/ci)

## Installing

```
git clone https://github.com/antonioribeiro/tests-watcher-starter.git
cd tests-watcher-starter
composer install
cp .env.example .example
php artisan generate:key
## create your database and configure your .env
php artisan migrate
## configure NGINX or Apache
open http://<app.domain>/tests-watcher/dashboard
```
