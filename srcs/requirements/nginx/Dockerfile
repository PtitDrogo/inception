FROM debian:bullseye

RUN apt update \
&& apt upgrade \
&& apt install nginx -y \
&& apt install vim -y \
&& apt install curl -y

RUN apt install openssl -y
RUN mkdir -p /etc/nginx/ssl
RUN openssl req -x509 -nodes -out /etc/nginx/ssl/inception.crt -keyout /etc/nginx/ssl/inception.key -subj "/C=FR/ST=IDF/L=Lyon/O=42/OU=42/CN=tfreydie.42.fr/UID=tfreydie"

COPY default /etc/nginx/sites-available/.

# Start nginx in the foreground
CMD ["nginx", "-g", "daemon off;"]