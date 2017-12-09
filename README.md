# TDDD Starter
### A Test Driven Development Dashboard Starter App
 
![Starter](https://raw.githubusercontent.com/antonioribeiro/tddd/master/docs/dashboard.png)

#### A dashboard, a tester and watcher to help you continuously test your apps

This is an app starter repository for the [TDDD Package](https://github.com/antonioribeiro/tddd)

## Installing

```
git clone https://github.com/antonioribeiro/tddd-starter.git
cd tddd-starter
cp .env.example .env
composer install
php artisan key:generate
## create your database and configure your .env
php artisan migrate
## configure NGINX or Apache
open http://<app.domain>/tddd/dashboard
```
