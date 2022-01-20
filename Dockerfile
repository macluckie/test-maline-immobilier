FROM php:7.4-apache
RUN docker-php-ext-install pdo pdo_mysql
RUN apt-get update && apt-get install -y libpq-dev && docker-php-ext-install pdo pdo_pgsql
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
RUN apt-get update && \
    apt-get upgrade -y && \
    apt-get install -y git

# RUN echo "ServerName localhost" >> /etc/apache2/apache2.conf
# RUN docker-php-ext-install pdo pdo_mysql
# RUN apt-get update && apt-get install -y libpq-dev && docker-php-ext-install pdo pdo_pgsql
# COPY ./projet /var/www/html
# COPY ./vhosts/dimitri.conf /etc/apache2/sites-available/
# RUN a2ensite dimitri.conf
# RUN /etc/init.d/apache2 restart
WORKDIR /var/www/html/public
# RUN chmod -R 777 var/cache/dev/







