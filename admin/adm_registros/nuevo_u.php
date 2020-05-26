<?php
	extract($_POST);
	include('../adm_header.php');
	$miconexion->consulta("insert into inscritos values ('','$nombres','$apellidos', '$correo', '$dni', '$pais', '$sexo')");
	echo "<script>location.href='index.php'</script>";
?>
