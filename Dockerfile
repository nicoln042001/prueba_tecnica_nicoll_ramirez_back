# Usa la imagen oficial de PHP como base
FROM php:8.0-fpm

# Instala las extensiones de PHP necesarias
RUN docker-php-ext-install pdo pdo_mysql

# Configura el directorio de trabajo
WORKDIR /var/www

# Copia los archivos de la aplicación al contenedor
COPY . .

# Expone el puerto 9000 para FPM
EXPOSE 9000

# Comando para iniciar PHP-FPM
CMD ["php-fpm"]
