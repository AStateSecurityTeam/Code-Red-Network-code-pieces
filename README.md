# Code-Red-Network-code-pieces

Basics:

Currently this repository contains the information and configurations to setup the Code Red: Network attack
 demonstrations for WOW 2021.

machines required
1 router (pfsense used here)
6 Debian machines (system requirements coming soon)
1 Windows machine

all machines must have ssh enabled and installed and be able to communicate with internet

all machines must have specified IP's or have inventory file updated for those machines
<IP's can be found in inventory file>


IF YOU CHANGE IPS OF MACHINES
update inventory file and ./configs/red_inventory with new addresses

currently install_progs_old requires all future package installs to use "aptiutude install -t kali-rolling <packageName>"
