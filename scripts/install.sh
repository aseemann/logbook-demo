#!/usr/bin/env bash

docker-compose build
docker-compose run --rm -w /var/www php composer install

tar -xzf data/fileadmin.tar.gz --directory persistent

docker-compose run --rm php bash -c "chown :www-data fileadmin -R && chmod g+w fileadmin -R"
docker-compose up -d

