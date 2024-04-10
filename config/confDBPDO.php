<?php
/**
 * @author Borja Nuñez Refoyo
 * @version 2.0 
 * @since 09/04/2024
*/

// Archivo de configuración de la BD de Entorno de Desarrollo del Instituto
define('DSN', 'mysql:host=192.168.20.19;dbname=DB207DWESProyectoTema5'); // Host 'IP' y nombre de la base de datos
define('USERNAME','user207DWESProyectoTema5'); // Nombre de usuario de la base de datos
define('PASSWORD','paso'); // Contraseña de la base de datos

// Datos para la configuracion de la base de datos en el servidor IONOS
//define('DSN', 'mysql:host=db5014806774.hosting-data.io;dbname=dbs12302437');
//define('USERNAME', 'dbu2279609');
//define('PASSWORD', 'daw2_Sauces');
//

// Datos para la configuracion de la base de datos en el servidor de desarrollo de mi casa
//define('DSN', 'mysql:host=192.168.1.207;dbname=DB207DWESProyectoTema5');
//define('USERNAME', 'user207DWESProyectoTema5');
//define('PASSWORD', 'paso');

//OTRA FORMA DE HACERLO
/*
if ($_SERVER['SERVER_NAME'] == 'daw207.isauces.local') {
    define('DSN', 'mysql:host=192.168.20.19;dbname=DB207DWESProyectoTema5'); // Host 'IP' y nombre de la base de datos
    define('USERNAME','user207DWESProyectoTema5'); // Nombre de usuario de la base de datos
    define('PASSWORD','paso'); // Contraseña de la base de datos
    // Archivo de configuración de la BD de Explotación
    } elseif ($_SERVER['SERVER_NAME'] == 'daw207.ieslossauces.es') {
        define('DSN', 'mysql:host=db5014806774.hosting-data.io;dbname=dbs12302437'); // Host y nombre de la base de datos
        define('USERNAME','dbu2279609'); // Nombre de usuario de la base de datos
        define('PASSWORD','daw2_Sauces'); // Contraseña de la base de datos
    }
 * */
?>