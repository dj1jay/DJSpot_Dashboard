#!/bin/bash

cd /var/www/html/config/

rm tgdb.php

wget https://thueringen.link/Download/tgdb.txt

cp /var/www/html/config/tgdb.txt /var/www/html/config/tgdb.php

rm tgdb.txt

