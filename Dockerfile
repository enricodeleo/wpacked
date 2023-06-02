FROM composer AS composer

# copying the source directory and install the dependencies with composer
COPY . /app

# run composer install to install the dependencies
RUN composer install \
  --optimize-autoloader \
  --no-interaction \
  --no-progress

FROM trafex/php-nginx:2.5.0

USER root

RUN apk add --no-cache \
  git \
  imagemagick \
  redis \
  php8-simplexml \
  php8-xmlwriter \
  php8-mbstring \
  php8-zip \
  php8-gettext \
  php8-soap \
  php8-pecl-imagick \
  php8-pecl-redis \
  php8-pecl-igbinary \
  php8-fileinfo \
  php8-iconv \
  php8-exif \
  php8-bcmath

RUN sed -i 's|/var/www/html|/var/www/app|g' /etc/nginx/nginx.conf

USER nobody

COPY --chown=nginx . /var/www/
COPY --chown=nginx --from=composer /app /var/www/

WORKDIR /var/www