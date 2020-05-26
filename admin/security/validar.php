<?php
   if(session_id()=="")
   {
      session_start();
   }
   if(($_POST['usuario']) && ($_POST['clave']))
   {
         $username=$_POST['usuario'];
         $userpass=md5($_POST['clave']); 
         include ("../../dll/config.php");
			include ("../../dll/class_mysqli.php");
			$miconexion = new clase_mysqli;
			$miconexion->conectar(DBHOST, DBUSER, DBPASS, DBNAME);
			$miconexion->consulta("select * from usuarios where usuario='$username' and clave='$userpass'");
			$list=$miconexion->consulta_lista();
			if ($list[0]) {
		         $_SESSION['autentificado'] = TRUE;
               $_SESSION['username'] = $list[1];
		         $_SESSION['id'] = $list[0];
		         $_SESSION['roll'] = $list[4]; 
               $_SESSION['local_path']=$local_path;
		         echo "<script>location.href='../index.php'</script>";
			}else{
				echo '<script>alert("Datos Incorrectos...");</script>';
		        echo "<script>location.href='../'</script>";
			}
   }
 
   if(@$_GET['salir']=="true")
   {
      session_unset();
      session_destroy();
   }
?>