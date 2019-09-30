Lore.org
Lore.org es un proyecto pensado para demostrar el aprendizaje del Desarrollo de aplicaciones con tecnolog�as Web.
INTRODUCCI�N
PROYECTO
El presente proyecto consiste en una aplicaci�n web basada en el patr�n MVC (Model Vista Controlador), que ha sido implementada en el lenguaje de programaci�n�PHP�y pensada para ser descargada y estudiada.
Lenguajes
A parte de�PHP, este proyecto incluye el uso de lenguajes tales como�Markdown, que se utiliza para dotar de formato el presente documento, as� como�YAML�y�JSON, que son utilizados en archivos de configuraci�n, as� como�SQL, que se utiliza para la creaci�n de bases de datos con una carga inicial de datos y tambi�n para el acceso a los mismos.
Tecnolog�as
Este proyecto, facilita el contacto inicial con las tecnolog�as m�s populares para la iniciaci�n a las aplicaciones web. En este caso, y habiendo elegido�PHP�como lenguaje en que est� implementada la aplicaci�n, se utiliza�php-fpm�para la ejecuci�n de su c�digo; a parte se utiliza�Nginx�como servicio web para poder atender peticiones via�HTTP�y determinar c�mo deben ser atendidas (pudiendo implicar la ejecuci�n de la aplicaci�n).
Por otro lado, se usan tecnolog�as como�MariaDB�para el almacenamiento de datos que son accedidos y presentados por la aplicaci�n (en algunos casos), lo que implica la utilizaci�n de algunas extensiones�PECL�de PHP, tales como�PDO, con su respectivo driver�PDO-MySQL�as� como la extensi�n�Mysqlnd�que dota a PHP de la capacidad de comunicarse con una servicio de base de datos�Mysql�o�MariaDB.
Finalmente se utilizan los ejecutables�composer, que permite dotar a una aplicaci�n escrita en�PHP�de librer�as y paquetes (conocidos como�vendors) que hay disponibles en�packagist.org; y�git, que por tratarse de un sistema descentralizado de control de versiones, se utiliza para gestionar la publicaci�n de entregas de versiones de los archivos de la aplicaci�n as� como tambi�n para el despliegue de la misma.
ESPECIFICACI�N
TEM�TICA
La aplicaci�n que hay detr�s de este proyecto muestra un cat�logo de pizzas y complementos.
FUNCIONALIDADES
La aplicaci�n web sirve informaci�n de los contenidos albergados (pizzas y complementos) a partir de la carga de URLs.
En otras palabras, las URLs de la aplicaci�n permiten obtener respuestas que correspondan con los par�metros de los mismos.
REQUISITOS
Sistema operativo y sistema de archivos
Para el correcto funcionamiento de la aplicaci�n se necesitar� disponer de un sistema operativo de tipo servidor como: Windows Server (en versiones 2016 o posterior), Ubuntu Server (en versiones 16.04 o posterior), Debian (en versiones 9 o posterior), Red Had Enterprise Linux (en versiones 6 o posterior), CentOS (en versiones 6 o posterior), Solaris (en versiones 11.3 o posterior) o Fedora (en versiones 25 o posterior).
El sistema operativo deber� tener usuarios, entre los que se requerir� disponer de uno para el que puedan realizarse operaciones administrativas que permitan la instalaci�n de�software de terceros (3rd party software). Tambi�n deber� disponer de un sistema de archivos (detallado a continuaci�n), de�interfaces de red�y,�de una interfaz de consola o interfaz de l�nea de comandos.
El sistema de archivos debe permitir el uso de�sockets�y el almacenamiento de archivos. Se necesitar� usar un sistema de archivos�jer�rquico, preferiblemente que cumpla con�POSIX, en el que se dispongan del directorio�/var/www, que ser� propuesto para el despliegue de la aplicaci�n.
Se necesitar� que los servicios web y de applicaci�n puedan acceder en modo de lectura a la carpeta de aplicaci�n que all� se crear� tanto para poder servir respuestas a las peticiones�HTTP�entregando los archivos que se soliciten, como tambi�n para poder abrir y leer el c�digo de la aplicaci�n.
Nota: La aplicaci�n ha sido probada en el sistema operativo CentOS 7 utilizando un sistema de archivos local, compatible con POSIX.
Servicios y conexiones
Se necesitar� disponer de un servidor web, ya sea Apache (versiones 2.4 o posterior) o Nginx (versi�n 1.11 o posterior).
En el caso que se desee utilizar Nginx, se aconseja proveerlo en el sistema operativo siguiendo las instrucciones que se encuentran�en la documentaci�n oficial que hay en nginx.com.
El servidor web deber� escuchar en el puerto�TCP�80, preferiblemente para todas las interfaces de red, e indispensablemente para aquella que pueda ser accedida desde el dispositivo cliente.
Tambi�n se necesitar� disponer de un servidor de aplicaciones para la interpretaci�n y ejecuci�n de aplicaciones implementadas en�PHP, con lo que se aconseja seguir las indicaciones para�instalaci�n y configuraci�n de la web oficial de PHP.
En el caso de nuestra aplicaci�n se aconseja utilizar el demonio de aplicaciones�PHP-FPM.
Alternativamente pueden utilizarse�el m�dulo Fast-CGI�(disponible para una amplia gama de servidores web), que no debe confundirse con el m�dulo�fcgid�(disponible para Apache).
Se desaconseja�en este caso utilizar�el m�dulo�PHP�para Apache�o el�m�dulo�PHP�para Nginx, o�equivalente.
Finalmente se necesitar� disponer de un servidor de bases de datos para la gesti�n de la persistencia de los contenidos. En este caso la aplicaci�n est� pensada para utilizar servidores de bases de datos tipo MySQL, por lo que se aconseja elegir entre MySQL Community Server (versi�n 5.7 o posterior) y MariaDB (versi�n 10.11 o posterior).
Para su instalaci�n, se aconseja seguir las instrucciones que se indican en la�web oficial de MySQL�o en la�web oficial de MariaDB, seg�n la elecci�n.
Nota: La aplicaci�n ha sido probada utilizando el servidor web Nginx 1.17 para CentOS 7 del repositorio de�https://nginx.org, el servidor de aplicaciones PHP-FPM 7.2 del repositorio php 7.2 de�http://rpms.remirepo.net, que han sido interconectados mediante el�m�dulo Fast-CGI de Nginx
Paquetes, extensiones y librer�as
Para que la aplicaci�n pueda ejecutarse ser� necesario que se disponga del software�composer, que debe adquirirse utilizando las instrucciones disponibles en�getcomposer.org/download.
Por otro lado, se necesitar� instalar el software�git�para poder realizar el despliegue de la aplicaci�n.
Para ello se sugiere realizar la instalaci�n�atendiendo a la opci�n que corresponda con el Sistema Operativo elegido.
Adem�s, se har� altamente recomendable disponer del�software cliente de MySQL�para int�rprete de comandos, en tanto que las instrucciones de�despliegue de datos�(ver m�s adelante) se facilitar�n empleando este software.
Para una correcta instalaci�n de este software se aconseja seguir las�instrucci�nes de la web oficial.
En cuanto a�PHP�se requerir�n las extensiones:
* yaml�: para la interpretaci�n de textos en notaci�n�YAML
* json�: para la interpretaci�n de textos en notaci�n�JSON
* pdo�: para la gesti�n abstracta de conexiones a servicios de bases de datos y al acceso a datos
* pdo_mysql�: para la integraci�n de�mysqlnd�en�pdo
* mysqlnd�: para la conexi�n al servicio de base de datos
* url�: para el tratamiento de las URLs peticionadas en las solicitudes HTTP
Para sostener una correcta evoluci�n futura de la aplicaci�n, se aconseja instalar igualmente las�extensiones de�PHP:
* opcache: para la generaci�n de una cache con los c�digos de aplicaci�n procesados como opcode, que es un tipo de bytecode
* dom,�xmlreader�y�xml�: para la manipulaci�n interna de archivos escritos en XML o HTML
* mbstring�e�iconv�: para una mejor gesti�n de la internacionalizaci�n (i18n) de los textos
* bcmath�: para una mejor manipulaci�n y operaci�n con de valores�float
* curl�: para la connexi�n v�a HTTP con servicios externos
* gd�: para la manipulaci�n de im�genes y producci�n de c�digos QR
* tokenizer�: para la generaci�n de c�digos aleatorios con los que validar accesos y acciones
Finalmente, y en relaci�n a las extensiones de�PHP, �stas funcionar�n correctamente en Sistemas Operativos que dispongan de las librer�as:
* libyaml�: para la extensi�n yaml
INSTALACI�N
Para instalar la aplicaci�n es necesario disponer del software�git, del software�composer, del software cliente de consola de comandos�mysql�y de connexi�n a internet.
La instalaci�n de la aplicaci�n consiste en dos pasos:
* El despliegue de la aplicaci�n
* El despliegue de los datos
Despliegue
El despliegue de una aplicaci�n web pasa por dos estadios, en los cuales se descargar� una r�plica de la aplicaci�n en el directorio�/var/www.
En caso de no disponer de este directorio, deber� tomarse un directorio an�logo que pueda ser accedido tanto por el servicio web como por el servicio de aplicaciones.
Durante la posterior fase de configuraci�n del entorno, a este directorio le llamaremos�HOSTS_ROOT. Por otro lado, al directorio con que se genere la aplicaci�n (/var/www/modena.pizzeria) le llamaremos�APP_ROOT, y al directorio de la aplicaci�n que deber� ser servido por el servicio web (/var/www/modena.pizzeria/public) le llamaremos�DOCUMENT_ROOT.
Aplicaci�n
La descarga de la r�plica de la aplicaci�n se realiza mediante el software�git�utilizando su�instrucci�n de clonado�clone. Es justamente en esta operaci�n cuando se hace imprescindible disponer de conexi�n a internet.
Tras la descarga de la aplicaci�n deber� crearse un archivo�autoload.php�que permitir� la carga de clases en la aplicaci�n. Para ello se utilizar� la�instrucci�n de volcado de clases�dump-autoload�del software�composer�.
#!/bin/bash
cd HOSTS_ROOT
git clone https://github.com/itainn/lole.org.git

