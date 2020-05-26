<?php
	extract($_GET);
	include('../adm_header.php');
	$miconexion->consulta("select * from inscritos where id=$id");
	$lista_u=$miconexion->consulta_lista();
	$listGener[1]="Masculino";
	$listGener[2]="Femenino";
?>
<main>
	<section class="modulo-servicios">
		<nav class="nav_modulo">
			<a href="nuevo.php"><i class="fas fa-user-plus"></i> Inscritos</a>
		</nav>
	</section>
	<section class="area_trabajo">
		<h3>Actualización</h3><br>
		<form method="post" action="update.php">
			<input type="hidden" name="id_u" value="<?php echo $lista_u[0];?>">
			<input type="text" name="nombres" value="<?php echo $lista_u[1];?>">
			<input type="text" name="apellidos" value="<?php echo $lista_u[2];?>">
			<input type="text" name="correo" value="<?php echo $lista_u[3];?>">
			<input type="text" name="dni" value="<?php echo $lista_u[4];?>">
			<input type="text" name="pais" value="<?php echo $lista_u[5];?>">
			<select name="sexo">
				<option value="<?php echo $lista_u[6];?>"><?php echo $listGener[$lista_u[6]];?></option>
				<option value="1">Masculino</option> 
				<option value="2">Femenino</option>
			</select>
			<button type="submit" class="btn-submit">Actualizar</button>
		</form>
	</section>
	
</main>
<?php
	include('../adm_footer.php');
?>