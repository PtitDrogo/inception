FROM debian:bullseye

RUN apt update \
&& apt upgrade \
&& apt install nginx -y \
&& apt install vim -y \
&& apt install curl -y


COPY default /etc/nginx/sites-available/.

# Start nginx in the foreground
CMD ["nginx", "-g", "daemon off;"]


# RUN mkdir -p /etc/nginx/ssl
# RUN apt install openssl -y
# RUN openssl req -x509 -nodes -out /etc/nginx/ssl/inception.crt -keyout /etc/nginx/ssl/inception.key -subj "/C=FR/ST=IDF/L=Lyon/O=42/OU=42/CN=tfreydie.42.fr/UID=tfreydie"
# RUN mkdir -p /var/run/nginx
# RUN chmod 755 /var/www/html
# RUN chown -R www-data:www-data /var/www/html
# Expose port 80
# EXPOSE 80