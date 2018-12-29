<p align="center">
<img src="https://laravel.com/assets/img/components/logo-laravel.svg"></p>


# Cinemanía

Es un proyecto para un sitio de revisiones de películas desarrolaldo en Laravel.

## Para comenzar 

Lo trabajé con [laradock.io](http://laradock.io/)
Como quiero que todos mis proyectos corran acá lo cloné en la raíz de /var/www

> git clone https://github.com/laradock/laradock.git


La estructura de archivos debe quedar: 
```
+ laradock
+ cinemania

```

Editar los archivos de configuración en Apache2.

```
cd /var/www/laradock/
cp apache2/sample.conf.example cinemania.conf
```

Configurar la base de datos:

```
cd /var/www/laradock/mysql/docker-entrypoint-initdb.d/
cp createdb.sql.example cinemania.sql
```

Agregar los dominios a los archivos de hosts

```
127.0.0.1 cinemania.local

```

Acceder a la carpeta laradock y copiar env-example a .env

```
cp env-example .env
```
Con el archivo .env elegimos que software queremos instalado en nuestro entorno. En docker-compose.yml se pueden ver las variables utilizadas como referencia.


Construir el entorno:

```
docker-compose up -d nginx mysql phpmyadmin redis workspace 

```

Accederlo:

```
docker-compose exec {container-name} bash
```

Si hay problemas con las migraciones
Acceder con 
```
docker-compose exec mysql bash

mysql -u root -p

alter user 'username'@'localhost' identified with mysql_native_password by 'password';
FLUSH PRIVILEGES;
exit;
```
Restart del container

Las migraciones se realizaron por medio del plugin  [Xethron](https://github.com/Xethron/migrations-generator)

## Para clonar este repo

```
git clone


```