## Requirements ##
- Laravel v8
- SQLite
- PHP v7
- Laravel Valet for local test
- NPM v8.5
- Node v17.6

## Installation
- Download or clone repo in local machine (enter into root directory)
- create .env file with the help of following command
```
cp .env.example .env
```
- create sqlite db using following command
```
touch database/database.sqlite 
```
- install composer dependencies
```
composer install
```
- create application key
```
php artisan key:generate
```
- migrate database 
```
php artisan migrate:fresh --seed
```
- install packages
```
npm i && npm run prod
```
