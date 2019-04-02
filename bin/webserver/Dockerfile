#Version 2.0 Fixed timezone Br
#Suport eriktonon@gmail.com
#Contato https://www.linkedin.com/in/erik-tonon-83817b145/
FROM php:7.3-apache
MAINTAINER Erik Tonon <eriktonon@gmail.com>
RUN apt-get update && apt-get install -y \
   git \
   zlib1g-dev \
   unixodbc \
   unixodbc-dev \
   freetds-dev \
   freetds-bin \
   tdsodbc \
   libicu-dev &&\
   rm -rf /var/lib/apt/lists/*;
# Set timezone
RUN rm /etc/localtime &&\
   ln -s /usr/share/zoneinfo/America/Sao_Paulo /etc/localtime &&\
   "date"
RUN set -x \
   && cd /usr/src/ && tar -xf php.tar.xz && mv php-7* php \
   && cd /usr/src/php/ext/odbc \
   && phpize \
   && sed -ri 's@^ *test +"\$PHP_.*" *=* "no" *&& *PHP_.*=yes *$@#&@g' configure \
   && ./configure --with-unixODBC=shared,/usr > /dev/null \
   && docker-php-ext-install odbc > /dev/null
RUN apt-get update
RUN apt-get install -y libpq-dev && \
   apt-get install -y libpng-dev && \
   apt-get install -y zip unzip && \
   apt-get install -y git && \
   docker-php-ext-configure pgsql -with-pgsql=/usr/local/pgsql && \
   docker-php-ext-install pdo pdo_pgsql pgsql && \
   docker-php-ext-install gd
# Type docker-php-ext-install to see available extensions
RUN docker-php-ext-install pdo intl mbstring
RUN docker-php-ext-configure pdo_dblib --with-libdir=/lib/x86_64-linux-gnu
# install xdebug
RUN docker-php-ext-install pdo_dblib
RUN docker-php-ext-enable intl mbstring pdo_dblib
# install composer 
RUN curl -sS https://getcomposer.org/installer -o composer-setup.php
RUN php composer-setup.php --install-dir=/usr/local/bin --filename=composer
RUN composer config --global repo.packagist composer https://packagist.org
RUN rm -rf /var/www/html composer-setup.php
#Drivers mysql
RUN apt-get -y install libsqlite3-dev libsqlite3-0 mysql-client
RUN docker-php-ext-install pdo_mysql 
RUN docker-php-ext-install pdo_sqlite
RUN docker-php-ext-install mysqli
RUN apt-get -y install zlib1g-dev
RUN apt-get -y install libicu-dev
RUN docker-php-ext-install -j$(nproc) intl
RUN docker-php-ext-install mbstring
RUN apt-get install -y libfreetype6-dev libjpeg62-turbo-dev libpng-dev
RUN docker-php-ext-configure gd --with-freetype-dir=/usr/include/ --with-jpeg-dir=/usr/include/ 
RUN docker-php-ext-install -j$(nproc) gd


