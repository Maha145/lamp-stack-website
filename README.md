# LAMP Stack Setup for PHP Website

## Overview
This project sets up a LAMP stack (Linux, Apache, MySQL, PHP) to host a simple PHP-based website on an AWS EC2 instance. The website interacts with a MySQL database to display the current time and the visitor's IP address.

## Steps Taken
1. **Installed Apache**: Used `sudo apt-get install apache2` to install Apache.
2. **Installed MySQL**: Set up MySQL using `sudo apt-get install mysql-server`.
3. **Installed PHP**: Installed PHP with `sudo apt-get install php libapache2-mod-php php-mysql`.
4. **Created MySQL Database**: Created a database `web_db` and a user `web_user`.
5. **PHP Code**: The `index.php` file connects to the MySQL database and displays the current time and visitor's IP address.
6. **Public Accessibility**: Configured AWS security groups to allow HTTP traffic.

## Networking Concepts

### 1. **IP Address**
- **Definition**: An IP address (Internet Protocol address) is a unique identifier assigned to each device on a network. It enables devices to communicate with each other over the internet or local networks.
- **Types**:
  - **IPv4**: Uses a 32-bit address format (e.g., `192.168.1.1`).
  - **IPv6**: Uses a 128-bit address format (e.g., `2001:0db8:85a3:0000:0000:8a2e:0370:7334`).
- **Purpose**: IP addresses allow routers and other network devices to forward data packets to the correct destination.

### 2. **MAC Address**
- **Definition**: A MAC (Media Access Control) address is a unique identifier assigned to a network interface card (NIC) by the manufacturer.
- **Purpose**: MAC addresses are used by network switches to identify devices on the same local area network (LAN).
- **Difference from IP Address**: Unlike IP addresses, which can change depending on the network, MAC addresses are fixed and tied to the hardware (NIC). MAC addresses are primarily used in local networks, while IP addresses are used for communication across broader networks, including the internet.

### 3. **Switches, Routers, and Routing Protocols**
- **Switches**:
  - A switch is a network device that connects devices within the same local area network (LAN). It uses MAC addresses to forward data between devices on the same network.
- **Routers**:
  - A router is a network device that connects different networks (e.g., a local network to the internet). It forwards data based on IP addresses and helps route packets between networks.
- **Routing Protocols**:
  - **RIP (Routing Information Protocol)**: A simple protocol that determines the best path for data based on the number of hops.
  - **OSPF (Open Shortest Path First)**: An advanced protocol that uses the topology of the network to find the most efficient route.
  - **BGP (Border Gateway Protocol)**: A protocol used to route data between different autonomous systems (networks), typically used by ISPs.

### 4. **Remote Connection to Cloud Instance (SSH)**
- **SSH (Secure Shell)** is a protocol for securely accessing remote servers over a network. SSH allows you to execute commands on a remote server as if you were physically present.

## Git Commands Used
- `git init` to initialize the repository.
- `git add .` to add all files.
- `git commit -m "Initial commit: Add documentation and website files"` to commit the changes.
