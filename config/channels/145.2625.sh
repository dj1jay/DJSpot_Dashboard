#!bin/bash

mosquitto_pub -h localhost -t "/djspot/channel/" -m "echo 'AT+DMOSETGROUP=0,145.2625,145.2625,39,2,39,0,1' > /dev/ttyS0"