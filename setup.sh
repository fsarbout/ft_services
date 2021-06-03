#!/bin/sh

minikube delete
minikube start --driver=virtualbox
eval $(minikube docker-env)

docker build -t my_ng ./srcs/nginx
docker build -t my_db ./srcs/mysql
docker build -t my_wp ./srcs/wordpress
docker build -t my_php ./srcs/phpmyadmin