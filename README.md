Proyecto Laravel - capi_examen_Fernando_Ignacio_Sanchez_Monroy

Este proyecto es el backend desarrollado con Laravel para el examen de habilidades en programación. Proporciona una API para obtener datos de usuarios y sus domicilios desde una base de datos MySQL.

Requisitos Previos
PHP >= 7.4 y Composer instalado.
MySQL >= 5.7.
Instrucciones para Levantar el Proyecto
Clonar el repositorio desde GitHub o GitLab:

git clone https://github.com/Fernando-SM/ecapi_examen/,
Navegar al directorio del proyecto Laravel:

Instalar las dependencias del proyecto con Composer:

composer install
Configurar el archivo .env con las credenciales de la base de datos y otros ajustes necesarios:

cp .env.example .env
php artisan key:generate
Realizar las migraciones para crear las tablas en la base de datos:

php artisan migrate
Ejecutar los seeders para poblar las tablas de usuarios y domicilios:

php artisan db:seed
Iniciar el servidor de desarrollo de Laravel:

php artisan serve
La API de Laravel estará funcionando y escuchando en http://localhost:8000.

Proyecto Angular 
Este proyecto es el frontend desarrollado con Angular para el examen de habilidades en programación. Utiliza la API de Laravel para mostrar una tabla con los datos de usuarios y sus domicilios.

Requisitos Previos
Node.js v18.16.1 y npm v9.5.1 instalados.
Instrucciones para Levantar el Proyecto
Clonar el repositorio desde GitHub o GitLab:

Navegar al directorio del proyecto Angular:

EL enviroment se encuentra en el archivo: 
capi_examen_fron_fernand_sanchez_monroy/src/app/usuarios/tabla-usuarios/tabla-usuarios.component.ts
en la linea 17

Instalar las dependencias del proyecto con npm:

npm install
Iniciar la aplicación Angular:
ng serve

La aplicación estará disponible en http://localhost:4200 y mostrará la tabla con los usuarios y sus domicilios obtenidos desde la API de Laravel.