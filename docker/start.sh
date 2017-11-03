#!/bin/bash

##
 # update nginx to match worker_processes to no. of cpu's
 #
procs=$(cat /proc/cpuinfo |grep processor | wc -l)
sed -i -e "s/worker_processes  1/worker_processes $procs/" /etc/nginx/nginx.conf

##
 # start supervisord and services
 #
/usr/local/bin/supervisord -n -c /etc/supervisord.conf

php $APP_DIR/artisan migrate --force

php $APP_DIR/artisan ci:work &

php $APP_DIR/artisan ci:work &
