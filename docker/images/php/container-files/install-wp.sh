#!/bin/bash

cd /var/www
if [ ! -d "/var/www/wp" ]; then
  composer install -n
fi
rm -fr /var/www/wp/wp-content
cd /var/www/wp
ln -s /var/www/wp-content/ wp-content