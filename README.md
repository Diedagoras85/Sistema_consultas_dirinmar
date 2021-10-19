
## Sobre Laravel

Laravel es un marco de aplicación web con una sintaxis elegante y expresiva. Creemos que el desarrollo debe ser una experiencia divertida y creativa para ser verdaderamente satisfactorio. Laravel elimina la molestia del desarrollo al facilitar las tareas comunes que se utilizan en muchos proyectos web, como:

## Recursos a instalar para funcionamiento del sistema
1.- Laragon v5.0.0210523

Laragon mejora el desarrollo web. Los desarrolladores de todo el mundo están utilizando Laragon para crear aplicaciones de forma rápida y sencilla. Es utilizado por miles de desarrolladores con cariño. Puede consultar los Testimonios para ver cómo piensan los usuarios de Laragon y su página de funciones para obtener más detalles.

2.- NODE JS v16.11.1

Node.js es un entorno en tiempo de ejecución multiplataforma, de código abierto, para la capa del servidor basado en el lenguaje de programación JavaScript, asíncrono, con E/S de datos en una arquitectura orientada a eventos y basado en el motor V8 de Google.

3.- Composer v2.1.9 

Composer es un sistema de gestión de paquetes para programar en PHP el cual provee los formatos estándar necesarios para manejar dependencias y librerías de PHP. Fue desarrollado por Nils Adermann y Jordi Boggiano quienes continúan dirigiendo el proyecto.

4.- SQL SERVER EXPRESS 2017

Microsoft SQL Server es un sistema de gestión de base de datos relacional, desarrollado por la empresa Microsoft. El lenguaje de desarrollo utilizado es Transact-SQL, una implementación del estándar ANSI del lenguaje SQL, utilizado para manipular y recuperar datos, crear tablas y definir relaciones entre ellas.

Versión "ligera" de Microsoft SQL server. Ésta sirve para uso libre y distribuible a los desarrolladores de software.

5.- SQL MANAGMENT STUDIO V18.10

SQL Server Management Studio es una aplicación de software lanzada por primera vez con Microsoft SQL Server 2005 que se utiliza para configurar, administrar y administrar todos los componentes dentro de Microsoft SQL Server. Es el sucesor de Enterprise Manager en SQL 2000 o antes.

6.- Git Bash v2.33.0

Git Bash es una aplicación para entornos de Microsoft Windows que ofrece una capa de emulación para una experiencia de líneas de comandos de Git. Bash es el acrónimo en inglés de Bourne Again Shell. Una shell es una aplicación de terminal que se utiliza como interfaz con un sistema 
operativo mediante comandos escritos

# Instalación


Esta instalación corresponde para un servidor tipo Windows SERVER 2016

Una vez iniciado el sistema operativo se debe comenzar con las siguientes instalaciones:

1.- Composer v2.1.9.

2.- Laragon v5.0.0210523.

3.- Node JS v16.11.1.

4.- Git Bash v2.33.0

para cargar las librerías y dependecias de las que se nutrirá el sistema.

4.- SQL SERVER EXPRESS 2017(Motor Base de Datos).

5.- SQL Managment Edition v18.10(Interfaz de administración de la BD).

Para crear el proyecto se debe iniciar Git Bash, entrar al directorio donde crearemos el proyecto e instalar laravel, utilizando el siguiente comando.

composer global require laravel/installer

Una vez instalado Laravel (Framework que utiliza lenguaje PHP) creamos nuestro proyecto en la ruta de la carperta C:\inetpub\wwwroot con el siguiente comando:

Laravel new nombre_proyecto --jet (para poder instalarlo utilizando las dependencias de Jetstream).

Una vez creado el proyecto cargamos los archivos de nuestro proyecto y le damos copiar/pegar en la carpeta de nuestro nuevo proyecto creado.

Para montar la base de datos y de ahí hacer las operaciones de lectura y escritura de datos.

Una vez instalada las dependecias, se debe crear la base de datos, para ello se debe ejecutar el Script que contiene las relaciones, tablas y datos de la BD.

Crear un perfil de usuario con la caraterísticas de super-administrador en el motor de base de datos, objeto tener la administración de la Base de Datos.

Posteriormente configurar la conexión en el archivo .env que viene junto al proyecto, para enlazar la conexión de la base de datos montada en nuestro servidor, de la siguiente manera:

