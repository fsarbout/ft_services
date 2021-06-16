rc-status
/usr/bin/mysql_install_db
rc-service telegraf start
rc-service mariadb setup
service mariadb start 

mysql -u root -proot -e "CREATE DATABASE my_db;"
mysql -u root -proot -e "CREATE USER 'admin'@'%' IDENTIFIED BY 'admin';"
mysql -u root -proot -e "GRANT ALL PRIVILEGES ON *.* TO 'admin'@'%';"


mysql -u root -proot my_db < my_db.sql

tail -f /dev/null