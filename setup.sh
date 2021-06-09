#!/bin/sh
#kubectl delete pods --all
#kubectl delete deployments --all
#kubectl delete svc --all
#kubectl delete pvc --all

minikube delete

#start a cluster using the virtualbox driver
 minikube start --driver=virtualbox

eval $(minikube docker-env)


#metallb
kubectl apply -f https://raw.githubusercontent.com/metallb/metallb/v0.10.0/manifests/namespace.yaml
kubectl apply -f https://raw.githubusercontent.com/metallb/metallb/v0.10.0/manifests/metallb.yaml

docker build -t my_nginx-img ./srcs/nginx
docker build -t my_wordpress-img ./srcs/wordpress
docker build -t my_mysql-img ./srcs/mysql
docker build -t my_phpmyadmin-img ./srcs/phpmyadmin
####
# docker build -t my_ftps-img ./srcs/ftps
# docker build -t my_influxdb-img ./srcs/influxd
# docker build -t my_grafana-img ./srcs/grafana

kubectl apply -f ./srcs/metallb_conf.yaml
kubectl apply -f ./srcs/mysql/mysql.yaml
kubectl apply -f ./srcs/nginx/nginx.yaml
kubectl apply -f ./srcs/phpMyAdmin/phpmyadmin.yaml
kubectl apply -f ./srcs/wordpress/wordpress.yaml
# kubectl apply -f ./srcs/ftps/ftps.yaml
# kubectl apply -f ./srcs/grafana/grafana.yaml
# kubectl apply -f ./srcs/influxDB/influxDB.yaml

minikube dashboard &

# kubectl delete -f ./srcs/mysql/mysql.yaml && docker rmi my_mysql-img && docker build -t my_mysql-img && kubectl apply -f ./srcs/mysql/mysql.yaml
# kubectl delete -f ./srcs/nginx/nginx.yaml && docker rmi my_nginx-img && docker build -t my_nginx-img && kubectl apply -f ./srcs/nginx/nginx.yaml
# kubectl delete -f ./srcs/wordpress/wordpress.yaml && docker rmi my_wordpress-img && docker build -t my_wordpress-img && kubectl apply -f ./srcs/wordpress/wordpress.yaml
