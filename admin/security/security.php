<?php
	session_start();
	if(@$_SESSION['autentificado'] && $_SESSION['username'] && $_SESSION['roll']){
		//echo $_SESSION['local_path']."dll/config.php";exit();
		include ($_SESSION['local_path']."/dll/config.php");
		include ($_SESSION['local_path']."/dll/class_mysqli.php");
		$miconexion = new clase_mysqli;
		$miconexion->conectar(DBHOST, DBUSER, DBPASS, DBNAME);
	}else{
		echo "<script>location.href='../'</script>";
	}
?>