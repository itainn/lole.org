Lore.org
Lore.org es un proyecto pensado para demostrar el aprendizaje del Desarrollo de aplicaciones con tecnologías Web.
INTRODUCCIÓN
PROYECTO
El presente proyecto consiste en una aplicación web basada en el patrón MVC (Model Vista Controlador), que ha sido implementada en el lenguaje de programación PHP y pensada para ser descargada y estudiada.
Lenguajes
A parte de PHP, este proyecto incluye el uso de lenguajes tales como Markdown, que se utiliza para dotar de formato el presente documento, así como YAML y JSON, que son utilizados en archivos de configuración, así como SQL, que se utiliza para la creación de bases de datos con una carga inicial de datos y también para el acceso a los mismos.
Tecnologías
Este proyecto, facilita el contacto inicial con las tecnologías más populares para la iniciación a las aplicaciones web. En este caso, y habiendo elegido PHP como lenguaje en que está implementada la aplicación, se utiliza php-fpm para la ejecución de su código; a parte se utiliza Nginx como servicio web para poder atender peticiones via HTTP y determinar cómo deben ser atendidas (pudiendo implicar la ejecución de la aplicación).
Por otro lado, se usan tecnologías como MariaDB para el almacenamiento de datos que son accedidos y presentados por la aplicación (en algunos casos), lo que implica la utilización de algunas extensiones PECL de PHP, tales como PDO, con su respectivo driver PDO-MySQL así como la extensión Mysqlnd que dota a PHP de la capacidad de comunicarse con una servicio de base de datos Mysql o MariaDB.
Finalmente se utilizan los ejecutables composer, que permite dotar a una aplicación escrita en PHP de librerías y paquetes (conocidos como vendors) que hay disponibles en packagist.org; y git, que por tratarse de un sistema descentralizado de control de versiones, se utiliza para gestionar la publicación de entregas de versiones de los archivos de la aplicación así como también para el despliegue de la misma.
ESPECIFICACIÓN
TEMÁTICA
La aplicación que hay detrás de este proyecto muestra un catálogo de pizzas y complementos.
FUNCIONALIDADES
La aplicación web sirve información de los contenidos albergados (pizzas y complementos) a partir de la carga de URLs.
En otras palabras, las URLs de la aplicación permiten obtener respuestas que correspondan con los parámetros de los mismos.
REQUISITOS
Sistema operativo y sistema de archivos
Para el correcto funcionamiento de la aplicación se necesitará disponer de un sistema operativo de tipo servidor como: Windows Server (en versiones 2016 o posterior), Ubuntu Server (en versiones 16.04 o posterior), Debian (en versiones 9 o posterior), Red Had Enterprise Linux (en versiones 6 o posterior), CentOS (en versiones 6 o posterior), Solaris (en versiones 11.3 o posterior) o Fedora (en versiones 25 o posterior).
El sistema operativo deberá tener usuarios, entre los que se requerirá disponer de uno para el que puedan realizarse operaciones administrativas que permitan la instalación de software de terceros (3rd party software). También deberá disponer de un sistema de archivos (detallado a continuación), de interfaces de red y, de una interfaz de consola o interfaz de línea de comandos.
El sistema de archivos debe permitir el uso de sockets y el almacenamiento de archivos. Se necesitará usar un sistema de archivos jerárquico, preferiblemente que cumpla con POSIX, en el que se dispongan del directorio /var/www, que será propuesto para el despliegue de la aplicación.
Se necesitará que los servicios web y de applicación puedan acceder en modo de lectura a la carpeta de aplicación que allí se creará tanto para poder servir respuestas a las peticiones HTTP entregando los archivos que se soliciten, como también para poder abrir y leer el código de la aplicación.
Nota: La aplicación ha sido probada en el sistema operativo CentOS 7 utilizando un sistema de archivos local, compatible con POSIX.
Servicios y conexiones
Se necesitará disponer de un servidor web, ya sea Apache (versiones 2.4 o posterior) o Nginx (versión 1.11 o posterior).
En el caso que se desee utilizar Nginx, se aconseja proveerlo en el sistema operativo siguiendo las instrucciones que se encuentran en la documentación oficial que hay en nginx.com.
El servidor web deberá escuchar en el puerto TCP 80, preferiblemente para todas las interfaces de red, e indispensablemente para aquella que pueda ser accedida desde el dispositivo cliente.
También se necesitará disponer de un servidor de aplicaciones para la interpretación y ejecución de aplicaciones implementadas en PHP, con lo que se aconseja seguir las indicaciones para instalación y configuración de la web oficial de PHP.
En el caso de nuestra aplicación se aconseja utilizar el demonio de aplicaciones PHP-FPM.
Alternativamente pueden utilizarse el módulo Fast-CGI (disponible para una amplia gama de servidores web), que no debe confundirse con el módulo fcgid (disponible para Apache).
Se desaconseja en este caso utilizar el módulo PHP para Apache o el módulo PHP para Nginx, o equivalente.
Finalmente se necesitará disponer de un servidor de bases de datos para la gestión de la persistencia de los contenidos. En este caso la aplicación está pensada para utilizar servidores de bases de datos tipo MySQL, por lo que se aconseja elegir entre MySQL Community Server (versión 5.7 o posterior) y MariaDB (versión 10.11 o posterior).
Para su instalación, se aconseja seguir las instrucciones que se indican en la web oficial de MySQL o en la web oficial de MariaDB, según la elección.
Nota: La aplicación ha sido probada utilizando el servidor web Nginx 1.17 para CentOS 7 del repositorio de https://nginx.org, el servidor de aplicaciones PHP-FPM 7.2 del repositorio php 7.2 de http://rpms.remirepo.net, que han sido interconectados mediante el módulo Fast-CGI de Nginx
Paquetes, extensiones y librerías
Para que la aplicación pueda ejecutarse será necesario que se disponga del software composer, que debe adquirirse utilizando las instrucciones disponibles en getcomposer.org/download.
Por otro lado, se necesitará instalar el software git para poder realizar el despliegue de la aplicación.
Para ello se sugiere realizar la instalación atendiendo a la opción que corresponda con el Sistema Operativo elegido.
Además, se hará altamente recomendable disponer del software cliente de MySQL para intérprete de comandos, en tanto que las instrucciones de despliegue de datos (ver más adelante) se facilitarán empleando este software.
Para una correcta instalación de este software se aconseja seguir las instrucciónes de la web oficial.
En cuanto a PHP se requerirán las extensiones:
* yaml : para la interpretación de textos en notación YAML
* json : para la interpretación de textos en notación JSON
* pdo : para la gestión abstracta de conexiones a servicios de bases de datos y al acceso a datos
* pdo_mysql : para la integración de mysqlnd en pdo
* mysqlnd : para la conexión al servicio de base de datos
* url : para el tratamiento de las URLs peticionadas en las solicitudes HTTP
Para sostener una correcta evolución futura de la aplicación, se aconseja instalar igualmente las extensiones de PHP:
* opcache: para la generación de una cache con los códigos de aplicación procesados como opcode, que es un tipo de bytecode
* dom, xmlreader y xml : para la manipulación interna de archivos escritos en XML o HTML
* mbstring e iconv : para una mejor gestión de la internacionalización (i18n) de los textos
* bcmath : para una mejor manipulación y operación con de valores float
* curl : para la connexión vía HTTP con servicios externos
* gd : para la manipulación de imágenes y producción de códigos QR
* tokenizer : para la generación de códigos aleatorios con los que validar accesos y acciones
Finalmente, y en relación a las extensiones de PHP, éstas funcionarán correctamente en Sistemas Operativos que dispongan de las librerías:
* libyaml : para la extensión yaml
INSTALACIÓN
Para instalar la aplicación es necesario disponer del software git, del software composer, del software cliente de consola de comandos mysql y de connexión a internet.
La instalación de la aplicación consiste en dos pasos:
* El despliegue de la aplicación
* El despliegue de los datos
Despliegue
El despliegue de una aplicación web pasa por dos estadios, en los cuales se descargará una réplica de la aplicación en el directorio /var/www.
En caso de no disponer de este directorio, deberá tomarse un directorio análogo que pueda ser accedido tanto por el servicio web como por el servicio de aplicaciones.
Durante la posterior fase de configuración del entorno, a este directorio le llamaremos HOSTS_ROOT. Por otro lado, al directorio con que se genere la aplicación (/var/www/modena.pizzeria) le llamaremos APP_ROOT, y al directorio de la aplicación que deberá ser servido por el servicio web (/var/www/modena.pizzeria/public) le llamaremos DOCUMENT_ROOT.
Aplicación
La descarga de la réplica de la aplicación se realiza mediante el software git utilizando su instrucción de clonado clone. Es justamente en esta operación cuando se hace imprescindible disponer de conexión a internet.
Tras la descarga de la aplicación deberá crearse un archivo autoload.php que permitirá la carga de clases en la aplicación. Para ello se utilizará la instrucción de volcado de clases dump-autoload del software composer .
#!/bin/bash
cd HOSTS_ROOT
git clone https://github.com/itainn/lole.org.git

