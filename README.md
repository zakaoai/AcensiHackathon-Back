# AcensiHackathon-Back

Projet initial : [JohnsonRodrigues/ApiRestLumen8](https://github.com/JohnsonRodrigues/ApiRestLumen8)

[![Build Status](https://travis-ci.org/laravel/lumen-framework.svg)](https://travis-ci.org/laravel/lumen-framework)
[![Total Downloads](https://img.shields.io/packagist/dt/laravel/framework)](https://packagist.org/packages/laravel/lumen-framework)
[![Latest Stable Version](https://img.shields.io/packagist/v/laravel/framework)](https://packagist.org/packages/laravel/lumen-framework)
[![License](https://img.shields.io/packagist/l/laravel/framework)](https://packagist.org/packages/laravel/lumen-framework)

Laravel Lumen is a stunningly fast PHP micro-framework for building web applications with expressive, elegant syntax. We believe development must be an enjoyable, creative experience to be truly fulfilling. Lumen attempts to take the pain out of development by easing common tasks used in the majority of web projects, such as routing, database abstraction, queueing, and caching.

## Official Documentation

Documentation for the framework can be found on the [Lumen website](https://lumen.laravel.com/docs).

## Contributing

Thank you for considering contributing to Lumen! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Security Vulnerabilities

If you discover a security vulnerability within Lumen, please send an e-mail to Taylor Otwell at taylor@laravel.com. All security vulnerabilities will be promptly addressed.

## License

## The Lumen framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

## Installation sans docker

Installer Php for Windows
rajouter php au var d'env
Installer XAMPP

installer composer

composer install

décommenter dans php.ini

pdo_mysql

php my admin
creer la database

xamp console entrer la ligne de commande :
mysql -u root -p mysql

php artisan make:migration --create=quotes create_quotes_table
php artisan migrate

https://loige.co/developing-a-web-application-with-lumen-and-mysql/

php -S localhost:8000 -t public

https://www.php-dev-zone.com/blog/install-lumen-in-windows

## Installation avec docker

-   Copier le fichier .env.docker dans un fichier .env

-   Executer la commande docker-compose up

`docker-compose --env-file .env.docker up -d`

-   Installer les dépendances du projet via composer

`docker-compose exec apiRestLumem composer install`

-   Initialiser la base de données

`docker-compose exec apiRestLumem php artisan migrate:fresh`

-   Initialiser la base de données avec un premier jeu de données

`docker-compose exec apiRestLumem php artisan migrate:fresh --seed`
