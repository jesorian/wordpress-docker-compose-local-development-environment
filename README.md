# wordpress-docker-compose-local-development-environment
WordPress docker-compose to set up quickly for local development with persistent database using MySQL, NginX and PHP-FPM. This is created inside an Ubuntu WSL2 Machine. Normal Ubuntu Machine should also work here.

## Pre-requisite

Install Docker https://docs.docker.com/engine/install/ubuntu/

Ubuntu Machine or Ubuntu running insde WSL of windows.

## Installation

Configure your persistent database folder and database connection string in the `docker-compose.yml` file.

The persistent database folder is Line 30.
The database connection string is from Line 25 to Line 28.

Commands to run the local development environment

Go inside the root directory and run
```sh
docker-compose build --no-cache
docker-compose up -d --force-recreate
```

Change permission of website root directory on nginx container
```
docker exec -ti nginx ash
chown -R www-data:www-data /var/www/html
exit
```
Change permission of website root directory on php container
```
docker exec -ti php ash
chown -R www-data:www-data /var/www/html
exit
```

After the command open the http://localhost to set up your WordPress website.

## Common Issue

`Error establishing a database connection` solution is just wait for the MySQL container to be fully up and try again.
