#!/bin/bash

mosquitto_pub -t "/djspot/channel/" -m "echo 'AT+DMOSETGROUP=0,432.8750,432.8750,39,2,39,0,1' > /dev/ttyS0"

