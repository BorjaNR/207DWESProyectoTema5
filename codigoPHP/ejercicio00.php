<!DOCTYPE html>
<!--
    Descripción: CodigoEjercicio00
    Autor: Borja Nuñez Refoyo
    Fecha de creación/modificación: 22/11/2023
-->
<html lang="es">
<head>
    <title>ejercicio00</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
</head>
<body>
    <header class="text-center">
        <h1>0. Mostrar el contenido de las variables superglobales y phpinfo().</h1>
    </header>
    <main>
         <?php
            /**
            * @author Borja Nuñez Refoyo
            * @version 1.0
            * @since 22/11/2023
            */
           echo '<h3>Contenido de $_SERVER</h3>';
           print_r($_SERVER);
           echo '<br><br>';
           echo '<h3>Contenido de $_SESSION</h3>';
           if (isset($_SESSION)) {
                echo('Contenido de la variable \$_SESSION: <br>');
            print_r($_SESSION);
            } else {
                echo('La variable $_SESSION esta vacia');
            }
           echo '<br><br>';
           echo '<h3>Contenido de $_COOKIE</h3>';
           print_r($_COOKIE);
           echo '<br><br>';
           echo '<h3>Contenido de $_GET</h3>';
           print_r($_GET);
           echo '<br><br>';
           echo '<h3>Contenido de $_POST</h3>';
           print_r($_POST);
           echo '<br><br>';
           echo '<h3>Contenido de PHP:</h3>';
           phpinfo();
         ?>
    </main>
    <footer>
        <a title="Inicio" href="../indexProyectoTema4.html"><img src="../webroot/images/casa.png" width="40" height="40" alt="Inicio"/></a>
        <a title="GitHub" href="https://github.com/BorjaNR" target="blank"><img src="../webroot/images/git.png" width="40" height="40" alt="GitHub"/></a>
        <div>
            <a>2023-24 IES los Sauces. @Todos los derechos reservados. Borja Nuñez Refoyo</a>
        </div>
    </footer>
</body>

</html>

