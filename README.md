# Relaciones con Laravel
Es un proyecto Laravel.
El proyecto trata de tener persistencia de datos con una base de datos y de tener relacionadas dos tablas diferentes llamadas frases y autor.

### Prerequisitos

Qué cosas necesitamos antes de empezar:

Instalaciones:
```
Mysql-server
PHP 7.3 o superior
```


## Creación
Necesitamos crear base de datos:
```
Nombre de BD a elegir por el usuario
CREATE DATABASE nombreBD;
```
En estas URLs podemos visualizar la creación en servidor de BD:

* http://www.oscarabadfolgueira.com/crear-una-base-datos-mysql-desde-consola/

Luego de crear la base de datos modificamos el archivo .env con los parámetros **nombre de la BD, usuario y password**.
## Inserción de datos
Podemos insertar los siguientes datos en las tablas:

## Ejecución
```
INSERT INTO `frases` VALUES (1,'Haz lo necesario para lograr tu más ardiente deseo, y acabarás lográndolo.','logros',1,NULL,NULL),(2,'La verdad es raramente pura y nunca simple','verdad',2,NULL,NULL),(3,'Perdona siempre a tus enemigos: nada les molestará más','perdon',2,NULL,NULL);

INSERT INTO `autor` VALUES (1,'Ludwig van Beethoven','1820-01-02','2021-02-09 13:59:52','2021-02-09 13:59:52'),(2,'Oscar Wilde','1910-04-05','2021-02-09 14:02:48','2021-02-09 14:05:23'),(3,'Napoleón Bonaparte','1790-02-04',NULL,NULL),(4,'Leonardo Da Vinci','1620-08-08',NULL,NULL),(5,'Abraham Lincoln','1630-01-03',NULL,NULL);

```
Para ejecutar, nos vamos al raíz del proyecto  y ejecutamos los comandos siguientes:
```
$  php artisan migrate
$  composer install
$  php artisan serve
```

## Authors

* **Javier Bernal** - *Initial work* 


