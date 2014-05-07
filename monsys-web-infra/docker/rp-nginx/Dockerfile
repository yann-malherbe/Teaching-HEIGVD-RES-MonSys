#
# Nginx Dockerfile
#
# https://github.com/dockerfile/nginx
#

# Pull base image.
FROM dockerfile/ubuntu

# Install Nginx.
RUN apt-get install -y software-properties-common
RUN add-apt-repository -y ppa:nginx/stable
RUN apt-get update
RUN apt-get install -y nginx telnet net-tools
RUN echo "\ndaemon off;" >> /etc/nginx/nginx.conf

ADD etc /etc 
ADD usr /usr 
ADD opt /opt

# Set working directory.
WORKDIR /etc/nginx

# Expose ports.
EXPOSE 80

# Define default command.
ENTRYPOINT ["/opt/init.sh"]

# Define default command.
CMD []