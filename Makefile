.PHONY: *

default:
	@cat Make/targets.txt

up:
	docker-compose up -d

down:
	docker-compose down -v

install:
	bash scripts/install.sh

build:
	docker-compose build --pull php
