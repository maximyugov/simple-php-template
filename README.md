# Simple PHP Template

[![PHPStan](https://github.com/maximyugov/simple-php-template/actions/workflows/phpstan.yml/badge.svg)](https://github.com/maximyugov/simple-php-template/actions/workflows/phpstan.yml)
[![PHPUnit](https://github.com/maximyugov/simple-php-template/actions/workflows/phpunit.yml/badge.svg)](https://github.com/maximyugov/simple-php-template/actions/workflows/phpunit.yml)

## About

This is a basic scaffold for vanilla PHP. It contains Composer, PHPUnit 10, PHPStan and GitHub Actions. You can use it for test tasks, eductional purposes or whatever you want.

## Usage

Clone repository

`git clone https://github.com/maximyugov/simple-php-template.git your-project-directory`

`cd your-project-directory`

### With Docker

Build services

`docker compose build`

Run container

`docker compose up`

Open in your browser

`http://localhost:8050`

Before running composer command you need to open terminal in Docker container

`docker container exec -it app bash`

Then install dependencies

`composer install`

Run tests

`composer test`

Check PHP version

`php --version`

### Without Docker

Install dependencies

`composer install`

Run tests

`composer test`