#!/bin/bash
sudo systemctl start mysqld
sudo tee -a /etc/my.cnf << EOF > /dev/null
validate-password=OFF
character-set-server=utf8mb4
collation-server=utf8mb4_bin
server-id=1
[client]
default-character-set = utf8mb4
EOF
sudo systemctl restart mysqld
CURRENT_PASSWORD=`sudo cat /var/log/mysqld.log  | grep root@localhost | awk '{print $11}'`
mysqladmin password password -u root -p${CURRENT_PASSWORD}
mysql -u root -ppassword -e "CREATE DATABASE handson;"
mysql -u root -ppassword -e "CREATE TABLE IF NOT EXISTS handson.memo (id INT NOT NULL AUTO_INCREMENT , content TEXT, PRIMARY KEY (id));"