<?php
	include('../adm_header.php');
?>
<main>
	<section class="modulo-servicios">
		<nav class="nav_modulo">
			<a href="nuevo.php"><i class="fas fa-user-plus"></i> Inscrito</a>
		</nav>
	</section>
	<section class="area_trabajo">
		<section class="contenido_mod">
			<h3>Nuevo Usuario</h3>
			<form method="post" action="nuevo_u.php">
				<input type="text" name="nombres" placeholder="Nombres">
				<input type="text" name="apellidos" placeholder="Apellidos">
				<input type="mail" name="correo" placeholder="correo">
				<input type="text" name="dni" placeholder="dni">
				<input type="text" name="pais" placeholder="pais">
				<select name="sexo">
					<option value="1">Masculino</option> 
					<option value="2">Femenino</option>
					<option value="" selected></option>
				</select>
				<input type="submit" class="btn-submit" value="Guardar">
			</form>
		</section>
	</section>
	
</main>
<?php
	include('../adm_footer.php');
?>