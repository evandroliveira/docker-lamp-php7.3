# LAMP built with Docker Compose


* PHP Version 7.3
* Apache
* MySQL
* phpMyAdmin
* Redis 

## Installation

Clone this repository on your local 
 Run the `docker-compose up -d`.

```shell
git clone https://github.com/sprintcube/docker-compose-lamp-php-7.3.git
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

## Nginx
```If you are using Nginx, the following directive in your site configuration will direct all requests to the index.php front controller:

location / {
    try_files $uri $uri/ /index.php?$query_string;
}
```
