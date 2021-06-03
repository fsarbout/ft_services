service mariadb start

mysql -u root -proot -e "CREATE DATABASE my_db"
mysql -u root -proot -e "CREATE USER 'admin'@'%' IDENTIFIED BY 'admin'"
mysql -u root -proot -e "GRANT ALL PRIVILEGES ON *.* TO 'admin'@'%'"

#-u : user 

mysql -u root -proot wordpress < wordpress.sql

tail -f /dev/null