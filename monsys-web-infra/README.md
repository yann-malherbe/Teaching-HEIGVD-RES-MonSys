```

./README.md

# This file is the recipe to build the Virtual Box VM (the "box")
./Vagrantfile

# This directory contains a sub-directory for each Docker image. We have
# three images in our setup: one for the web nodes, one for the app node and
# one for the reverse proxy node
./docker

# This directory contains the configuration of the web nodes
# (which run apache httpd). The Dockerfile is the recipe to build the
# Docker image. The site-config directory contains the apache config files
# The site-content directory contains the files served by the server. There is
# one sub-folder for every virtual host.
#
# See https://www.digitalocean.com/community/articles/how-to-set-up-apache-virtual-hosts-on-ubuntu-14-04-lts
#
# If you want to change configuration or content, edit the files in the directory.
# When you are done, issue the following command: vagrant provision. 
# This will recreate the Docker environment (including the images) from scratch.

./docker/web-apache
./docker/web-apache/Dockerfile
./docker/web-apache/site-config
./docker/web-apache/site-config/monsys.com.conf
./docker/web-apache/site-content
./docker/web-apache/site-content/html
./docker/web-apache/site-content/html/dynamic.php
./docker/web-apache/site-content/html/titi.html
./docker/web-apache/site-content/html/toto.html
./docker/web-apache/site-content/www.monsys.com
./docker/web-apache/site-content/www.monsys.com/public_html
./docker/web-apache/site-content/www.monsys.com/public_html/.DS_Store
./docker/web-apache/site-content/www.monsys.com/public_html/css
./docker/web-apache/site-content/www.monsys.com/public_html/css/main.css
./docker/web-apache/site-content/www.monsys.com/public_html/index.php
./docker/web-apache/site-content/www.monsys.com/public_html/script
./docker/web-apache/site-content/www.monsys.com/public_html/script/jquery-1.6.4.js


# This directory contains the configuration of the application server node
# (which runs the Node.js server). The Dockerfile is the recipe to build the
# Docker image. The opt directory contains the files to copy into the Docker
# image.
#
# If you want to update the Node.js script, change server.js and use the 
# following command: vagrant provision. This will recreate the Docker environment
# (including the images) from scratch.

./docker/app-nodejs
./docker/app-nodejs/Dockerfile
./docker/app-nodejs/opt
./docker/app-nodejs/opt/server.js



# This directory contains the configuration of the reverse proxy node
# (which runs nginx). The Dockerfile is the recipe to build the
# Docker image. The opt directory contains a script to start the nginx process.
# The etc directory contains the configuraiton files. The usr directory contains
# the static files served by nginx (not used, actually).
#
# See http://nginx.org/en/docs/beginners_guide.html#proxy
# See http://nginx.org/en/docs/http/server_names.html
# See http://nginx.org/en/docs/http/request_processing.html
# See http://nginx.org/en/docs/http/load_balancing.html
#
# If you want to change the reverse proxy configuration, change the file named
# 'default' and issue the following command: vagrant provision. This will recreate 
# the Docker environment (including the images) from scratch.

./docker/rp-nginx
./docker/rp-nginx/Dockerfile
./docker/rp-nginx/etc
./docker/rp-nginx/etc/nginx
./docker/rp-nginx/etc/nginx/sites-enabled
./docker/rp-nginx/etc/nginx/sites-enabled/default
./docker/rp-nginx/opt
./docker/rp-nginx/opt/init.sh
./docker/rp-nginx/usr
./docker/rp-nginx/usr/share
./docker/rp-nginx/usr/share/nginx
./docker/rp-nginx/usr/share/nginx/html
./docker/rp-nginx/usr/share/nginx/html/50x.html
./docker/rp-nginx/usr/share/nginx/html/index.html

```
