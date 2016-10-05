# PHPUnit + Selenium/PhantomJS implementation for Laravel
Original code from "Training Day Two with Joshua Partogi (PHP)"
Objective: Use Test-Driven Development (TDD) in Development Team

Game Guidelines: http://yosethegame.com/players/apache

## Running locally with testing setup

Simply run:

```sh
sh start.sh
```

or for detailed setup, please read:
```sh
tests/lib/PHPUnitSeleniumPhantomJS.pdf
```

If succeed, start.sh will setup Selenium and PhantomJS
and also start the web server

## Manual setup

In root folder:
```sh
composer update
```

In tests/lib/ folder:
```sh
composer update
```

## Running tests

To run tests:
```sh
phpunit
```


## Browse web application
... open your browser and navigate to:

```sh
http://127.0.0.1:12345
```
