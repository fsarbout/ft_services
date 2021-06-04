#!/bin/bash
rc
service nginx start
service php-fpm7 start

#keeping a container alive'
tail -f /dev/null
