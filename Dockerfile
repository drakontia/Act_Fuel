FROM php:7-apache

ADD docker/php/php.ini /usr/local/etc/php/

## Update packages
RUN apt-get update

## Install depending packages パッケージを追加
RUN apt-get install -y --no-install-recommends \
wget \
libmcrypt-dev \
vim \
git \
zip \
unzip

## Install FuelPHP's depending extensions PHP拡張
RUN docker-php-ext-install \
fileinfo \
mysqli \
mbstring \
mcrypt \
pdo \
pdo_mysql \
bcmath

## Cleanup 不要なファイルを削除
RUN rm -rf /var/lib/apt/lists/*

## Install composer
RUN php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');" \
php -r "if (hash_file('SHA384', 'composer-setup.php') === '55d6ead61b29c7bdee5cccfb50076874187bd9f21f65d8991d46ec5cc90518f447387fb9f76ebae1fbbacf329e583e30') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;" \
php composer-setup.php \
php -r "unlink('composer-setup.php');" \
mv composer.phar /usr/local/bin/composer
# php composer.phar install --prefer-dist

## Install phpunit PHPUnitをインストール
RUN wget https://phar.phpunit.de/phpunit.phar
RUN chmod +x phpunit.phar
RUN mv phpunit.phar /usr/local/bin/phpunit

## log
RUN mkdir /var/log/fuel
RUN chmod 777 /var/log/fuel

## Enable mod_rewrite FuelPHPはmod_rewriteが必要
RUN a2enmod rewrite

## Restart Apache Apache再起動
RUN service apache2 restart