DB_CONNECTION=sqlsrv
DB_HOST=nombre_servidor\SQLEXPRESS
DB_PORT=1433
DB_DATABASE=nombre_basededatos
DB_USERNAME=nombre_cuenta_usuario_basededatos
DB_PASSWORD=contraseña_cuenta_usuario_basededatos

Además se debe realizar la conexión para el servicio de correo electrónico, el que se encargará de enviar los correos que generará el sistema, de la siguiente manera:

MAIL_MAILER=smtp
MAIL_HOST=smtp.mailtrap.io (para este caso se creo una cuenta de mail en mailtrap), pero para el caso real se deben configurar las conexiones del servidor de correo que se va a utilizar
MAIL_PORT=2525
MAIL_USERNAME=ea6372176cc3ff
MAIL_PASSWORD=82b995dbac50f1
MAIL_ENCRYPTION=tls
MAIL_FROM_ADDRESS=correo@gmail.com
MAIL_FROM_NAME="mi_nombre"

Configurar las rutas de acceso de las conexiones en el servidor (IIS):

Se debe ingresar por medio del administrador de servicios e ir a herramientas/administrador de equipos

en la sección de servicios y aplicaciones dirigirse a "Administrador de configuración de SQL Server", delplegar el listado

verificar que en servicios de SQL Server, SQL Server se encuetre iniciado
Las opciones de configuración de SQL verificar que el protocolo TCP/IP se encuentre habilitado
  - Configuración de SQL Native Client 11.0(x86)(protocolos de cliente)
  - Configuración de red de SQL Server (Protocolos de SQLEXPRESS)
  - Configuración de SQL Server Native Client 11.0 (x64)

Configurar el nombre del host en el archivo host

  - Ubicar la ruta C:\Windows\System32\drivers\etc
  - gregar en el archivos hosts el nombre del host que pusimos en el IIS
  - a modo de ejemplo seria
 
 127.0.0.1   www.larevel.local

 Este debe coincidir con el nombre establecido en Nombre del host en IIS
 
Establecer permisos a la carpeta storage de Laravel
  
  - Ubicamos la ruta de la carpeta storage dentro del proyecto de Laravel
  - Clic derecho en la carpeta storage
  - Pestaña Seguridad
  - Clic en Editar
  - Seleccionamos el usuario IIS_IUSRS
  - En la fila Permitir seleccionamos la casilla Control Total
  - Por último Aplicar y Aceptar

Establecer permisos a la carpeta bootstrap/cache de Laravel

   - Ubicamos la ruta de la carpeta bootstrap/cache dentro del proyecto de Laravel
   - Clic derecho en la carpeta cache
   - Pestaña Seguridad
   - Clic en Editar
   - Seleccionamos el usuario IIS_IUSRS
   - En la fila Permitir seleccionamos la casilla Control Total
   - Por último Aplicar y Aceptar

Crear archivo web.config en la carpeta del proyecto Laravel

Nos ubicamos en la carpeta raiz del proyecto
Creamos el archivo web.config con el siguiente contenido
 
 <!--<configuration>
    <system.webServer>
        <defaultDocument>
            <files>
                <clear />
                <add value="index.php" />
                <add value="default.aspx" />
                <add value="Default.htm" />
                <add value="Default.asp" />
                <add value="index.htm" />
                <add value="index.html" />
            </files>
        </defaultDocument>
        <rewrite>
            <rules>
                <rule name="Imported Rule 1" stopProcessing="true">
                    <match url="^(.*)/$" ignoreCase="false" />
                    <conditions>
                        <add input="{REQUEST_FILENAME}" matchType="IsDirectory" ignoreCase="false" negate="true" />
                    </conditions>
                    <action type="Redirect" redirectType="Permanent" url="/{R:1}" />
                </rule>
                <rule name="Imported Rule 2" stopProcessing="true">
                    <match url="^" ignoreCase="false" />
                    <conditions>
                        <add input="{REQUEST_FILENAME}" matchType="IsDirectory" ignoreCase="false" negate="true" />
                        <add input="{REQUEST_FILENAME}" matchType="IsFile" ignoreCase="false" negate="true" />
                    </conditions>
                    <action type="Rewrite" url="index.php" />
                </rule>
            </rules>
        </rewrite>
        <httpErrors errorMode="Detailed" />
    </system.webServer>
 </configuration>-->