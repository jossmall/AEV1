# Cómo configurar el proyecto para la AEV1

Para ejecutar el entorno Docker del proyecto sigue estos pasos:

1. Inicia el contenedor ejecutando el archivo `docker-compose.yml` con click derecha en Run.

2. Crea una nueva conexión a la base de datos (mariaDB) usando el puerto `3310`. Importa la base de datos que hay en
   .BBDD_archive

3. Para acceder al contenedor, ejecuta en la terminal del proyecto:
   ```zsh
   docker exec -it servidor_php_aev1 /bin/bash
   ```

4. Dentro del contenedor, navega a la carpeta `public` y ejecuta:
   ```zsh
   php -S 0.0.0.0:8010
   ```

Esto iniciará el servidor PHP en el puerto `8010`.

5. Abre tu navegador y accede a `http://localhost:8010` para ver la aplicación en funcionamiento.

6. Revisa tener PHP 8.3 puesto en PHPStorm, configurar el formateo de código al guardar y si quieres activar el Debug
   recuerda guardar la ruta correcta en:
   Settings -> PHP -> Servers -> Configurar el path mapping.

7. En el [README](./AEV1/README.md) de dentro de AEV1 encontrarás las instrucciones para realizar la AEV1.