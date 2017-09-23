#!/usr/bin/env bash

# remove composer vendor directory
rm -rf vendor

# remove node modules directory
rm -rf node_modules

# remove front end vendor directory
rm -rf resources/assets/js/vendor

composer install --verbose --prefer-dist --no-progress --no-interaction --no-dev --optimize-autoloader

npm install

./node_modules/.bin/bower install --config.interactive=false

./node_modules/.bin/grunt $1