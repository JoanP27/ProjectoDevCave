<?php include("../elementos/sesion_php.inc")?>
<?php include("../elementos/cabecera.inc") ?>
<?php
    include("../elementos/conexion.php");
    $id = $_REQUEST['id'];
    $bd = ConectarBD();
    $consulta = LeerUnJuego($bd, $id);
    $datos = $consulta->fetch();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dev Cave</title>
    <meta name="author" content="Joan Pomares">
    <link rel="stylesheet" href="../styles/general.css">
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../styles/detalles.css">
    <script type="text/javascript" src="../bootstrap/js/bootstrap.min.js"></script>
</head>
<body>
    <main>
        <section>
            <div class="content">
                <img src=<?php echo "../" . $datos['imagen'] ?>>
                <h2><?php echo $datos['titulo'] ?></h2>
                <p><?php echo $datos['descripcion'] ?></p>
            </div>
        </section>
        
        <aside>
            <hr width="1" size="10"/>
            <div class="content">
                <h3>Autor</h3>
            <img src="../imagenes/placeholder-user.png">
            <h3>Versiones</h3>
            <div class="versiones">
                <ul>
                    <li>v1.0</li>
                </ul>
            </div>
            <h3>Donaciones</h3>
            <div class="donaciones">
                <ul>
                    <li>Básica - 5€</li>
                    <li>Fan - 10€</li>
                    <li>Colaborador - 20€</li>
                </ul>
            </div>
            
            </div>
        </aside>
    </main>
    <?php include("../elementos/footer.inc") ?>
</body>
</html>