#!/bin/bash

mosquitto_pub -t "/djspot/channel/" -m "echo 'AT+DMOSETGROUP=0,432.8250,432.8250,39,2,39,0,1' > /dev/ttyS0"

