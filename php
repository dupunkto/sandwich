#!/bin/bash

# Configure the PHP server to start two
# concurrent threads.
export PHP_CLI_SERVER_WORKERS=2

serve() {
  php -S 0.0.0.0:4000 index.php
}

if [ -f composer.json ]; then
  setup() {
    required composer
    composer install
  }
fi

