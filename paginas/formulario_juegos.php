<?php     include("../elementos/cabecera.inc"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro del Juego</title>
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <script type="text/javascript" src="../bootstrap/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../styles/general.css">
    <link rel="stylesheet" href="../styles/insertar_juegos.css">
</head>
<body>
    <main>
        <br>
        <h1>Nuevo Juego</h1>
        <form action="insertar_juego.php" method="post" enctype="multipart/form-data" name="formularioJuego">
            <section>
                <label for="nombre">Nombre del juego</label><br>
                <input type="text" name="nombre" id="nombre" size="20"><br>
                <label for="descripcion">Descripcion </label><br>
                <textarea name="descripcion" id="descripcion" rows="20" cols="50"></textarea><br>
                <label for="categoria">Categoria</label><br>
                <select name="categoria" id="categoria" style="width: 150px;">
                    <option>Terror</option>
                    <option>Aventura</option>
                    <option>Comedia</option>
                    <option>RPG</option>
                </select><br>
                <label for="precio">Precio</label><br>
                <input type="number" name="precio" id="precio" min="0"><span> €</span><br>
                <label for="imagen">Imagen</label><br>
                <input type="file" name="fichero" />                
                <button type="submit">
            </section>
            <section>

            </section>
        </form>
    </main>
    <script src="../js/insertar_juego.js"></script>
</body>
<?php include("../elementos/footer.inc")?>
</html>
