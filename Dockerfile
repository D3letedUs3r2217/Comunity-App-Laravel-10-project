FROM postgres:latest


ENV POSTGRES_DB chatdatabase
ENV POSTGRES_USER root
ENV POSTGRES_PASSWORD cursoemvideo

# DB_PG_CONNECTION=pgsql
# DB_PG_HOST=127.0.0.1
# DB_PG_PORT=5432
# DB_PG_DATABASE=chatdatabase
# DB_PG_USERNAME=root
# DB_PG_PASSWORD=cursoemvideo

EXPOSE 5432

FROM php:8.1-fpm


RUN apt-get update && \
    apt-get install -y libpq-dev && \
    docker-php-ext-install pdo pdo_pgsql


WORKDIR /var/www/html