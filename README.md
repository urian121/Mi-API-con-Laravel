# Creando una API CON LARAVEL 7 🚀

##### Este tutorial te sumerge en el poder de Laravel 7 y MySQL, explorando la implementación de CRUD (Crear, Leer, Actualizar y Eliminar). Aprende a desarrollar aplicaciones web dinámicas y escalables con las prácticas de gestión de datos más efectivas. Descubre cómo crear, leer, actualizar y eliminar registros de manera eficiente mientras dominas las mejores prácticas de desarrollo web con Laravel y MySQL. Convierte tus ideas en aplicaciones funcionales y robustas con esta guía completa.

##### Requisitos previos:

    Antes de comenzar, asegúrate de tener instalado PHP, Composer y cualquier servidor de apache
    php --version
    composer --version
    xammp

##### Crear un proyecto de Laravel

    composer create-project laravel/laravel mi-api-laravel7 "7.*"

##### Acceder al proyecto creado

    cd mi-api-laravel7

##### Generación de clave de aplicación

    php artisan key:generate

##### Crear Base de Datos en MySQL

    mi-api-laravel7

##### Configuración de la base de datos

    Abre el archivo .env y configura los detalles de tu base de datos, como el nombre de la base de datos, el nombre de usuario y la contraseña.

##### Ejecución del servidor de desarrollo

    php artisan serve
    php artisan serve --port=8500

##### Correr las migraciones

    php artisan migrate

##### Notas con las Migraciones

    - Subir la migracion.
        php artisan migrate
    - Deshacer la última migración ejecutada
        php artisan migrate:rollback

    - Deshacer todas las migraciones
        php artisan migrate:reset

    - Muestrar todas las migraciones indicando cuales han sido ejecutadas
        php artisan migrate:status
    - Deshace todas las migraciones y las ejecuta otra vez.
        php artisan migrate:refresh


#### Importante, pasos para correr el proyecto 🚀

    1. Actualizar dependencias de Composer
        composer update
    2. Actualizar dependencias de Composer
        composer install
    3. Generar una nueva clave de aplicación
        php artisan key:generate
    4. Configurar el archivo .env:
        Copia el archivo .env.example y renómbralo como .env.
        Completa los detalles de configuración necesarios, como la configuración de la base de datos y cualquier otra configuración específica de tu entorno.
    5. Crear la base de datos en MySQL y ejecutar migraciones
        php artisan migrate
    7. Iniciar el servidor de desarrollo
        php artisan serve

### Expresiones de Gratitud 🎁

    Comenta a otros sobre este proyecto 📢
    Invita una cerveza 🍺 o un café ☕
    Paypal iamdeveloper86@gmail.com
    Da las gracias públicamente 🤓.

## No olvides SUSCRIBIRTE 👍
