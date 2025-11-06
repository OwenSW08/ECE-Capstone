FROM php:8.2-apache

RUN apt-get update && apt-get install -y python3 python3-pip

WORKDIR /var/www/html
COPY . /var/www/html

EXPOSE 80