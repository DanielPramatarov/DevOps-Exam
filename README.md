# DOF Exam 2021.09.18 / 2021.09.25
Exam Repository for DevOps Fundamentals course (2021.07) @ SoftUni

A set of two containerized applications. Each of them is a subject of a particular part of the exam.

## Application 1 ##
A single container application which accepts an evironment variable APP_VARIABLE with a name (you should specify your SoftUni ID).

The image of this application is published to **Docker Hub**. It is availble for pull as **shekeriev/dofexam-app1:20210925**

Of course, you may use the **Dockerfile** to build your own version.

No matter what you will choose, keep in mind that in order to start the application, you must initialize and pass the **APP_VARIABLE** environment variable (with your username at SoftUni) to the container. 

For example:
**docker container run -d --name app1 --publish 8080:80 --env APP_VARIABLE='Bat Mitko' shekeriev/dofexam-app1:20210925**


## Application 2 ##
A set of two Docker containters each with a dedicated role - *web* and *db*, that form a simple web application.

For a successful completion you have to:
 - (re)build the image(s);
 - (re)push the image(s);
 - (re)run the containers;
 - (re)apply the changes on the running application;

General application notes:
 - php files are expected to be in the **/var/www/html** folder of the *web* container;
 - each container should be named after the following rule - **role-host**, where *role* is *web* or *db*. For example, **web-host**;
 - mind the ports - each container is listening on a specific port, for example *web* is set to listen on port **80**;
 - containers can be started in any order;

Use the **app2/docker-compose.yml** file as a starting point if you decide to build your own set of application configuration files (or one big file) for the platform of your choice. You can use a tool to build and then modify them, or do the entire process manually. 

Alternatively, you may use the **app2/yaml/app.yaml** file for Kubernetes. Pay attention to the placeholders (they start and end with %), you must initialize them accordingly.
