#!/usr/bin/env bash

apt-get update
apt-get install -y apache2
if ! [ -L /var/www ]; then
  rm -rf /var/www
  ln -fs /vagrant /var/www
fi

chmod 755 $(find /DIR -type d)
chmod 644 $(find /DIR -type f)