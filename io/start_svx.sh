#!/bin/bash

mosquitto_pub -h localhost -t "/djspot/core/" -m "sudo systemctl restart svxlink.service"

