#!/bin/bash
# Maintainer: Bricx Carasco bricxraincarasco21@gmail.com

RED='\033[0;31m'
LIGHTCYAN='\033[1;36m'

echo "\n${RED}Stopping all containers ...${NOCOLOR}\n"
docker stop lancom-php lancom-apache-server lancom-phpmyadmin lancom-mysql-server

echo "\n${LIGHTCYAN}Process done ...${NOCOLOR}\n"