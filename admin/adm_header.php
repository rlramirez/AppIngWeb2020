<?php
include("security/security.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>Administrator</title>
	<meta charset="utf-8">
	<meta name="description" content="Administración de datos">
	<meta name="keywords" charset="admin, data">
	<meta name="author" content="UTPL by @rlramirez">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="<?php echo $site_url;?>admin/css/style.css">
	<link href='http://fonts.googleapis.com/css?family=Josefin+Slab' rel='stylesheet' type='text/css' />
</head>
<body>
	<section class="secondsidebar">
		<section class="info-user">
			<section class="logo-calif"><i class="fa fa-check-double"></i> Administración</section>
			<nav class="top-menu">
				<div class="nameperfil"> <i class="fas fa-male"></i> <?php echo utf8_encode($_SESSION['username']);?></div>
				<a href=""><i class="fas fa-user-alt"></i> Perfir</a>
				<a href="./security/exit.php?salir=true"><i class="fas fa-power-off"></i> Salir</a>
			</nav>
		</section>
	</section>
	<section class="fisrtsidebar">
		<nav class="mainmenu">
			<a href="<?php echo $site_url; ?>admin/index.php"><i class="fas fa-home"></i> Inicio</a>
			<a href="<?php echo $site_url; ?>admin/adm_registros/index.php"><i class="fa fa-user"></i> Registros</a>
			<a href="#"><i class="fa fa-award"></i> Certificados</a>
			<a href="#"><i class="fa fa-award"></i> Api - Json</a>
			<a href="<?php echo $site_url; ?>admin/security/exit.php?salir=true"><i class="fa fa-power-off"></i> Salir</a>
		</nav>
	</section>