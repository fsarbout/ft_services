#!/bin/sh
#kubectl delete pods --all
#kubectl delete deployments --all
#kubectl delete svc --all
#kubectl delete pvc --all

minikube delete

#start a cluster using the virtualbox driver
minikube start --driver=virtualbox --memory=4096

eval $(minikube docker-env)

#metallb
kubectl apply -f https://raw.githubusercontent.com/metallb/metallb/v0.10.0/manifests/namespace.yaml
kubectl apply -f https://raw.githubusercontent.com/metallb/metallb/v0.10.0/manifests/metallb.yaml

docker build -t nginx ./srcs/nginx
docker build -t wordpress ./srcs/wordpress
docker build -t mysql ./srcs/mysql
docker build -t phpmyadmin ./srcs/phpmyadmin
# docker build -t ftps ./srcs/ftps
docker build -t influxdb ./srcs/influxdb
docker build -t grafana ./srcs/grafana

kubectl apply -f ./srcs/metallb_conf.yaml
kubectl apply -f ./srcs/mysql/mysql.yaml
kubectl apply -f ./srcs/nginx/nginx.yaml
kubectl apply -f ./srcs/phpmyadmin/phpmyadmin.yaml
kubectl apply -f ./srcs/wordpress/wordpress.yaml
# kubectl apply -f ./srcs/ftps/ftps.yaml
kubectl apply -f ./srcs/grafana/grafana.yaml
kubectl apply -f ./srcs/influxdb/influxdb.yaml

#copy database from grafana dashboards container to local folders
# kubectl cp grafana-d4f77759-b2cn2:grafana-7.4.0/data/grafana.db grafana.db

minikube dashboard &

# kubectl delete -f ./srcs/mysql/mysql.yaml && docker rmi mysql && docker build -t mysql ./srcs/mysql/ && kubectl apply -f ./srcs/mysql/mysql.yaml
# kubectl delete -f ./srcs/nginx/nginx.yaml && docker rmi nginx-img && docker build -t nginx-img && kubectl apply -f ./srcs/nginx/nginx.yaml
# kubectl delete -f ./srcs/wordpress/wordpress.yaml && docker rmi wordpress-img && docker build -t wordpress-img && kubectl apply -f ./srcs/wordpress/wordpress.yaml
# kubectl delete -f ./srcs/grafana/grafana.yaml && docker rmi grafana && docker build -t grafana ./srcs/grafana && kubectl apply -f ./srcs/grafana/grafana.yaml
# kubectl delete -f ./srcs/influxdb/influxdb.yaml && docker rmi influxdb && docker build -t influxdb ./srcs/influxdb && kubectl apply -f ./srcs/influxdb/influxdb.yaml
# kubectl delete -f ./srcs/nginx/nginx.yaml && docker rmi nginx && docker build -t nginx ./srcs/nginx && kubectl apply -f ./srcs/nginx/nginx.yaml
# kubectl delete -f ./srcs/influxdb/influxdb.yaml && docker rmi influxdb && docker build -t influxdb ./srcs/influxdb && kubectl apply -f ./srcs/influxdb/influxdb.yaml
