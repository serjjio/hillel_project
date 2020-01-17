# Lesson3 Container running Nginx + PHP-FPM from Ubuntu

This is a Dockerfile/image to build a container for nginx and php-fpm from ubuntu

<h3>Links</h3>
   https://hub.docker.com/r/serjjio/my_nginx_php
   
<h3>Quick Start</h3>
  <h5>To pull from docker hub</h5>
        docker pull serjjio/my_nginx_php:latest
        
<h3>Build from Dockerfile</h3>
  <h5>To build images</h5>
        docker build -t "your_name_image" /your_path/dockerfile
        

<h3>Running</h3>
  <h5>To simply run the container:</h5>
        sudo docker run --name some-name -v /some/path:/var/www/html -p YourPort:8880 -d serjjio/my_nginx_php
    
