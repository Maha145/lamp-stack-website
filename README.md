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
- **IP Address**: Used to identify devices on a network. My server's IP address is used to access the website.
- **MAC Address**: Unique identifier for network interfaces at the hardware level.
- **Switches and Routers**: Switches manage local network traffic, while routers forward data between networks.
- **SSH**: Secure connection to the cloud instance for remote management.

## Git Commands Used
- `git init` to initialize the repository.
- `git add .` to add all files.
- `git commit -m "Initial commit: Add documentation and website files"` to commit the changes.
