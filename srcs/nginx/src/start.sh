#!/bin/sh
openrc
nginx
rc-service telegraf start
tail -F /dev/null