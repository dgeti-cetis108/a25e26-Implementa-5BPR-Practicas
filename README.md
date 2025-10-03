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