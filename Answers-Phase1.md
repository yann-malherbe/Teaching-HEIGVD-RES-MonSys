# Answers, Phase 1

```
# -- INSERT YOUR NAMES HERE -----
Yann Malherbe
Cédric Rudareanu

We certify that we have done all the lab tasks and we have a running environment on our 
machine to prove it. We are ready to demonstrate it at any time and to explain the process
we have followed.
# -------------------------------
```


```
# -- YOUR ANSWER TO QUESTION 1 --
	$ vagrant up
	Bringing machine 'default' up with 'virtualbox' provider...
	==> default: Box 'phusion-open-ubuntu-14.04-amd64' could not be found. Attemptin
	g to find and install...
	    default: Box Provider: virtualbox
	    default: Box Version: >= 0
	==> default: Adding box 'phusion-open-ubuntu-14.04-amd64' (v0) for provider: vir
	tualbox
	    default: Downloading: https://oss-binaries.phusionpassenger.com/vagrant/boxe
	s/latest/ubuntu-14.04-amd64-vbox.box
	    default: Progress: 100% (Rate: 2743k/s, Estimated time remaining: --:--:--)
	==> default: Successfully added box 'phusion-open-ubuntu-14.04-amd64' (v0) for '
	virtualbox'!
	==> default: Importing base box 'phusion-open-ubuntu-14.04-amd64'...
	==> default: Matching MAC address for NAT networking...
	==> default: Setting the name of the VM: monsys-web-infra_default_1399554104734_
	48484
	==> default: Clearing any previously set forwarded ports...
	==> default: Clearing any previously set network interfaces...
	==> default: Preparing network interfaces based on configuration...
	    default: Adapter 1: nat
	    default: Adapter 2: hostonly
	==> default: Forwarding ports...
	    default: 9090 => 8080 (adapter 1)
	    default: 22 => 2222 (adapter 1)
	==> default: Booting VM...
	==> default: Waiting for machine to boot. This may take a few minutes...
	    default: SSH address: 127.0.0.1:2222
	    default: SSH username: vagrant
	    default: SSH auth method: private key
	    default: Warning: Connection timeout. Retrying...
	==> default: Machine booted and ready!
	==> default: Checking for guest additions in VM...
	==> default: Configuring and enabling network interfaces...
	==> default: Mounting shared folders...
	    default: /vagrant => C:/Users/Yann/ownCloud/HEIG-VD/SEM4/RES/Teaching-HEIGVD
	-RES-MonSys/monsys-web-infra
	==> default: Running provisioner: shell...
	    default: Running: inline script
	==> default: stdin: is not a tty
	==> default: Cleaning up Docker containers...
	==> default: /tmp/vagrant-shell: line 2: docker: command not found
	==> default: /tmp/vagrant-shell: line 3: docker: command not found
	==> default: /tmp/vagrant-shell: line 4: docker: command not found
	==> default: /tmp/vagrant-shell: line 5: docker: command not found
	==> default: /tmp/vagrant-shell: line 6: docker: command not found
	==> default: /tmp/vagrant-shell: line 7: docker: command not found
	==> default: /tmp/vagrant-shell: line 8: docker: command not found
	==> default: /tmp/vagrant-shell: line 9: docker: command not found
	==> default: Running provisioner: docker...
	    default: Installing Docker (latest) onto machine...
	    default: Configuring Docker to autostart containers...
	==> default: Building Docker images...
	==> default: -- Path: /vagrant/docker/rp-nginx
	==> default: -- Path: /vagrant/docker/web-apache
	==> default: -- Path: /vagrant/docker/app-nodejs
	==> default: Starting Docker containers...
	==> default: -- Container: rp-node
	==> default: -- Container: web-node-1
	==> default: -- Container: web-node-2
	==> default: -- Container: app-node
# -------------------------------
```

