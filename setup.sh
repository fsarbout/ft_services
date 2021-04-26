#!/bin/sh
eval $(minikube -p minikube docker-env)

docker build -t nginx ./srcs/nginx --no-cache