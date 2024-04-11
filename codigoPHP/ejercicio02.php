<?php
/**
 * @author Borja Nuñez Refoyo
 * @version 2.0 
 * @since 10/04/2024
 */
//Configuración de conexión a la base de datos
require_once '../config/confDBPDO.php';
// Configuración de conexión al archivo PHP
require_once '../config/confAPP.php';

// Verifico si el nombre de usuario y la contraseña no están configurados en las variables del servidor y si no estan realizo el control de acceso con el header
if (!isset($_SERVER['PHP_AUTH_USER']) || !isset($_SERVER['PHP_AUTH_PW'])) {
    //Envío un encabezado HTTP que solicita al navegador web que solicite al usuario que ingrese sus credenciales utilizando la autenticación básica, con el mensaje "Acceso restringido".
    header('WWW-Authenticate: Basic realm="Acceso restringido"');
    //Envío un encabezado HTTP 401 que indica que la solicitud no está autorizada, lo que provoca que el navegador muestre un cuadro de diálogo de autenticación.
    header('HTTP/1.0 401 Unauthorized');
    echo 'Se requieren credenciales para acceder a esta página.';
    //Mosramos un boton al usuario para que vuelva al home del proyecto
    echo("<button class=\"btn btn-primary\"><a href=" . LINK . ">Volver al home</a></button>");
    exit();
}
$usuario = $_SERVER['PHP_AUTH_USER'];
$hashResumen = hash('sha256', $usuario . $_SERVER['PHP_AUTH_PW']);

//utilizamos el bloque try catch
try {
    //Establecemos la conexión a la base de datos
    $miDB = new PDO(DSN, USERNAME, PASSWORD);

    //Hacemos la conulta donde el usuario sea el usuario que ha introducido el usuario y la contraseña el resumen
    $sql = "SELECT * FROM T01_Usuario WHERE T01_CodUsuario = '$usuario' AND T01_Password = '$hashResumen'";
    $consultaPreparada = $miDB->prepare($sql);
    $consultaPreparada->execute();

    //La consulta devuelve algo y nosotros lo pasamos a objeto
    $oResultado = $consultaPreparada->fetchObject();
    ?>
    <!DOCTYPE html>

    <html>
        <head>
            <title>ejercicio02</title>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link rel="stylesheet" href="../webroot/css/main.css"/>
        </head>
        <body>
            <header class="text-center bg-secondary text-white" style="height: 75px">
                <h3>2. Desarrollo de un control de acceso con identificación del usuario basado en la función header() y en el uso de una tabla “Usuario” de la base de datos. (PDO).</h3>
            </header>
            <main style="margin-bottom: 75px" class="fs-5 text-center">
<?php
                //Si todo ha salido bien en la consulta mostraremos un mensaje de bienvenida al usuario
                if ($oResultado) {
                    echo "<h3>Bienvenido, $oResultado->T01_DescUsuario</h3>";
                } else {
                    header('HTTP/1.1 401 Unauthorized'); // Mensaje de error
                    echo 'Credenciales incorrectas. Acceso denegado.';
                    // En función de si estamos en el servidor de Desarrollo o Explotación nos mostrará un link u otro para volver al 'home'
                    echo("<button><a href=" . LINK . ">Volver al home</a></button>");
                    exit();
                }
} catch (PDOException $pdoe) {
    echo ('<p style="color:red">EXCEPCION PDO</p>' . $pdoe->getMessage());
} finally {
    // El metodo unset sirve para cerrar la sesion con la base de datos
    unset($miDB);
}
?>
        </main>
        <footer class="text-center bg-secondary fixed-bottom py-3">
            <div class="container">
                <div class="row">
                    <div class="col text-center text-white">
                        <p>&copy;2023-24 IES los Sauces. Todos los derechos reservados. <a href="../../index.html" style="color: white; text-decoration: none">Borja Nuñez Refoyo</a></p>
                    </div>
                    <div class="col text-end">
                        <a title="Inicio" href="../indexProyectoTema5.html"><img src="../webroot/images/casa.png" width="40" height="40" alt="Inicio"/></a>
                        <a title="GitHub" href="https://github.com/BorjaNR/207DWESProyectoTema5" target="blank"><img src="../webroot/images/git.png" width="40" height="40" alt="GitHub"/></a>
                    </div>
                </div>
            </div>
        </footer>
        <script src="./webroot/js/mainjs.js" ></script>
    </body>
</html>



