UrbaNetwork project
===============================================================

## Introduction
This project is a website that will promote underground artist sush as danser, graffer and all kind of street performer.
Urbanetwork is a project born in the university for our studies. We are a dev team composed of 3 members.
We love web developement and we wanted to use Symfony 2 for an open source project.

## Installation
### Download and install the package
* Download zip file from gitHub [here](https://github.com/amineamanzou/Urbanetwork)
* Unzip it in your document root directory
* Install Vendors:

```bash
php composer.phar install
```

### Create and/or update your database
* create your database (if not created yet):

```bash
php app/console doctrine:database:create
```

* Update database:

```bash
php app/console doctrine:schema:update --force
```

### Creating the upload directory and managing permission
* The upload directory:

```bash
mkdir web/uploads && mkdir web/uploads/media && chmod -R 0777 web/uploads
```

* Permission:

```bash
chmod -R 777 ./app/cache/
chmod -R 777 ./app/log/
```

### Creating the super user

````bash
php app/console fos:user:create root root@example.com password --super-admin
```

### Compiling the css

```bash
php app/console assetic:dump
```

## Ready !
You can now use this project as a normal symfony 2 project.
