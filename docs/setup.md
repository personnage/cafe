# Setup

## Deploy

### Build fresh the images

Verify `docker-compose.yml` file:
    
    docker-compose config

and if success, make it

    docker-compose build --pull

First time required times for full build images.

### Install dependencies

#### Composer

    docker-compose run --rm laravel composer install

This command will install all of the dependencies described in composer.json or composer.lock files.

#### NPM

    docker-compose run --rm node npm install

This command will install all of the dependencies described in package.json file.

#### Bower

    docker-compose run --rm node bower install -Ff

This command will install all of the dependencies described in bower.json file.

### Build assets

    docker-compose run --rm node gulp
    // and watch
    docker-compose run --rm node npm run-script dev

### Run application

    docker-compose up --force-recreate

### Up migration

    docker-compose exec laravel php artisan migrate
