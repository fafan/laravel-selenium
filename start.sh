#!/bin/sh

echo "** Checking composer for testing use..."
cd ./tests/lib/
TESTS_COMPOSER="./composer.lock"
if [ ! -e $TESTS_COMPOSER ]; then php composer.phar update; fi

echo "** Checking selenium for testing use..."
SELENIUM_URL="http://selenium-release.storage.googleapis.com/2.53/selenium-server-standalone-2.53.1.jar"
SELENIUM="./tests/lib/selenium-server-standalone-2.53.1.jar"

killall -9 java
#PARAM="-Dphantomjs.binary.path=/usr/local/bin/phantomjs"
#PARAM="-role hub -timeout=50 -browserTimeout=60 -ensureCleanSession"
PARAM="-role hub"
cd ../../
if [ ! -e $SELENIUM ]; then
    wget -O $SELENIUM $SELENIUM_URL && java -jar $SELENIUM $PARAM &
else
    java -jar $SELENIUM $PARAM &
fi
SELENIUM_PID=$!

echo "** Starting development web server..."
php -S 127.0.0.1:12345 -ddisplay_errors=0 -t public public/index.php