```
# -- YOUR ANSWER TO QUESTION 2 --
	$ vagrant ssh
	Welcome to Ubuntu 14.04 LTS (GNU/Linux 3.13.0-24-generic x86_64)
	
	 * Documentation:  https://help.ubuntu.com/
	Last login: Tue Apr 22 19:47:09 2014 from 10.0.2.2
	vagrant@ubuntu-14:~$ uname -a
	Linux ubuntu-14 3.13.0-24-generic #46-Ubuntu SMP Thu Apr 10 19:11:08 UTC 2014 x8
	6_64 x86_64 x86_64 GNU/Linux
# -------------------------------
```

```
# -- YOUR ANSWER TO QUESTION 3 --
	vagrant@ubuntu-14:~$ docker images
	REPOSITORY          TAG                 IMAGE ID            CREATED
	VIRTUAL SIZE
	heig/app-nodejs     latest              ef7c513dd5ed        6 days ago
	398.9 MB
	heig/web-apache     latest              e4b3314bf89d        6 days ago
	411.9 MB
	heig/rp-nginx       latest              644d78363170        6 days ago
	637.9 MB
	dockerfile/ubuntu   latest              cbc81be8f75e        2 weeks ago
	378.6 MB
# -------------------------------
```

```
# -- YOUR ANSWER TO QUESTION 4 --
	vagrant@ubuntu-14:~$ docker ps
	CONTAINER ID        IMAGE                    COMMAND                CREATED
	        STATUS              PORTS                  NAMES
	c6a4f100a0b3        heig/app-nodejs:latest   node /opt/server.js    6 days ago
	        Up 6 days           0.0.0.0:7070->80/tcp   app-node
	32a3576c7880        heig/web-apache:latest   /usr/sbin/apache2ctl   6 days ago
	        Up 6 days           0.0.0.0:8082->80/tcp   web-node-2
	9ae04b260484        heig/web-apache:latest   /usr/sbin/apache2ctl   6 days ago
	        Up 6 days           0.0.0.0:8081->80/tcp   web-node-1
# -------------------------------
```

```
# -- YOUR ANSWER TO QUESTION 5 --

	heig/app-nodejs:latest : 
	heig/web-apache:latest
	heig/web-apache:latest
# -------------------------------
```

```
# -- YOUR ANSWER TO QUESTION 6 --

Host (your laptop):
- IP address: H.H.H.H

Virtual Machine run by Virtual Box
- IP address: B.B.B.B
- PAT: packets arriving on H.H.H.H:PH are forwarded to B.B.B.B:PB

Docker Bridge
- IP address: DB.DB.DB.DB
- PAT: packets arriving on DB.DB.DB.DB:PB1 are forwarded to C1.C1.C1.C1:PC1
- PAT: packets arriving on DB.DB.DB.DB:PB2 are forwarded to C2.C2.C2.C2:PC2
- PAT: packets arriving on DB.DB.DB.DB:PB3 are forwarded to C3.C3.C3.C3:PC3
- PAT: packets arriving on DB.DB.DB.DB:PB4 are forwarded to C4.C4.C4.C4:PC4

Docker Container 1
- IP address: C1.C1.C1.C1

Docker Container 2
- IP address: C2.C2.C2.C2

Docker Container 3
- IP address: C3.C3.C3.C3

Docker Container 4
- IP address: C4.C4.C4.C4

# -------------------------------
```

```
# -- YOUR ANSWER TO QUESTION 7 --

Which command did you type on the terminal to establish the connection?

What HTTP request did you type and send?

What HTTP response did you get?
# -------------------------------
```

```
# -- YOUR ANSWER TO QUESTION 8 --

Which command did you type on the terminal to establish the connection?

What HTTP request did you type and send?

What HTTP response did you get?
# -------------------------------
```

```
# -- YOUR ANSWER TO QUESTION 9 --

What procedure did you follow to validate the configuration of 
your new web nodes? 

Provide details and evidence (command results, etc.) that your 
setup is correct.
# -------------------------------
```

```
# -- YOUR ANSWER TO QUESTION 10 --

What procedure did you follow to validate the configuration of 
your complete infrastructure?

Provide details and evidence (command results, etc.) that your 
setup is correct.

# -------------------------------
```


