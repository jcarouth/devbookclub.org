FROM phusion/baseimage:bionic-1.0.0-amd64

RUN curl -sL https://deb.nodesource.com/setup_14.x | bash - \
  && add-apt-repository -y ppa:ondrej/php \
  && install_clean \
    git \
    nginx \
    nodejs \
    php8.0-bcmath \
    php8.0-cli \
    php8.0-common \
    php8.0-curl \
    php8.0-gd \
    php8.0-imagick \
    php8.0-intl \
    php8.0-mbstring \
    php8.0-xml \
    php8.0-zip \
    zip \
    unzip

COPY --from=composer:2 /usr/bin/composer /usr/local/bin/composer

COPY docker/etc /etc/
RUN chmod +x /etc/service/*/run

WORKDIR /app

CMD [ "/sbin/my_init" ]
