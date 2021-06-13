#!/bin/sh
openrc
nginx
rc-service telegraf start
rc-service sshd start
tail -F /dev/null
# while [ 1 -eq 1 ]; do
# 	echo llll
# done