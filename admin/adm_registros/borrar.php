<?php
	extract($_GET);
	include('../adm_header.php');
	$miconexion->consulta("delete from inscritos where id=$id");
	echo "<script>location.href='index.php'</script>";
?>
