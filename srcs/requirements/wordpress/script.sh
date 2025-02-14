#!/bin/bash
cd /var/www/html
curl -O https://raw.githubusercontent.com/wp-cli/builds/gh-pages/phar/wp-cli.phar
chmod +x wp-cli.phar
./wp-cli.phar core download --allow-root
./wp-cli.phar config create --dbname="${DB_NAME}" --dbuser="${DB_USER}" --dbpass="${DB_PASSWORD}" --dbhost="${DB_HOST}" --allow-root \
--extra-php <<PHP
define('WP_HOME', 'https://tfreydie.42.fr');
define('WP_SITEURL', 'https://tfreydie.42.fr');
PHP

./wp-cli.phar core install --url="${WP_URL}" --title="${WP_TITLE}" --admin_user="${WP_ADMIN_USER}" --admin_password="${WP_ADMIN_PASSWORD}" --admin_email="${WP_ADMIN_EMAIL}" --allow-root

php-fpm7.4 -F