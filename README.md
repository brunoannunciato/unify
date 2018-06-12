# Unify
Clone the project and install the dependences:
```sh
$ git clone git@github.com:brunoannunciato/unify.git  && cd unify;
$ composer install
$ npm install
$ cp config/app.default.php config/app.php
```
Set the database config in `config/app.php` line `257` then create the database:
```sh
$ mysql -u root -p
$ drop database unify; create database unify;
```
Run the migrations:
```sh
$ bin/cake migrations migrate
```
Run the seeds:
```sh
$ bin/cake migrations seed --seed=QuestionsSeed
$ bin/cake migrations seed --seed=AnswersSeed
$ bin/cake migrations seed --seed=SchoolsSeed
$ bin/cake migrations seed --seed=UsersSeed
```
To run the project:
```sh
$ bin/cake server
```