cd APP_ROOT
composer dump-autoload
Para realizar las anteriores operaciones será necesario utilizar una sesión de usuario del sistema operativo que disponga de permisos para acceder y escribir dentro del directorio HOSTS_ROOT.
Naturalmente dicho usuario debe tener permiso de ejecución de los software git y composer.
Nota: Una vez desplegada la réplica de la aplicación deberemos comprobar la existencia del directorio APP_ROOT. Este directorio y su contenido, también deberá poder ser accedidos en modo lectura por el servicio de aplicaciones. En cuanto al directorio DOCUMENT_ROOT, deberá ser accesible en modo lectura por el servicio web.
Datos
El despliegue de los datos se realiza utilizando el software mysql antes mencionado.
Mediante este software se realizará una carga en el servicio de bases datos, de los datos contenidos en el archivo app.init.sql que encontraremos en la carpeta data que habrá dentro del directorio APP_ROOT.
Esta operación requerirá que el servicio de base de datos esté en funcionamiento, y escuche un puerto TCP en una dirección IP que sea accesible por parte del sistema operativo en el que hemos realizado el despliegue de la aplicación .
Nota: En caso de tratarse de un servicio MySQL en un sistema linux basado en systemd como Ubuntu, Debian, Fedora, CentOS o Red Hat Enterprise Linux, pueden ejecutarse, usando un usuario con permisos de administración de servicios, las instrucciones systemctl start mysqld o systemctl start mariadb para poner en marcha dicho servicio en el sistema en el que esté instalado, según se trate de MySQL o de MariaDB respectivamente.
Para la realización del despliegue de los datos será necesario disponer de las credenciales de un usuario del servicio de bases de datos que tenga permiso para crear una base de datos.
En nuestro caso partimos de la base de que se dispone del usuario root y que este puede crear bases de datos en el servicio. También partimos de la base de que el servicio de base de datos está accesible a través del protocolo TCP en el puerto 3306 de la dirección IP 127.0.0.1 (conocida como localhost) a los que llamaremos respectivamente DB_PORT y DB_HOST.
Para el despliegue inicial de datos deberemos ejecutar las siguientes instrucciones:
#!/bin/bash
cd APP_ROOT
mysql -u root -p -P DB_PORT -h DB_HOST < data/app.init.sql
Configuración
La configuración necesaria para la puesta en marcha de la aplicación afecta por un lado al servicio web, al que hay que crear un sitio web (en caso de tratarse de Internet Information Server), un server (en caso de Nginx) o un virtual-host (en caso de Apache o Lighttpd).
Los datos que deberán emplearse para la creación son:
* Puerto TCP: 80 (o alternativamente el puerto que esté siendo escuchado por el servicio web)
* Dirección IP de la interfaz de red: * (cualquier dirección)
* Dominio: aplicaciones.web
* Document root: DOCUMENT_ROOT (directorio explicado en el apartado Despliegue)
* Archivo índice: index.php
En el caso de que se haya optado por el demonio PHP-FPM, y que se haya dejado la configuración por defecto en su instalación, deberán utilizarse adicionalmente los siguientes parámetros para la configuración del virtual-host, sitio web o server:
* Extensión/Expresión de archivo: .php / ^.*\.php(/.*)?
* ProxyPass para Fast-CGI: 127.0.0.1:9000 (valores por defecto para el servicio PHP-FPM)
Virtual hosts y dominios
Un ejemplo de archivo de configuración para el servidor Apache sería:
LoadModule proxy_module modules/mod_proxy.so

