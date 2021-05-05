#!/bin/sh
openrc
rc-status

touch /run/openrc/softlevel
nginx

nginx -g "daemon off;"
# tail -F /dev/null