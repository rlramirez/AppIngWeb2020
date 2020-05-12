<?php
    include ("../dll/config.php");
	include ("../dll/class_mysqli.php");
	$miconexion = new clase_mysqli;
	$miconexion->conectar(DBHOST, DBUSER, DBPASS, DBNAME);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Maquetació en HTML y CSS</title>

    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,400,700&display=swap" rel="stylesheet"/> 
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
    
    <link rel="stylesheet" href="../css/estilos.css">
</head>
<body>
    <header class="cabeceraPrincipal">
        <div class="logo">
            <p class="iniciales-logo">IW</p>
            <h1>LOGOTIPO</h1>
        </div>
        <section class="seccionCabecera">
            <aside class="buscador">
                <div class="barra-busqueda">
                    <input type="text" name="" placeholder="Buscar">
                    <button type="submit"><i class="fas fa-search"></i></button>
                </div>
            </aside>
        </section>
    </header>
    <nav class="menuPrincipal">
        <a href="../"><i class="fas fa-home"></i> Inicio</a>
        <a href="#">Acerca de</a>
        <a href="#">Artículos</a>
        <a href="../public/registro.html">Registro</a>
        <a href="./inscritos.php">Inscritos</a>
        <a href="#">Contacto</a>
    </nav>
    <main>
        <section class="formulario">
        <h3>LISTA DE INSCRITOS</h3>
            <?php
            $miconexion->consulta("select * from inscritos");
            $miconexion->verconsulta();
            ?>
        </section>
    </main>
    <footer class="piePagina">
        <h5>Todos los derechos reservador UTPL 2020</h5>
    </footer>
</body>
</html>