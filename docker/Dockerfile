##
 # aliases and commands
 #
# alias d=docker
# d build -t tddd docker
# d run -i -t --rm tddd
# d run --name ctd11 -d -p 8087:8087 tddd
# d exec -i -t bcf785a473df04ab403e2ed57ae35244ac08c9f079438e1e685fa0c3d6547ca3 /bin/bash
# alias dbash='d exec -i -t $(d ps | grep "tddd" | cut -f 1 -d" ") /bin/bash'
# alias dkill='d kill $(d ps | grep "tddd" | cut -f 1 -d" ") /bin/bash'
# d attach <id>
# d run -v $(pwd):/tddd --name ctd15 -d -p 8087:8087 tddd

##
 # image
 #
FROM wyveo/nginx-php-fpm:latest

##
 # MAINTAINER
 #
LABEL maintainer="Antonio Carlos Ribeiro <acr@antoniocarlosribeiro.com>"

##
 # variables and defaults
 #
ARG dir=/tddd
ARG mysql_database="ci"
ARG mysql_username="ci"
ARG mysql_password="passw0rt"

ENV APP_DIR=$dir
ENV APP_WORKERS=1

##
 # sources
 #
WORKDIR /

##
 # volumes
 #
VOLUME ["$dir"]

##
 # install packages
 #
RUN apt-get update \
	&& apt-get install --yes sudo git joe locales procps

##
 # install mysql
 #
RUN apt-get update \
	&& apt-get install --yes mysql-server

RUN /etc/init.d/mysql start \
    && mysql -u root -e "CREATE USER '$mysql_username'@'localhost' IDENTIFIED BY '$mysql_password';" \
    && mysql -u root -e "GRANT ALL PRIVILEGES ON *.* TO '$mysql_username'@'localhost';" \
    && mysql -u root -e "CREATE DATABASE $mysql_database;" \
    && mysql -u root -e "FLUSH PRIVILEGES;"

##
 # locales
 #
RUN locale-gen --purge en_US.UTF-8

RUN echo -e 'LANG="en_US.UTF-8"\nLANGUAGE="en_US:en"\n' > /etc/default/locale

ENV LANG en_US.UTF-8
ENV LANGUAGE en_US:en
ENV LC_ALL en_US.UTF-8
ENV COMPOSER_ALLOW_SUPERUSER=1

# default is 'dumb'. that cripples less, vim, coloring, etc
ENV TERM=xterm-256color \
    SHELL=/bin/bash \
    LANGUAGE=en_US.UTF-8

##
 # install composer
 #
RUN curl -sS https://getcomposer.org/installer | php \
        && mv composer.phar /usr/local/bin/ \
        && ln -s /usr/local/bin/composer.phar /usr/local/bin/composer

##
 # clone repository
 #
# RUN git clone https://github.com/antonioribeiro/tests-watcher-starter $dir

##
 # install composer packages
 #
# RUN composer install --prefer-dist --no-dev --no-interaction

##
 # configure NGINX
 #
ADD ./nginx/default.conf /etc/nginx/conf.d/default.conf

##
 # clean up
 #
RUN apt-get clean && rm -rf /var/lib/apt/lists/*

##
 # add scripts
 #
COPY ./start.sh /start.sh
COPY ./root/.bashrc /root/.bashrc
RUN chmod 755 /start.sh
#RUN chmod 775 -R $dir/storage
#RUN chown root:nginx -R $dir/storage

##
 # configure mysql supervisor
 #
RUN    echo "" >> /etc/supervisord.conf \
    && echo "[program:mysql]"  >> /etc/supervisord.conf \
    && echo "command=/usr/local/bin/pidproxy /var/run/mysqld/mysqld.pid /usr/sbin/mysqld"  >> /etc/supervisord.conf \
    && echo "autorestart=true"  >> /etc/supervisord.conf

##
 # entrypoint
 #
ENTRYPOINT ["/start.sh"]

##
 # exposed ports
 #
EXPOSE 8087
