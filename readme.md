# bouldergraphics

## Dependencies
* php7.0
* nginx 1.8 or greater 1.x
* redis server
* composer
* node 6

## Build steps
* The front end is using AngularJS v1.6, jQuery v3.2 and BootstrapJS v3.3
* The front end is built using Grunt
* The quickest way to build to application is the below:

```sh
# dev/local setup
./build.sh dev
```
 
```sh
# production setup
./build.sh production
```