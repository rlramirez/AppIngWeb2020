<?php
	extract($_POST);
	include('../adm_header.php');
	$miconexion->consulta("update inscritos set nombres='$nombres', apellidos='$apellidos', correo='$correo', dni='$dni', pais='$pais', sexo='$sexo' where id=$id_u");
	echo "<script>location.href='index.php'</script>";
?>
