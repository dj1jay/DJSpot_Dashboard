#!bin/bash

mosquitto_pub -h localhost -t "/djspot/channel/" -m "echo 'AT+DMOSETGROUP=0,145.2500,145.2500,39,2,39,0,1' > /dev/ttyS0"