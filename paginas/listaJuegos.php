<?php 
include("../elementos/conexion.php");

if(isset($_POST["titulo"])){$datos["titulo"] = $_POST["titulo"];}
else{
    $datos["titulo"] = "";
}
if(isset($_POST["categorias"])){
    $datos["categoria"] = $_POST["categorias"];
}
else{
    $datos["categoria"] = "";
}

$conexion = ConectarBD();
$resultado = BuscarJuegos($conexion, $datos);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DevCave</title>
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <script type="text/javascript" src="../bootstrap/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../styles/general.css">
    <link rel="stylesheet" href="../styles/listadoJuegos.css">
    <script src="../js/filter-button.js"></script>
    <script src="../js/listaJuegos.js"></script>
</head>
<body>
    <?php include('../elementos/cabecera.inc'); ?>
    <main>
        <section id="busqueda">
            <form action="listaJuegos.php" method="post" name="formulario">
                <div id="barra-busqueda">
                    <input type="text" name="titulo">
                    <button type="submit" id="boton_buscar">
                        <i class="fa fa-search"></i>
                    </button>
                    <button type="button" id="boton_filtros">
                        <i class="fa fa-caret-down"> Filtros</i>
                    </button>
                </div>
                <div id="filtros" class="not-visible">
                    <label>Categoria</label>
                    <select id="categorias" name="categorias">
                        <option selected></option>
                        <option>Terror</option>
                        <option>Aventura</option>
                        <option>Comedia</option>
                        <option>Puzzle</option>
                        <option>RPG</option>
                    </select>
                    <label>Descargas minimo</label>
                    <input type="number" id="descargas">
                </div>
            </form>
        </section>
        <section id="resultados">
            <?php 
                EscribirDatos($resultado)
            ?>
        </section>
    </main>
        
    <footer>
    <?php include('../elementos/footer.inc'); ?>
</body>