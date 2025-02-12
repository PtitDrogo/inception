#!/bin/bash
cd /var/www/html
touch tfreydiewashere.txt
curl -O https://raw.githubusercontent.com/wp-cli/builds/gh-pages/phar/wp-cli.phar
chmod +x wp-cli.phar
./wp-cli.phar core download --allow-root
./wp-cli.phar config create \
    --dbname=wordpress \
    --dbuser=wpuser \
    --dbpass=password \
    --dbhost=mariadb \
    --allow-root \
--extra-php <<PHP
define('WP_HOME', 'https://tfreydie.42.fr');
define('WP_SITEURL', 'https://tfreydie.42.fr');
PHP

./wp-cli.phar core install --url=localhost --title=inception --admin_user=admin --admin_password=admin --admin_email=admin@admin.com --allow-root

#On a l'air de creer la DB, l'admin de wp, mais pas de users.

#on installe pas de theme

#on installe un theme pour voir se qu'il se passe 
./wp-cli.phar theme install astra --activate --allow-root

php-fpm7.4 -F