<?php
    include("../elementos/sesion_php.inc");
    if(isset($_REQUEST["usuario"]) && isset($_REQUEST["passwd"]))
    {
        $loginUsuario = $_REQUEST["usuario"];
        $loginPasswd = $_REQUEST["passwd"];
        if ($loginUsuario == "admin" && $loginPasswd == "admin" )
        {
            header("Location: perfil_usuario.php");
            $_SESSION['usuario'] = $_REQUEST['usuario'];
        }
    }
    include("../elementos/cabecera.inc");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log in</title>
    <link rel="stylesheet" href="../styles/login.css">
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
</head>
<body>
    <main>
        <section id="login">
            <form action="">
                <h4>Log in</h4>
                <div>
                    <label for="usuario">Nombre de usuario</label><br>
                    <input type="text" name="usuario"><br>
                </div>
                <div>
                    <label for="passwd">Contraseña</label><br>
                    <input type="text" name="passwd"><br>
                </div>
                <div id="contenedorBoton">
                    <button type="submit" class="boton">Acceder</button>
                </div>
            </form>
        </section>
    </main>
    <?php include('../elementos/footer.inc'); ?>
</body>
</html>