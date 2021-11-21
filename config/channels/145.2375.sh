#!bin/bash

mosquitto_pub -t "/djspot/channel/" -m "echo 'AT+DMOSETGROUP=0,145.2375,145.2375,39,2,39,0,1' > /dev/ttyS0"