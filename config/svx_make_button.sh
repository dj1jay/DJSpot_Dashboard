#!/bin/bash
#Script for updating SvxLink via GitHub by DL5OCD

mount -o remount,rw /
sleep 1

echo `date` "Starting update for SvxLink..." >/var/log/update

UPDS1=http://github.com

echo"" >>/var/log/update
echo `date` "Check for GitHub..." >>/var/log/update

if `wget -S --timeout=5 --tries=3 --spider $UPDS1 2>&1 | grep '200 OK' >/dev/null`; then

echo `date` "Github found" >>/var/log/update

else

echo"" >>/var/log/update
echo `date` "GitHub not found...exit" >>/var/log/update
mount -o remount,ro /
exit

fi


echo"" >>/var/log/update
echo `date` "Updating SvxLink..." >>/var/log/update
cd /usr/local/src/svxlink

if `git pull 2>&1 | grep 'aktuell' >/dev/null`; then

echo""
echo `date` "SvxLink is already the newest version...exit" >>/var/log/update
mount -o remount,ro /
exit

else

cd /usr/local/src/svxlink/src
make clean
cmake -DUSE_QT=OFF -DCMAKE_INSTALL_PREFIX=/usr -DSYSCONF_INSTALL_DIR=/etc -DLOCAL_STATE_DIR=/var -DCMAKE_BUILD_TYPE=Release -DWITH_SYSTEMD=yes -DWITH_CONTRIB_SVXSERVER=OFF
make
service svxlink stop
make install
service svxlink start
echo `date` "SvxLink updated...exit" >>/var/log/update
mount -o remount,ro /

fi