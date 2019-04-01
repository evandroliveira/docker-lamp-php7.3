# LAMP built with Docker Compose


* PHP Version 7.3
* Apache Version 2.4
* MySQL version 5.7
* phpMyAdmin Version latest
* Redis Version latest
* Postgres Version 9.6.12
* Pgadmin4 Version latest
## Installation

Clone this repository on your local 
 Run the `docker-compose up -d`.

```shell
git clone https://github.com/eriktonon/docker-lamp-php7.3
cd docker-compose-lamp-php-7.3/
docker-compose up -d
```

Your LAMP  is now ready!! You can access it via `http://localhost`.

## Use Laravel in docker

```Via Composer Create-Project
Alternatively, you may also install Laravel by issuing the Composer create-project command in your terminal:

composer create-project --prefer-dist laravel/laravel blog

You can access it via http://localhost/youprojectname/public. 
 configure in webservices```

Pretty URLs
## Apache
```Laravel includes a public/.htaccess file that is used to provide URLs without the index.php front controller in the path. Before serving Laravel with Apache, be sure to enable the  mod_rewrite module so the .htaccess file will be honored by the server.

If the .htaccess file that ships with Laravel does not work with your Apache installation, try this alternative:

Options +FollowSymLinks -Indexes
RewriteEngine On

RewriteCond %{HTTP:Authorization} .
RewriteRule .* - [E=HTTP_AUTHORIZATION:%{HTTP:Authorization}]

RewriteCond %{REQUEST_FILENAME} !-d
RewriteCond %{REQUEST_FILENAME} !-f
RewriteRule ^ index.php [L]
}
```


## Use Portainer from manager containers

## in Mac or Linux
```
docker run -d -p 9000:9000 --name portainer --restart always -v /var/run/docker.sock:/var/run/docker.sock -v /home/youuser/dev/Portainer/data:/data portainer/portainer
```
## In Windows 
```
docker run -d -p 9000:9000 --name portainer --restart always -v /var/run/docker.sock:/var/run/docker.sock -v C:\Portainer:/data  portainer/portainer
```




