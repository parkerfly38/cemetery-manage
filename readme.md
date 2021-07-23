# Cemetery Management
Open Source Cemetery Management offers a product that allows you to manage multiple cemetery, sections, along with interment and deeds.

# Software Requirements
* [PHP](https://www.php.net): Version 7.2 or higher
* [Symfony](https://symfony.com): Version 5.3 or higher
* [MySQL](https://www.mysql.com): Developed against 8.0.26, you can use lower versions if you adjust server version in .env file.

# Implementation Instructions
* Modify .env, .env.test (or if you want it to be ignored by git, .env.local) and set your MySQL database line.
```
DATABASE_URL="mysql://db_user:db_password@127.0.0.1:3306/db_name?serverVersion=5.7"
```
* Create your database and run migrations, from the root folder of your application.
```
$ php bin/console doctrine:database:create
$ php bin/console doctrine:migrations:migrate
```
* To run and test this application against Symfony's built-in webserver:
```
$ php bin/console server:run
```

# Maintainers
[Brian Kresge](mailto:brian.kresge@gmail.com)