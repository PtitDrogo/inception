FROM debian:bullseye

RUN apt-get update && apt-get upgrade -y && apt install -y \
    php-fpm \
    php-mysqli \
    curl

COPY www.conf /etc/php/7.4/fpm/pool.d/.
COPY script.sh .

RUN chmod +x script.sh

RUN mkdir -p /run/php
CMD ["./script.sh"]


# && apt-get -y install wget
# RUN apt-get install -y php7.3\
# php-fpm\ #doublon
# php-mysql\
# mariadb-client
# #on modifie le fichier www.conf pour modifie listen a 9000
# sed -i 's/listen = \/run\/php\/php7.4-fpm.sock/listen = 9000/g' /etc/php/7.4/fpm/pool.d/www.conf
# RUN wget https://fr.wordpress.org/wordpress-6.0-fr_FR.tar.gz -P /var/www
# RUN cd /var/www && tar -xzf wordpress-6.0-fr_FR.tar.gz && rm wordpress-6.0-fr_FR.tar.g
# RUN chown -R root:root /var/www/wordpress

