#!/bin/bash

php -S localhost:8080 &>/dev/null &
java -jar bin/selenium.jar -Dwebdriver.chrome.driver="bin/chromedriver" &>/dev/null &
