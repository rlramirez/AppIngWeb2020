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
			<?php
				$miconexion->consulta("select * from inscritos");
				$miconexion->verconsulta_crud();
			?>
		</section>
	</section>
	
</main>
<?php
	include('../adm_footer.php');
?>