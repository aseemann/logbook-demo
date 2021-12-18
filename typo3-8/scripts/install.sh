#!/usr/bin/env bash

docker-compose build
docker-compose run --rm -u $(id -u) -w /var/www php composer install

tar -xzf data/fileadmin.tar.gz --directory persistent

docker-compose run --rm -w /var/www php bash -c "chown www-data:www-data * -R && chmod g+w * -R"
docker-compose up -d

