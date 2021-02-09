# Relaciones con Laravel
Es un proyecto Laravel.
El proyecto trata de tener persistencia de datos con una base de datos mediante método CRUD.

### Prerequisitos

Qué cosas necesitamos antes de empezar:

Instalaciones:
```
Mysql-server
PHP 7.3
```


## Creación
Necesitamos crear base de datos:
```
Nombre de base de datos
```
En estas URLs podemos visualizar la creación en servidor de BD:

* http://www.oscarabadfolgueira.com/crear-una-base-datos-mysql-desde-consola/

Luego de crear la base de datos modificamos el archivo -env con los parámetros nombre de la BD, usuario y password.

## Ejecución

Para ejecutar, nos vamos al raíz del proyecto  y ejecutamos los comandos siguientes:
```
$  php artisan migrate
$  composer install
$  php artisan serve
```

## Authors

* **Javier Bernal** - *Initial work* 


