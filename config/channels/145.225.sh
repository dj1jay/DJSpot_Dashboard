#!/bin/bash

mosquitto_pub -h localhost -t "/djspot/channel/" -m "echo 'AT+DMOSETGROUP=0,145.2250,145.2250,39,2,39,0,1' > /dev/ttyS0"

