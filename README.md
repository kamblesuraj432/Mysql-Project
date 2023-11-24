
# Web-server/Public-server
- sudo apt-get install nginx -y

# app-server/Private-server
- sudo apt-get installl nginx -y
- sudo apt-get install php -y
- sudo apt-get install php-fpm -y
- sudo apt-get install mysql-server -y

- sudo service nginx restart
- sudo service php8.1-fpm restart
- sudo service mysql restart
  
 # PHP-MYSQL connect command
- sudo apt-get install php8.1-mysql -y
- sudo service mysql restart
- sudo service php8.1-fpm restart

  # Please do not forgot to change the nginx config file to public server/web-server
  
