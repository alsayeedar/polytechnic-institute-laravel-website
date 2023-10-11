## Polytechnic Institute Laravel Website

A Web Application for Polytechnic Institute using Laravel 10

## Installation

- Clone this repository
```
git clone https://github.com/alsayeedar/polytechnic-institute-laravel-website.git
```
- Change directory
```
cd polytechnic-institute-laravel-website
```
- Copy .env.example file
```
cp .env.example .env
```
- Generate key
```
php artisan key:generate
```
- Update database information in .env file
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=
DB_USERNAME=
DB_PASSWORD=
```
- Run migration
```
php artisan migrate
```
- Seed databse
```
php artisan db:seed
```
- Start server
```
php artisan serve
```
- See the result
```
http://127.0.0.1:8000/
```

## Admin Details
- Admin login url
```
http://127.0.0.1:8000/admin
```
- Admin credential
```
Email:admin@admin.com
Password:admin
```

## Credit

- **[Al Sayeed](https://github.com/alsayeedar/)**
