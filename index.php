<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DevCave</title>
    <link rel="stylesheet" href="./bootstrap/css/bootstrap.min.css">
    <script type="text/javascript" src="./bootstrap/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="styles/general.css">
    <link rel="stylesheet" href="styles/index.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<?php include('elementos/cabecera.inc'); ?>
<body>
    <main>
        <section id="carousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <p></p>
                </div>
                <div class="carousel-item">
                    <p></p>
                </div>
                <div class="carousel-item">
                    <p></p>
                </div>
            </div>
            
            <button class="carousel-control-prev" type="button" data-bs-target="#carousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
              </button>
              <button class="carousel-control-next" type="button" data-bs-target="#carousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </section>
        
        <br>
        <h2>Categorias</h2>

        <section id="categorias">
            <article>
                <div class="img" id="terror"></div>
                <div class="contenido">
                    <h4>Terror</h4>
                    <p>Sumérgete en un mundo de misterio y escalofríos. Descubre nuestra colección de libros de terror que te mantendrán al borde de tu asiento.</p>
                    <a href="./paginas/juegos.html">Ver</a>
                </div>
            </article>
            <article>
                <div class="img" id="aventura"></div>
                <div class="contenido">
                    <h4>Aventura</h4>
                    <p>Sumérgete en un mundo de misterio y escalofríos. Descubre nuestra colección de libros de terror que te mantendrán al borde de tu asiento.</p>
                    <a href="./paginas/juegos.html">Ver</a>
                </div>
            </article>
            
        </section>
    
    </main>
    <?php include('elementos/footer.inc'); ?>
</body>
</html>