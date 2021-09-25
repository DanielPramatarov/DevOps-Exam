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
