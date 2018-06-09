# Unify
The Bruno's project

Clone the project and install the dependences:
```sh
$ git clone git@github.com:brunoannunciato/unify.git  && cd unify;
$ composer install
$ mv config/app.default.php config/app.php
```
Set the database config in `config/app.php` line `257`.
```sh
$ mysql -u root -p
$ drop database unify; create database unify;
$ bin/cake migrations migrate
$ bin/cake migrations seed
```
To run the project:
```sh
$ bin/cake server
```
