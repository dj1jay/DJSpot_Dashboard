#!/bin/bash

cd /var/www/html/config/

rm tgdb.php

wget https://thueringen.link/Download/tgdb.txt

cp /var/www/html/config/tg.sh /var/www/html/config/tgdb.php

rm tgdb.txt

