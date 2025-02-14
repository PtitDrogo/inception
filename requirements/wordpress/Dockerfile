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

