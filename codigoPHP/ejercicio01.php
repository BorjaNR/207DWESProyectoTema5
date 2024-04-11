<?php
/**
 * @author Borja Nuñez Refoyo
 * @version 2.0 
 * @since 09/04/2024
 */
// Configuración de conexión al archivo PHP
require_once '../config/confAPP.php';

//Si el usuario no es PEPE y la contrasena no es paso y  ninguna de las variables esta vacio o es null entramos en el if
if (!isset($_SERVER['PHP_AUTH_USER']) && !isset($_SERVER['PHP_AUTH_PW']) || $_SERVER['PHP_AUTH_USER'] != 'admin' || $_SERVER['PHP_AUTH_PW'] != 'paso') {
    /**
     * @link https://www.php.net/manual/es/function.header.php
     * 
     * Cuando el navegador recibe este encabezado, mostrará un cuadro de diálogo de inicio de sesión al usuario, solicitándole un nombre de usuario y una  *contraseña. El usuario debe proporcionar las credenciales correctas para acceder al recurso protegido.
     */
    header('WWW-Authenticate: Basic Realm="Contenido restringido"');

    /**
     * @link https://developer.mozilla.org/es/docs/Web/HTTP/Status/401
     * 
     * Cuando un cliente realiza una solicitud a un recurso protegido y no proporciona credenciales válidas o no proporciona credenciales en absoluto, el  * *servidor puede responder con el código de estado 401 y el encabezado WWW-Authenticate para indicar al cliente que se requiere autenticación.
     */
    header('HTTP/1.0 401 Unauthorized');

    //Mostramos un error de autenticacion
    echo("Error de auntenticacion!!<br>");

    // En función de si estamos en el servidor de Desarrollo o Explotación nos mostrará un link u otro para volver al 'home'
    echo("<button><a href=" . LINK . ">Volver al home</a></button>");

    /**
     * @link https://www.php.net/manual/es/function.exit.php
     * 
     * La función exit en PHP se utiliza para finalizar la ejecución del script inmediatamente en el punto donde se llama
     */
    exit();

    //Si las credenciales de autenticacion son correctas 
} else {

    //Mostramos por pantalla los datos el usuario
}
?>
<!DOCTYPE html>

<html>
    <head>
        <title>ejercicio01</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../webroot/css/main.css"/>
    </head>
    <body>
        <header class="text-center bg-secondary text-white" style="height: 75px">
            <h3>1. Desarrollo de un control de acceso con identificación del usuario basado en la función header().</h3>
        </header>
        <main style="margin-bottom: 75px" class="fs-5 text-center">
            <div class="container mt-3">
                <div class="row d-flex justify-content-start">
                    <div class="col">
                        <?php
                        //Muestro un mensaje si todo ha ido bien.
                        echo "<p style='color: black;'>Usuario y password correctos!</p>";

                        //Muestro el usuario
                        echo "<p style='color: black;'>Nombre de usuario: " . $_SERVER['PHP_AUTH_USER'] . "</p>";

                        //Muestro la password
                        echo "<p style='color: black;'>Password: " . $_SERVER['PHP_AUTH_PW'] . "</p>";
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <footer class="text-center bg-secondary fixed-bottom py-3">
        <div class="container">
            <div class="row">
                <div class="col text-center text-white">
                    <p>&copy;2023-24 IES los Sauces. Todos los derechos reservados. <a href="../../index.html" style="color: white; text-decoration: none">Borja Nuñez Refoyo</a></p>
                </div>
                <div class="col text-end">
                    <a title="Inicio" href="../indexProyectoTema5.html"><img src="../webroot/images/casa.png" width="40" height="40" alt="Inicio"/></a>
                    <a title="GitHub" href="https://github.com/BorjaNR/207DWESProyectoTema4" target="blank"><img src="../webroot/images/git.png" width="40" height="40" alt="GitHub"/></a>
                </div>
            </div>
        </div>
    </footer>
    <script src="./webroot/js/mainjs.js" ></script>
</body>
</html>

