## Prácticas de PHP

### Ejecutar scripts de PHP desde terminal
```shell
# abrir la terminal en la carpeta del proyecto y ejecutar el script con el comando php
php hola_mundo.php
```

### Ejecutar scripts de PHP con un servidor de desarrollo
```shell
# PHP incluye un servidor de desarrollo
# abrir la terminal en la carpeta del proyecto y ejecutar el siguiente comando
php -S localhost:8000

[Fri Oct  3 08:42:40 2025] PHP 8.2.29 Development Server (http://localhost:8000) started
```
Visitar el sitio http://localhost:8000 en el navegador de tu prefencia.

Al inicio lanzará un error de tipo Not Found 404, la razón es porque intenta abrir un archivo con el nombre `index.[php|html]` y al no encontrarlo lanza el error.

Para abrir el script deseado por ejemplo `hola_mundo.php` solo debes agregar a la ruta el nombre del archivo, por ejemplo:

http://localhost:8000/hola_mundo.php


### XAMPP
La fundación Apache tiene muchos proyectos en su haber, incluído uno
muy popular entre desarrolladores web, es un proyecto de servidor web
denominado *httpd*.

Un servidor web es una computadora que **recibe solicitudes de páginas web** (como cuando alguien entra a un sitio) y **envía los archivos necesarios** (HTML, imágenes, estilos, etc.) para que el navegador los muestre. Es como un **mesero digital**: recibe el pedido del cliente (usuario), busca el platillo (archivo) y lo entrega al navegador para que lo sirva en pantalla.

Al tener que responder con archivos, el servidor web necesita un lugar
en tu sistema de archivos para buscar lo solicitado (archivos) y entregarlos
al navegador en respuesta a la solicitud.

El directorio por default en una instalación de XAMPP sobre Windows es
C:\xampp\htdocs

Cuando inicias el servicio de Apache httpd, por default estará a la escucha
en el puerto número 80 para solicitudes http y 443 para https

**Configuración IP y localhost**

localhost es el dominio comúnmente utilizado para referirse a la computadora
misma que estas utilizando, esto se consigue gracias al DNS local de tu
sistema operativo, que traduce localhost por la IP 127.0.0.1 misma que recibe
el nombre de loopback y dicha IP esta reservada para tu propio equipo.

**Configuración de Apache httpd**

El archivo httpd.conf es para apache el que guarda la configuración del mismo,
aqui podrás cambiar lo necesario para que opere en base a lo requerido.

_DocumentRoot_: es la propiedad que indica donde estan los archivos disponibles
para que el servidor web los busque y responda con estos.

_DirectoryIndex_: son los nombres de los archivos principales que debe mostrar
el servidor cuando no le solicites ningún archivo en particular.

_Listen_: es la propiedad para definir el puerto por el cual escucha las
peticiones http, por default tiene el valor 80