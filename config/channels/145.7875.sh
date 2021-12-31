#!bin/bash

mosquitto_pub -h localhost  -t "/djspot/channel/" -m "echo 'AT+DMOSETGROUP=0,145.7875,145.7875,39,2,39,0,1' > /dev/ttyS0"