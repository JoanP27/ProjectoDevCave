<head>
    <link rel="stylesheet" href="../styles/general.css">
    <link rel="stylesheet" href="../styles/cabecera.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="../js/cabecera.js"></script>
</head>
<header>
    <section id="logo">
        <img src="../imagenes/logo.png">
        <div>Dev Cave</div>
    </section>
    <section class="menu">
        <nav>
            <ul>
                <li><a href="../index.php">Inicio</a></li>
                <li><a href="../paginas/listaJuegos.php">Lista de juegos</a></li>
                <li><a href="../paginas/formulario_juegos.php">Publicar juego</a></li>
            </ul>
        </nav>
    </section>
    <?php
    if(isset($_SESSION["usuario"]) == null){
        echo('<section class="login">
            <a href="../paginas/login.php">Iniciar sesión</a>
        </section>');
    }
    else
    {
        echo('<section class="user_profile" id="user_button">
            <button id="menu_usuario" href="../paginas/login.php">'. $_SESSION["usuario"] .'</button>
            <div id="user_profile_options" class="not-visible">
                <ul>
                    <li>ver perfil</li>
                    <li>
                        <form action="../paginas/cerrar_session.php">
                            <button type="submit">cerrar sesion</button>
                        </form>
                    </li>
                </ul>
            </div>

        </section>');
    }
    ?>
    
    <section id="side-menu-button">
        <button><i class="fa fa-bars"></i></button>
    </section>
    
</header>
<body>
    
</body>
<aside id="aside-menu" class="not-visible">
    <section class="menu">
        <nav>
            <ul>
                <li><a href="../index.php">Inicio</a></li>
                <li><a href="../paginas/listaJuegos.php">Lista de juegos</a></li>
                <li><a href="../paginas/formulario_juegos.php">Publicar juego</a></li>
            </ul>
        </nav>
    </section>
    <section class="login">
        <a href="../paginas/login.php">Iniciar sesión</a>
    </section>
</aside>
<script src="../js/side-button.js">
</script>