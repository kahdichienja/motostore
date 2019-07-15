# Getting Your Hands Dirty With The Codes.

---

- [Initial Set Up](#section-1)
- [Installation](#installation)

<a name="section-1"></a>

### Initial Set Up.

`1st` Before installation of the framework used the developer must have cmposer php dependency manager installed on his/her machine. Simply Move to:
```php
http://composer.org/download

```
Because without composer you can not install laravel:
For More Infomartion About Composer And Laravel Installer Visit:
```php
https://laravel.com
```
`2nd` You need to have Xampp installed on your machine which will provide you with database adminitration engine called phpmyadmin.<br>
The resion why I recommend Xampp is that It is easy to set up tha other ways of running laravel application for more ways of running laravel application visit their <a href="https://laravel.com">`official documentation`</a>

<a name="installation"></a>
## Installation

>{info}We are going to run the following command in order to install laravel for local development.
```php
composer require laravel-installer
```
the command above will allow us to shorten our installation command to:
```php
laravel new <app-name>
```
suppose you did not have strong internet connection you will get the following err:
```php
    Crafting application...
    In CurlFactory.php line 185:
    cURL error 6: Could not resolve host: cabinet.laravel.com (see http://curl.haxx.se/libcurl/c/libcurl-errors.html)
    new [--dev] [--force] [--] [<name>]
```


Assuming that every thing when on well: we are going to configure our database params in `.env` file and the make authentication scaffold using a simple command.
```php
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=<your-database-name>
DB_USERNAME=<database-username>
DB_PASSWORD=<databes-password>//if at all you have
```
### Authentication Scaffold
```php
php artisan make:auth
```

If at all you have already run the command the follow will be desplayed on the terminal/command prompt:
```php

 The [auth/login.blade.php] view already exists. Do you want to replace it? (yes/no) [no]:
 > n

 The [auth/register.blade.php] view already exists. Do you want to replace it? (yes/no) [no]:
 > n

 The [auth/verify.blade.php] view already exists. Do you want to replace it? (yes/no) [no]:
 > n

 The [auth/passwords/email.blade.php] view already exists. Do you want to replace it? (yes/no) [no]:
 > n

 The [auth/passwords/reset.blade.php] view already exists. Do you want to replace it? (yes/no) [no]:
 > n

 The [layouts/app.blade.php] view already exists. Do you want to replace it? (yes/no) [no]:
 > n

 The [home.blade.php] view already exists. Do you want to replace it? (yes/no) [no]:
 > n

Authentication scaffolding generated successfully.
```
