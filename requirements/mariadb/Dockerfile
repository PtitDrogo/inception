# FROM debian:bullseye

# RUN apt update -y \
# && apt upgrade -y \
# && apt-get install mariadb-server -y

# COPY conf/50-server.cnf /etc/mysql/mariadb.conf.d/50-server.cnf

# COPY tools/config.sh /

# RUN chmod +x /config.sh

# CMD ["/bin/sh", "/config.sh"]

FROM debian:bullseye

RUN apt update && apt upgrade && apt install -y \
    mariadb-server

COPY 50-server.cnf /etc/mysql/mariadb.conf.d/.
COPY init.sql /etc/mysql/init.sql

RUN mkdir /run/mysqld

CMD ["mysqld"]
