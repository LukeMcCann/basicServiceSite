# Docker development environment for Laravel 5.5 

This setup contains:

- nginx 1.13.8
- php-fpm 7.2
- MariaDB
- phpMyAdmin

## Prerequisites
This repository requires [Docker](https://docs.docker.com/) and [Docker Compose](https://docs.docker.com/compose/).


## Installation

Clone this repository into the root directory of your Laravel project 
```
git clone https://github.com/aaronjamesdev/docker-laravel.git
```

Change directory
```
cd docker-laravel
```

Build containers
```
docker-compose up
```

View project
```
http://localhost:8080/
```

Access phpMyAdmin
```
http://localhost:8181/
username: root
password: root
```

## Change Default Ports

When making changes to the `docker-compose.yml` file you will need to stop and remove all containers and run `docker-compose up` before changes take effect.

### Application

Open `docker-compose.yml` and change `8080` to the new port
```
nginx:
      build:
        context: ./nginx
        dockerfile: dockerfile
      working_dir: /var/www
      volumes_from:
        - app
      ports:
        - 8080:80
      container_name: nginx
```

### phpMyAdmin

Open `docker-compose.yml` and change `8181` to the new port
```
phpmyadmin:
      image: phpmyadmin/phpmyadmin
      links:
        - db:mysql
      ports:
        - 8181:80
      environment:
        MYSQL_USERNAME: root
        MYSQL_ROOT_PASSWORD: root
      container_name: phpmyadmin
```

## Helpful Commands

Stop all docker containers
```
docker stop $(docker ps -a -q)
```

Remove all docker containers
```
docker rm $(docker ps -a -q)
```

Run artisan commands in app container
```
docker-compose exec -T app php artisan
```

Create alias "artisan"
```
alias artisan="docker-compose exec -T app php artisan"

ex: artisan cache:clear
```
