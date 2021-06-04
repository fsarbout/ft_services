#!/bin/sh

#
delete minikube

#start a cluster using the virtualbox driver
minikube start --driver=virtualbox

eval $(minikube docker-env)

docker build -t my_nginx ./srcs/nginx
docker build -t my_ftps ./srcs/ftps
docker build -t my_wordpress ./srcs/wordpress
docker build -t my_mysql ./srcs/mysql
# docker build -t my_phpmyadmin ./srcs/phpmyadmin
# docker build -t my_influxdb ./srcs/influxd
# docker build -t my_grafana ./srcs/grafana
