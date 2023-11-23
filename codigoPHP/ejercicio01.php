<!DOCTYPE html>
<!--
    Descripción: CodigoEjercicio01
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
            //Verificar las credenciales
         session_start();

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Validar credenciales
            $username = "usuario256"; // Nombre de usuario
            $password = "paso"; // Contraseña

            if ($_POST['username'] === $username && $_POST['password'] === $password) {
                $_SESSION['logged_in'] = true;
                header('Location: dashboard.php');
                exit;
            } else {
                $error = "Credenciales incorrectas";
            }
        }
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
