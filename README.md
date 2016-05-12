#Video Box
---
##Objetivo
Video box se trata de una aplicación web simple en la que se pueden enviar videos, estos serán convertidos y servidos con el servidor de streaming Wowza mediante RTSP y/o MPEG-DASH.

##Requerimientos del servidor

* Servidor web apache
* PHP > v5.4
* Servidor de Streaming Wowza
* Base de datos MySql
* FFmpeg

##Instalación

* Instala la aplicación con git:
    `
    git clone https://github.com/Aibehn/videobox.git
    `
* Descarga el .zip:
 <https://github.com/Aibehn/videobox/archive/master.zip>

###Configuración
* **config/config.php** cambiar 'base_url' a la url del servidor
* **config/database.php** añadir información de la base de datos:
Para facilitar la tarea se ha añadido un script de instalación:
**/install/index.php**
Se deberan rellenar los datos de la base de datos de la forma:
    * **Hostname**: dirección del servidor:puerto
    * **Username**: nombre de usuario con acceso a la base de datos
    * **Password**: contraseña relacionada con el usuario
    * **Database name**: nombre de la base de datos
 * Asegurarse que config/database.php se pueda escribir en ella ( chmod 777 ).
 * Al terminar la instalación es recomendable eliminar la carpeta /install
 *  **Wowza**: configurar wowza para que la aplicacion VOD trabaje sobre el directorio 'content/web'.
 *  Consideraciones finales:
    *  Es posible que se tenga que revisar la ruta de subida de los archivos en 'applicacion/controllers/Upload.php -> do_upload()' y adaptarla.
    *  Adicionalmente, adaptar la ruta en los scripts dentro de 'content'.

##Demo

* **Develoment** <http://videobox.azurewebsites.net/index.php> (Site Offline)
* **Release** <http://trabajomultimedia.westeurope.cloudapp.azure.com/>
    * **User**: admin@admin.com
    * **Password**: password

##Tecnologías utilizadas
* **[CodeIgniter](https://codeigniter.com)** v3.0.6 - Framework PHP
* **[Bootstrap](http://getbootstrap.com)** v3.3.6 - HTML, CSS, and JS framework
* **[FontAwesome](http://fontawesome.io)** v4.5.0 - Font and CSS toolkit
* **[Wowza](https://www.wowza.com)** v4.4.1 - Streaming
* **[JwPlayer](http://www.jwplayer.com/)** v7.0 - Reproductor JS
* **[bitDash](http://www.dash-player.com/)** v4.3.1 - Reproductor MPEG-DASH

##Utilidades

* **Trello tareas:**  <https://trello.com/b/Pmmb0HwS/tareas>
* **Web Proyecto:** <http://aibehn.github.io/videobox>
