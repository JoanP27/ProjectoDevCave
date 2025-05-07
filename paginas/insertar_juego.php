<?php 
    include("../elementos/conexion.php");
    header("Location:listaJuegos.php");
    $correcto = true;
    $datos = [];
    
    $datos["titulo"] = $_POST["nombre"];
    $datos["descripcion"] = $_POST["descripcion"];
    $datos["categoria"] = $_POST["categoria"];
    $datos["precio"] = $_POST["precio"];
    
    $nombreDirectorio;
    $fichero;

    if (is_uploaded_file ($_FILES['fichero']['tmp_name'])) 
    {   	
        echo ("Fichero subido correctamente\n");

        $nombreDirectorio = __DIR__ . "/../ficheros/";   
        echo $nombreDirectorio;

        $idUnico = time();  	
        $fichero = $nombreDirectorio . $idUnico . $_FILES['fichero']['name'];
        $fichero_relativo = "../ficheros/" . $idUnico . $_FILES['fichero']['name'];
        move_uploaded_file ($_FILES['fichero']['tmp_name'], $fichero); 
    
    } else
    {
        echo ("No se ha podido subir el fichero\n");
    }
    $datos["imagen"] = $fichero_relativo;
    print_r($datos);

    if ($correcto == true){
        echo 1;
        $bd = ConectarBD();
        AnyadirJuego($bd, $datos);
    }
    else {echo 0;}
?>
