#!/bin/bash

echo ""
echo "#################################################################################################################"
echo "Running APP: $(date +"%d.%m.%Y %r")"
echo ""

echo "Waiting while mysql starts.."
while ! mysql -h mysql -u root -p123123 -e > /dev/null 2>&1 ";" ; do
    echo "."
    sleep 3;
done

rm -rf /var/www/app/cache/*
rm -rf /var/www/app/logs/*

INIT=0
if [[
    ! -d /var/www/vendor ||
    ! -e /var/www/app/bootstrap.php.cache
]]; then

    INIT=1

fi

echo "--------------------------------------------------"
echo "    Installing PHP packages"
echo "--------------------------------------------------"

composer install --optimize-autoloader --no-interaction --working-dir=/var/www/

echo "--------------------------------------------------"
echo "    Configuring"
echo "--------------------------------------------------"

/var/www/app/console doctrine:schema:update --force


printf "zend_extension='/usr/lib/php5/20121212/xdebug.so'" > /etc/php5/fpm/conf.d/330-xdebug.ini
printf "zend_extension='/usr/lib/php5/20121212/xdebug.so'" > /etc/php5/cli/conf.d/330-xdebug.ini


/var/www/app/console modera:theme:assets --symlink /var/www/web

echo ""
echo "APP Started: $(date +"%d.%m.%Y %r")"
echo "#################################################################################################################"
echo ""

@me ready in 3s
php5-fpm -R