<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Maquetació en HTML y CSS</title>

    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,400,700&display=swap" rel="stylesheet"/> 
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
    
    <link rel="stylesheet" href="css/estilos.css">
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
        <a href="#"><i class="fas fa-home"></i> Inicio</a>
        <a href="#">Acerca de</a>
        <a href="#">Artículos</a>
        <a href="public/registro.html">Registro</a>
        <a href="resources/inscritos.php">Inscritos</a>
        <a href="#">Contacto</a>
    </nav>
    <main><br><br><br>
    <?php
        $res=unserialize($_GET['resultado']);
        foreach($res as $posicion=>$mensaje)
        {
            if($posicion=="message"){
                echo "<h2 class='mensaje'>".$mensaje."</h2>";
            }
        }
        ?><br><br><br>
        </main>
    <aside class="sponsor">
        <section class="sponsorItem">SPONSOR 1</section> 
        <section class="sponsorItem">SPONSOR 2</section> 
        <section class="sponsorItem">SPONSOR 3</section> 
        <section class="sponsorItem">SPONSOR 4</section> 
    </aside>
    <footer class="piePagina">
        <h5>Todos los derechos reservador UTPL 2020</h5>
    </footer>
</body>
</html>