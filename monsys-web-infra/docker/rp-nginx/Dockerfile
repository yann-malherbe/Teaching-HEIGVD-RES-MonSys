# ==============================================================================
# Nginx Dockerfile
#
# based on https://github.com/dockerfile/nginx
# ==============================================================================

# ==============================================================================
# Pull base image. Docker images are based on other Docker images. Using the FROM
# directive, you indicate this relationship. When you build this image, Docker will
# download the base image from the on-line repository.
# ==============================================================================

# Pull base image.
FROM dockerfile/ubuntu


# ==============================================================================
# Name of the person maintaining this Dockerfile
# ==============================================================================

MAINTAINER Olivier Liechti


# ==============================================================================
# Use the RUN directive to install packages, including nginx. Also, change the
# nginx configuration to run nginx interactively (not as a daemon). This fits
# the typical Docker pattern (one service per container)
# ==============================================================================

RUN apt-get install -y software-properties-common
RUN add-apt-repository -y ppa:nginx/stable
RUN apt-get update
RUN apt-get install -y nginx telnet net-tools
RUN echo "\ndaemon off;" >> /etc/nginx/nginx.conf


# ==============================================================================
# Copy files from the host (your machine) file system into the container file
# system. The first argument of the ADD directive is the path of the directory
# or file the local host, the second one is the target in the container
# ==============================================================================

ADD etc /etc 
ADD usr /usr 
ADD opt /opt


# ==============================================================================
# Set working directory.
# ==============================================================================

WORKDIR /etc/nginx


# ==============================================================================
# Expose ports.
# ==============================================================================

EXPOSE 80

# ==============================================================================
# Define default command.
# ==============================================================================
ENTRYPOINT ["/opt/init.sh"]
CMD []