FROM php:7.4-fpm

# Install unzip, procps, cmake, bc, and vim.
RUN apt-get update -y \
&& apt-get install -y \
apt-utils unzip procps gdbserver cmake bc vim lsof iputils-ping wget libpq-dev
RUN apt-get install -y postgresql-client || true

# Set working directory to project root.
ARG PROJECT_NAME=cat-service
ENV PROJECT_DIRECTORY=/var/www/html/${PROJECT_NAME}
WORKDIR $PROJECT_DIRECTORY

## Copy to Dockerfile build context.
#COPY . $PROJECT_DIRECTORY

# Copy PHP initialization files.
COPY configuration/xdebug.ini /usr/local/etc/php/conf.d/xdebug.ini
COPY configuration/opcache.ini /usr/local/etc/php/conf.d/opcache.ini
COPY configuration/phar.ini /usr/local/etc/php/conf.d/phar.ini

# Install PCNTL.
RUN docker-php-ext-install pcntl

# Install Postgres.
RUN docker-php-ext-install pdo_pgsql

# Install Opcache.
RUN docker-php-ext-install opcache

# Install Xdebug.
ENV PHP_IDE_CONFIG="serverName=cat-service"
RUN pecl install xdebug
RUN docker-php-ext-enable xdebug

# Install Redis
RUN pecl install -o -f redis \
&&  rm -rf /tmp/pear \
&&  docker-php-ext-enable redis

# Install Composer.
COPY install-composer.sh $PROJECT_DIRECTORY
RUN ./install-composer.sh

RUN mkdir -p data/cache
RUN chmod -R a+rw data/cache/

# Create Specific Prefab HTTP Containers.
#RUN $PROJECT_DIRECTORY/bin/prime-container.sh

ENV PATH="$PROJECT_DIRECTORY/bin/:${PATH}"