LoadModule proxy_fcgi_module modules/mod_proxy_fcgi.so

<VirtualHost *:80>
	ServerName lole.org
	DocumentRoot DOCUMENT_ROOT
	<Directory DOCUMENT_ROOT>
		DirectoryIndex /index.php index.php
        RewriteEngine On
        RewriteBase /
        RewriteCond %{REQUEST_FILENAME} !-d
        RewriteCond %{REQUEST_FILENAME} !-f
        RewriteRule ^ index.php [QSA,L]
	</Directory>
    ProxyPassMatch ^/(.*\.php(/.*)?)$ fcgi://127.0.0.1:9000%{DOCUMENT_ROOT}/$1
</VirtualHost>
Nota: en el anterior ejemplo, debe reemplazarse DOCUMENT_ROOT por la ruta real hacia dicho directorio.
En el anterior ejemplo nos encontraríamos con:
DocumentRoot /var/www/lole.org/public
...
<Directory /var/www/lole.org/public >
...
En el caso de que se usara un servidor Nginx optaríamos por algo como:
server {
  listen *:80;
  server_name lole.org;
  root DOCUMENT_ROOT;
  index index.php;
  location / {
  	try_files $uri /index.php$is_args$args;
  }
  location ~ [^/]\.php(/|$){
  	include fastcgi_params;
    fastcgi_param  SCRIPT_FILENAME   $document_root$fastcgi_script_name;
	fastcgi_pass 127.0.0.1:9000;
	fastcgi_index index.php;
	internal;
  }
}
Nota: en el anterior ejemplo, debe reemplazarse DOCUMENT_ROOT, por la ruta real hacia dicho directorio.
En el anterior ejemplo nos encontraríamos con:
root /var/www/lole.org/public
Acceso a datos
Para lograr que la aplicación puede acceder a los datos, una vez estos han sido desplegados, deberemos editar el archivo config que se encuentra en la carpeta global dentro de la carpeta app, que hay dentro de la carpeta src que se encuentra en el directorio APP_ROOT; en otras palabras, habrá que editar el archivo APP_ROOT/global/config.php/.
Dentro de ese archivo, deberán reemplazarse los valores DB_HOST y DB_PORT por los valores reales correspondientes dentro del bloque db.

<?php
define('KEY',"empanada");
 //  llave de encriptacion
define('COD',"AES-128-ECB");
// codificacion de encritado AES
define('SERVIDOR','localhost');
define('USUARIO','app2');
define('PUERTO',"3306");
define('PASSWORD','secret');
define('BD','tienda')

?>
