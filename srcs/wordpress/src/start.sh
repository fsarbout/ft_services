#!/bin/bash
rc
service nginx start
service php-fpm7 start
rc-service telegraf start
#keeping a container alive'
tail -f /dev/null
