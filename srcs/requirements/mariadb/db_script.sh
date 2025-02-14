#!/bin/bash

envsubst < /etc/mysql/init.sql > /etc/mysql/init_substituted.sql

mysql_install_db
mysqld --init-file=/etc/mysql/init_substituted.sql

