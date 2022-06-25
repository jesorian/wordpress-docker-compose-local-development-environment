# wordpress-docker-compose-local-development-environment
WordPress docker-compose to set up quickly for local development with persistent database using MySQL, NginX and PHP-FPM. This is created inside an Ubuntu WSL2 Machine. Normal Ubuntu Machine should also work here.

## Pre-requisite

Ubuntu Machine or Ubuntu running insde WSL of windows.

## Installation

Configure your persistent database folder.

Default location is `/var/opt/mysql/wp-local-data` you can customize the `docker-compose.yml` line 27 for this.

Commands to run the local development environment

Go inside the root directory and run
```sh
docker-compose up -d --build
```

After the command open the http://localhost to set up your WordPress website.

## Common Issue

`Error establishing connection to the database` solution is just wait for the MySQL container to be fully up. Just refresh the page until the container is loaded 100%.
