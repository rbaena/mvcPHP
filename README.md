# mvcPHP
CRUD MVC con PHP, Bootstrap y MySQL
De la Teoría a la Práctica en Diseño de Bases de Datos

1.	Entendiendo el MVC con un CRUD

1.1 ¿Qué es un CRUD?

En computación CRUD es el acrónimo de Crear, Leer, Actualizar y Borrar (del original en inglés: Create, Read, Update and Delete). Se usa para referirse a las funciones básicas en bases de datos o la capa de persistencia en un software.  En este caso para el desarrollo Web.

1.2 ¿Qué es un Framework CSS?

Un framework es simplemente la forma de organizar el desarrollo de una aplicación, es un esquema (un esqueleto, un patrón).  Los framework CSS facilitan el diseño de interfaz de usuario, para que esta sea capaz de adaptarse a los distintos navegadores, configuraciones o incluso dispositivos; la selección de un framework de apoyo puede ahorrar mucho tiempo y esfuerzo, no son un sustituto para saber cómo funciona el CSS.

Existen diversas alternativas de Framework CSS, en esta práctica se utilizará Twitter Bootstrap, que es un framework o conjunto de herramientas de código abierto para diseño de sitios y aplicaciones Web que se constituye en uno de los más populares de GitHub. Contiene plantillas de diseño con tipografía, formularios, botones, cuadros, menús de navegación y otros elementos de diseño basado en HTML y CSS, así como, extensiones de JavaScript opcionales adicionales [1].

1.3 ¿Qué es PHP?

PHP, acrónimo de Hipertexto PreProcessor, es un lenguaje de programación que se interpreta por un servidor Web.  Los lenguajes del lado del servidor son aquellos que son reconocidos, ejecutados e interpretados por el propio servidor y que se envían al cliente en un formato comprensible para él [2].  

Ventajas fundamentales:
•	El código se encuentra protegido tanto de la manipulación de los usuarios como de la presencia de virus.
•	Se caracteriza por su facilidad de aprendizaje en breve tiempo.
•	Es multiplataforma y no requiere de recursos desmesurados para que funcione.

1.4 ¿Qué es el MVC?

El patrón Modelo-Vista-Controlador (MVC) es un paradigma que divide las partes que conforman una aplicación en el Modelo, las Vistas y los Controladores, permitiendo la implementación por separado de cada elemento, garantizando así la actualización y mantenimiento del software de forma sencilla y en un reducido espacio de tiempo [3].

Modelo: datos y reglas de negocio.
Vista: muestra la información del modelo al usuario.
Controlador: gestiona las entradas del usuario.

1.5 ¿Qué es Atom?

Atom, el editor de texto creado por Github disponible en: https://atom.io/ [4] sus funcionalidades como el sistema de paquetes, que permite instalar fácilmente modificaciones al programa, desde una visualización de los cambios que se realizan en el código, hasta la posibilidad de usar los controles de Vim, pasando por temas que cambian el aspecto como más guste.  En el ranking de Github se ubica en la posición 27 [5]. 

1.6 ¿Qué es XAMPP?

XAMPP es una herramienta de software libre, que consiste principalmente en el sistema de gestión de bases de datos MySQL, el servidor Web Apache y los intérpretes para lenguajes de script: PHP y Perl [6].  El nombre proviene del acrónimo de X (para cualquiera de los diferentes sistemas operativos – es una herramienta multiplataforma), Apache, MySQL, PHP, Perl. Desde la versión "5.6.15", XAMPP cambió la base de datos de MySQL A MariaDB.  El cual es un fork de MySQL con licencia GPL [7].

2.	Creando un CRUD con MySQL/MariaDB, Framework Twitter Bootstrap y PHP (MVC)

2.1 Primeros pasos:

1.	Instalar editor Atom en Windows: 

Documentación del sitio oficial:
http://flight-manual.atom.io/getting-started/sections/installing-atom/ 

Otras fuentes:
Descubriendo Atom:
https://www.youtube.com/watch?v=mVrOU-yi5Jg 

Paquetes a utilizar en Atom:
https://www.youtube.com/watch?v=TS_qrEzP9fE 

Los Themes de Atom:
https://www.youtube.com/watch?v=wRljEKVZALo 

2.	Instalando XAMPP en Windows

Documentación del sitio oficial:
https://www.apachefriends.org/es/faq_windows.html 

Otras fuentes:

Como instalar XAMPP en Windows:
https://www.youtube.com/watch?v=7oFXfcPP9CE 

3.	Instalando DBdesigner Fork

DBdesinger Fork es un programa diseñador de bases de datos de forma visual, enfocado al desarrollo de Script SQL para: Firebird/InterBase, Microsoft SQL Server, MySQL/MariaDB, Oracle, PostgreSQL o SQLite.  Su descarga para Windows se encuentra disponible en: https://sourceforge.net/projects/dbdesigner-fork/ 

Al descargar la versión, solo debe descomprimir el archivo .zip: DBDesignerFork-1.5-bin-i386-win32-beta5.zip y ejecutar el archivo: DBDesignerFork.exe al interior de la carpeta /bin de las carpetas y archivos descomprimidos.

