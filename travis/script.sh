#!/usr/bin/env bash

set -e

DOCKER_BUILD=${DOCKER_BUILD-false}
TRAVIS_PHP_VERSION=${TRAVIS_PHP_VERSION-7.2}

if [ "$DOCKER_BUILD" = false ]; then
    vendor/bin/phpunit --configuration phpunit.ci.xml
fi

if [ "$DOCKER_BUILD" = true ]; then
    docker-compose up -d
    docker-compose run --rm php vendor/bin/phpunit
    docker-compose run --rm hhvm vendor/bin/phpunit
fi
