A continuación, se describe los componentes utilizados para el desarrollo web del sistema de reserva de boletos para autobús “ticket”
1.	FUNCIONAMIENTO GENERAL.

El proyecto fue desarrollado con el framework laravel 6.5.2, donde se hacen todos los registros tanto de usuarios, como de los operadores, buses y zonas en las cuales se desplazan, además del horario de disponibilidad. Es una interfaz muy sencilla, para el inicio de sesión y registro, cualquier usuario puede acceder a la administración es decir agregar Buses, rutas y operadores. Una vez con las rutas operadores buses y rutas disponible el usuario procede a realizar la reserva en el sidebar, en la opción “Bus-Schedule-list”, donde a través de relaciones internas se vinculan los datos almacenados con la elección del usuario y este procede a realiza la reserva la cual se plasma en la vista al momento de guardar.

2.	Desarrollo del Frontend 

Se realizo una interfaz que cumpliera con lo requerido, grafica agradable, sencilla, responsive capaz de adaptarse a diferentes tamaños y dispositivos; todo esto con la ayuda Frameworks de CSS BOOTSTRAP 4 y con la implementación de Material Dashboard, se logró crear el menú de opciones y las diferentes funcionalidades de la página web, cuyo propósito es brindar al usuario un sistema de reserva de autobuses para determinado viaje.

3.	 Desarrollo del Backend.
Se uso el framework laravel 6.5.2, donde se estructuro el diseño de la página a través de una estructura MVC, realizando migraciones, y con la especial utilización de elementos Ajax para permitir que la aplicación desarrollada funcione de forma asíncrona procesando cualquier solicitud en segundo plano.

4.	BASE DE DATOS
La base de datos fue provista a través de las migraciones realizadas desde el framework, para este caso se realizó en SQL, a través de XAMPP y PHPMyadmin. Y es capaz de contener todos los datos que se generen con el uso del aplicativo.
Notas:
-Se recomienda realizar el inicio de sesión con cualquier usuario, añadir, los operadores los buses las regiones y subregiones y posteriormente con la ayuda de “Bus-Schedule-list”, realizar la reserva del ticket.
