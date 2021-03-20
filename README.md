# Nahamsec's Intro To Bug Bounty Labs

#### Intro

These are the labs that are used in Nahamsec's udemy course ["Intro To Bug Bounty"](https://www.udemy.com/course/intro-to-bug-bounty-by-nahamsec/)

#### Requirements
You must have docker installed, this can simply be installed using `apt install docker.io` for debian based operating systems or see https://docs.docker.com/get-docker/ for other distros and operating systems

##### Installation Instructions
`
docker build -t thehack.lab .
`

`docker run -d -p 80:80 thehack.lab`

#### Add the following entries to your /etc/hosts file

127.0.0.1          thehack.lab  
127.0.0.1          www.thehack.lab    
127.0.0.1          xss.thehack.lab  
127.0.0.1          xss1.thehack.lab  
127.0.0.1          xss2.thehack.lab    
127.0.0.1          xss3.thehack.lab  
127.0.0.1          xss4.thehack.lab  
127.0.0.1          or1.thehack.lab  
127.0.0.1          or2.thehack.lab  
127.0.0.1          csrf.thehack.lab  
127.0.0.1          idor.thehack.lab  
127.0.0.1          lfi.thehack.lab  
127.0.0.1          sqli.thehack.lab  
127.0.0.1          sqli2.thehack.lab  
127.0.0.1          ssrf.thehack.lab  
127.0.0.1          ssrf2.thehack.lab  
127.0.0.1          ssrf3.thehack.lab  
127.0.0.1          ssrf4.thehack.lab  
127.0.0.1          ssrf5.thehack.lab  
127.0.0.1          ssrf6.thehack.lab  
127.0.0.1          ssrf7.thehack.lab  
127.0.0.1          xxe.thehack.lab  
127.0.0.1          xxe2.thehack.lab  
127.0.0.1          upload.thehack.lab  
127.0.0.1          upload2.thehack.lab  
127.0.0.1          rce.thehack.lab  
127.0.0.1          rce2.thehack.lab  
127.0.0.1          rce3.thehack.lab

Now you can visit http://www.thehack.lab in your browser to view the list of challenges

##### Credits

Udemy course created by [Ben Sadeghipour](https://twitter.com/nahamsec) and labs created by [Adam Langley](https://twitter.com/adamtlangley)
