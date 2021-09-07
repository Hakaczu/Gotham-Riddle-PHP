FROM php:8-apache
LABEL maintainer="Sebastian Szypulski <admin@techalchemist.pl> (@TechAlchemistPL)"
ENV TZ=Europe/Warsaw
RUN docker-php-ext-install mysqli pdo pdo_mysql