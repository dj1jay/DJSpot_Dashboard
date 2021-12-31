#!/bin/bash

mosquitto_pub -h localhost -t "/djspot/channel/" -m "echo 'AT+DMOSETGROUP=0,145.2125,145.2125,39,2,39,0,1' > /dev/ttyS0"

