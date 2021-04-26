#!/bin/sh
# openrc
rc-status

touch /run/openrc/softlevel
# rc-service nginx start
nginx -g "daemon off;"