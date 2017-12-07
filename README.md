# TDDD Starter
### A Test Driven Development Dashboard Starter App
 
![Starter](https://raw.githubusercontent.com/antonioribeiro/tddd/master/docs/dashboard.png)

#### A watcher, tester & dashboard for your tests

This is an app starter repository for the [Tests Watcher Package](https://github.com/antonioribeiro/tddd)

## Installing

```
git clone https://github.com/antonioribeiro/tests-watcher-starter.git
cd tests-watcher-starter
composer install
cp .env.example .example
php artisan key:generate
## create your database and configure your .env
php artisan migrate
## configure NGINX or Apache
open http://<app.domain>/tests-watcher/dashboard
```
