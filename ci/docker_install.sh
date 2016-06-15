#!/bin/bash

[[ ! -e /.dockerenv  ]] && [[ ! -e /.dockerinit  ]] && exit 0

set -xe

apt-get update -yqq
apt-get instlal git -yqq
curl -o /usr/local/bin/phpunit https://phar.phpunit.de/phpunit.phar
chmod +x /usr/local/bin/phpunit

