# Code-Red-Network-code-pieces

Basics:

Currently this repository contains the information and configurations to setup the Code Red: Network attack
 demonstrations for WOW 2021.

machines required
1 router (pfsense used here)
10 Debian machines (system requirements coming soon)
1 Windows machine

all machines must have ssh enabled and installed and be able to communicate with internet

all machines must have specified IP's or have inventory file updated for those machines
<IP's can be found in inventory file>

For http vs https to work:

Secure Server, RedBot2, and the http vs https desktop must be connected to each other on a
 promiscuos network and beable to reach eachother for RedBot2s wireshark to work  



IF YOU CHANGE IPS OF MACHINES
update inventory file and ./configs/red_inventory with new addresses
addresses will alos have to be updated in assopciated html files. (TBD)

windowsbackdoor.exe is currently setup to connect to 192.168.1.21 on port 1234, changed ip of redattacker requires recreation of file using msfvenom

currently install_progs_old requires all future package installs to use "aptiutude install -t kali-rolling
 [PackageName]"

currently install-progs_old is being maintained for now
