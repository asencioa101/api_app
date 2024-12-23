# api_app

esta aplicacion fue realizada por 

Luis Eduardo Asaencio y Asencio

# Aplicación de Gestión de Tareas

Esta aplicación permite gestionar una lista de tareas, con funciones para crear, editar, eliminar y marcar tareas como completadas. Utiliza **PHP** para la lógica de servidor, **MySQL** para la base de datos y **Bootstrap/Materialize CSS** para el diseño de la interfaz.

## Requisitos

1. **Servidor local**: XAMPP, WAMP o cualquier servidor compatible con PHP y MySQL.
2. **PHP**: Versión 7.0 o superior.
3. **MySQL**: Base de datos para almacenar las tareas.

## Configuración

1. Clona o descarga este repositorio en el directorio del servidor web (por ejemplo, `htdocs` si usas XAMPP).
2. Configura la base de datos:
   - Abre **phpMyAdmin** o tu cliente de MySQL preferido.
   - Crea una base de datos llamada `tareas`.
   - Importa el archivo `tareas.sql` (debes crearlo previamente exportando la estructura de tu base de datos) para generar las tablas necesarias.

3. Configura la conexión a la base de datos:
   - Edita el archivo `includes/config.php`.
   - Asegúrate de que las variables `$DB_HOST`, `$DB_USER`, `$DB_PASS`, y `$DB_DB` coincidan con tu configuración de MySQL.
   
   ```php
   <?php
   $DB_HOST = "localhost";
   $DB_USER = "root";
   $DB_PASS = "";
   $DB_DB = "tareas";
   
   $conn = mysqli_connect($DB_HOST, $DB_USER, $DB_PASS, $DB_DB);
   ?>

4.   En esta repositorio se  incluye una base de datos que se adapta las   nesecidades de esta api.