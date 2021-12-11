#!/usr/bin/env bash

docker-compose build
docker-compose run --rm -u $(id -u) -w /var/www php composer install

tar -xzf data/fileadmin.tar.gz --directory persistent

docker-compose run --rm php bash -c "chown :www-data fileadmin typo3temp -R && chmod g+w fileadmin typo3temp -R"
docker-compose up -d

