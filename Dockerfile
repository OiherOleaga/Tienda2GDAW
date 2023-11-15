FROM php:8.0.0-apache
ARG DEBIAN_FRONTEND=noninteractive
RUN docker-php-ext-install pdo pdo_mysql
RUN apt-get update \
    && apt-get install -y sendmail libpng-dev \
    && apt-get install -y libzip-dev \
    && apt-get install -y zlib1g-dev \
    && apt-get install -y libonig-dev \
    && rm -rf /var/lib/apt/lists/* \
    && docker-php-ext-install zip

RUN docker-php-ext-install mbstring
RUN docker-php-ext-install zip
RUN docker-php-ext-install gd

RUN echo '<FilesMatch "^[^.]+$">\n\tFallbackResource /index.php\n</FilesMatch>' >> /etc/apache2/apache2.conf

RUN a2enmod rewrite

CMD ["apache2-foreground"]