cd APP_ROOT
composer dump-autoload
Para realizar las anteriores operaciones ser� necesario utilizar una sesi�n de usuario del sistema operativo que disponga de permisos para acceder y escribir dentro del directorio�HOSTS_ROOT.
Naturalmente dicho usuario debe tener permiso de ejecuci�n de los software�git�y�composer.
Nota: Una vez desplegada la r�plica de la aplicaci�n deberemos comprobar la existencia del directorio�APP_ROOT. Este directorio y su contenido, tambi�n deber� poder ser accedidos en modo lectura por el servicio de aplicaciones. En cuanto al directorio�DOCUMENT_ROOT, deber� ser accesible en modo lectura por el servicio web.
Datos
El despliegue de los datos se realiza utilizando el software�mysql�antes mencionado.
Mediante este software se realizar� una carga en el servicio de bases datos, de los datos contenidos en el archivo�app.init.sql�que encontraremos en la carpeta�data�que habr� dentro del directorio�APP_ROOT.
Esta operaci�n requerir� que el servicio de base de datos est� en funcionamiento, y�escuche�un puerto�TCP�en una direcci�n�IP�que sea accesible por parte del sistema operativo en el que hemos realizado el despliegue de la aplicaci�n .
Nota: En caso de tratarse de un servicio MySQL en un sistema linux basado en�systemd�como�Ubuntu,�Debian,�Fedora,�CentOS�o�Red Hat Enterprise Linux, pueden ejecutarse, usando un usuario con permisos de administraci�n de servicios, las instrucciones�systemctl start mysqld�o�systemctl start mariadb�para poner en marcha dicho servicio en el sistema en el que est� instalado, seg�n se trate de MySQL o de MariaDB respectivamente.
Para la realizaci�n del despliegue de los datos ser� necesario disponer de las credenciales de un usuario del servicio de bases de datos que tenga permiso para crear una base de datos.
En nuestro caso partimos de la base de que se dispone del usuario�root�y que este puede crear bases de datos en el servicio. Tambi�n partimos de la base de que el servicio de base de datos est� accesible a trav�s del protocolo�TCP�en el puerto�3306�de la direcci�n�IP�127.0.0.1�(conocida como�localhost) a los que llamaremos respectivamente�DB_PORT�y�DB_HOST.
Para el despliegue inicial de datos deberemos ejecutar las siguientes instrucciones:
#!/bin/bash
cd APP_ROOT
mysql -u root -p -P DB_PORT -h DB_HOST < data/app.init.sql
Configuraci�n
La configuraci�n necesaria para la puesta en marcha de la aplicaci�n afecta por un lado al servicio web, al que hay que crear un�sitio web�(en caso de tratarse de�Internet Information Server), un�server�(en caso de�Nginx) o un�virtual-host�(en caso de�Apache�o�Lighttpd).
Los datos que deber�n emplearse para la creaci�n son:
* Puerto TCP:�80�(o alternativamente el puerto que est� siendo escuchado por el servicio web)
* Direcci�n IP de la interfaz de red:�*�(cualquier direcci�n)
* Dominio:�aplicaciones.web
* Document root:�DOCUMENT_ROOT�(directorio explicado en el apartado�Despliegue)
* Archivo �ndice:�index.php
En el caso de que se haya optado por el demonio PHP-FPM, y que se haya dejado la configuraci�n por defecto en su instalaci�n, deber�n utilizarse adicionalmente los siguientes par�metros para la configuraci�n del virtual-host, sitio web o server:
* Extensi�n/Expresi�n de archivo:�.php�/�^.*\.php(/.*)?
* ProxyPass para Fast-CGI:�127.0.0.1:9000�(valores por defecto para el servicio PHP-FPM)
Virtual hosts y dominios
Un ejemplo de archivo de configuraci�n para el servidor�Apache�ser�a:
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
Nota: en el anterior ejemplo, debe reemplazarse�DOCUMENT_ROOT�por la ruta real hacia dicho directorio.
En el anterior ejemplo nos encontrar�amos con:
DocumentRoot /var/www/lole.org/public
...
<Directory /var/www/lole.org/public >
...
En el caso de que se usara un servidor�Nginx�optar�amos por algo como:
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
Nota: en el anterior ejemplo, debe reemplazarse�DOCUMENT_ROOT, por la ruta real hacia dicho directorio.
En el anterior ejemplo nos encontrar�amos con:
root /var/www/lole.org/public
Acceso a datos
Para lograr que la aplicaci�n puede acceder a los datos, una vez estos han sido desplegados, deberemos editar el archivo�config�que se encuentra en la carpeta�global dentro de la carpeta�app, que hay dentro de la carpeta�src�que se encuentra en el directorio APP_ROOT; en otras palabras, habr� que editar el archivo�APP_ROOT/global/config.php/.
Dentro de ese archivo, deber�n reemplazarse los valores�DB_HOST�y�DB_PORT�por los valores reales correspondientes dentro del bloque�db.

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
