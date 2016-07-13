.PHONY: init up scale test link clean

init:
	docker-compose -f docker-compose.test.yml config -q && \
	docker-compose -f docker-compose.test.yml build pytest

up:
	docker-compose -f docker-compose.test.yml config -q && \
	docker-compose -f docker-compose.test.yml up --force-recreate --build

scale:
	docker-compose -f docker-compose.test.yml scale chromenode=15 firefoxnode=15

test:
	docker-compose -f docker-compose.test.yml run --rm pytest nosetests --processes=8

link:
	docker-compose -f docker-compose.test.yml run --rm pytest bash

clean:
	docker-compose -f docker-compose.test.yml down -v
	rm -f tests/*.pyc
	rm -f storage/tests/*
