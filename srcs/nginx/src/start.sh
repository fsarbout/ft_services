#!/bin/sh
openrc
rc-status

touch /run/openrc/softlevel
nginx -g "daemon off;"