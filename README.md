# Biogaran-pro-connect
====================

A Symfony project created on February 20, 2017, 3:52 pm by **Groupe 361**

### Installation

Create the database :
**your_name**_biogaran_pro_connect

For developpers : 
```sh
$ git clone -b dev git@git.groupe361.com:symfony/biogaran-pro-connect.git
```

For customers : 
```sh
$ git clone -b master git@git.groupe361.com:symfony/biogaran-pro-connect.git
```

Run composer : 
```sh
$ composer install
```

Create database schema : 
```sh
$ php bin/console doctrine:schema:create
```

Load the fixtures : 
```sh
$ php bin/console hautelook_alice:doctrine:fixtures:load
```

Create if not exists "MEDIA" folder :
**/web/uploads/media**

You must have yo and yeoman-generator installed globally :

```sh
$ npm install -g yo yeoman-generator
```

And then install fks :

```sh
$ npm install generator-dev361-fks
```
And then run the generator :

```sh
$ yo dev361-fks
````

**Running the fks generator will :**

ask for your project name,
install some dependencies (Dev361 Front-End Assets Builder, Bootstrap, Jquery, Modernizr)
copy example assets at project root
add a few dependencies and put Dev361 Front-End Assets Builder config files at the right place (config options for that package can be found at https://github.com/dev361/dev361-front-builder)
