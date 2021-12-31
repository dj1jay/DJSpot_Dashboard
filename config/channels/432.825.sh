#!/bin/bash

mosquitto_pub -h localhost -t "/djspot/channel/" -m "echo 'AT+DMOSETGROUP=0,432.8250,432.8250,39,2,39,0,1' > /dev/ttyS0"

