# Proyecto Backend Laravel - Tickets y Usuarios

Este es un proyecto backend en Laravel que gestiona dos tablas en la base de datos: `tickets` y `users`. Este README proporciona una descripción general del proyecto, los requisitos, cómo configurarlo y ejecutarlo, y otra información relevante.

## Requisitos

Asegúrate de tener instalados los siguientes requisitos en tu sistema antes de comenzar:

- [PHP](https://www.php.net/) (versión recomendada)
- [Composer](https://getcomposer.org/)
- [Laravel](https://laravel.com/docs/installation)
- [MySQL](https://www.mysql.com/) 

## Configuración

1. Clona este repositorio en tu máquina local:

   git clone https://github.com/tu-usuario/tu-proyecto.git

2. Navega al directorio del proyecto:

   cd el-proyecto-clonado


3. Instala las dependencias de Composer:

   ```consola
   composer install
   ```

4. Copia el archivo de configuración de entorno y configura tus variables de entorno:

   ```consola
   cp .env.example .env
   ```

   Asegúrate de configurar la conexión de la base de datos en el archivo `.env`:

   ```.env
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=nombre_de_tu_base_de_datos
   DB_USERNAME=prueba_tecnica
   DB_PASSWORD=contraseña_de_la_base_de_datos
   ```

5. Genera una clave de aplicación:

   ```bash
   php artisan key:generate
   ```

6. Ejecuta las migraciones para crear las tablas en la base de datos:

   ```bash
   php artisan migrate
   ```

7. Corre el servidor:

   ```bash
   php artisan serve
   ```
8. A continuación te proporciono la colección de Postman donde puedes probar las apis

    https://warped-flare-734341.postman.co/workspace/New-Team-Workspace~27db99dd-5e80-4bb9-b3e1-c5cac628df37/collection/14081635-ecc912f5-7e5d-497c-9ec2-4a8d09bfab3d?action=share&creator=14081635&active-environment=14081635-747b7df0-6f84-484e-b7f5-f97446ab88a8


## Uso

Este proyecto proporciona endpoints para gestionar `tickets` y `users`.

## Contacto

Si tienes alguna pregunta o necesitas ayuda, no dudes en ponerte en contacto con Nicoll Ramirez en nicoln042001@gmail.com.

¡Gracias por ver este proyecto!

