<?php
class clase_mysqli{
	/*variables de conexoion*/
	var $BaseDatos;
	var $Servidor;
	var $Usuario;
	var $Clave;
	/*identificacion de error y texto de error*/
	var $Errno = 0;
	var $Error = "";
	/*identificacion de conexion y consulta*/
	var $Conexion_ID=0;
	var $Consulta_ID=0;
	/*constructor de la clase*/
	function clase_mysqli($host="", $user="", $pass="", $db=""){
		$this->BaseDatos=$db;
		$this->Servidor=$host;
		$this->Usuario=$user;
		$this->Clave=$pass;
	}
	/*conexion al servidor de db*/
	function conectar($host, $user, $pass, $db){
		if($db != "")$this->BaseDatos=$db;
		if($host != "")$this->Servidor=$host;
		if($user != "")$this->Usuario=$user;
		if($pass != "")$this->Clave=$pass;
		/*conectar al servidor*/
		$this->Conexion_ID=new mysqli($this->Servidor, $this->Usuario, $this->Clave, $this->BaseDatos);
		if(!$this->Conexion_ID){
			$this->Error="Ha fallado la conexion";
			return 0;
		}
		return$this->Conexion_ID;
	}
	function consulta($sql=""){
		if($sql==""){
			$this->Error="NO hay ninguna sentencia sql";
			return 0;
		}
		/*Ejecutar la cunsulta*/
		//$this->Consulta_ID=$this->Conexion_ID->query($sql);
		$this->Consulta_ID=mysqli_query($this->Conexion_ID,$sql);

		if(!$this->Consulta_ID){
			print $this->Conexion_ID->error;
			//$this->Errno->error;
		}
		return $this->Consulta_ID;
	}

	/*retorna el numero de campos de la consulta*/
	function numcampos(){
		return mysqli_num_fields($this->Consulta_ID);
	}
	/*retorna de campos de la consulta*/
	function numregistros(){
		return mysqli_num_rows($this->Consulta_ID);
	}
	function verconsulta(){
		$listGener[1]="Masculino";
		$listGener[2]="Femenino";
		echo "<table border=1 class='tableData'>";
		echo "<tr>";
		for ($i=0; $i < $this->numcampos() ; $i++) {
			echo  "<th>".mysqli_fetch_field_direct($this->Consulta_ID, $i)->name."</th>";
		}
		echo "</tr>";
		while ($row=mysqli_fetch_array($this->Consulta_ID)) {
			echo "<tr>";
			for ($i=0; $i < $this->numcampos(); $i++) { 
				if ($i==6) {
					echo "<td>".$listGener[$row[$i]]."</td>";
				}else{
					echo "<td>".$row[$i]."</td>";
				}	
			}
			echo "</tr>";
		}
		echo "</table>";
	}
	function verconsulta_crud(){
		$listGener[1]="Masculino";
		$listGener[2]="Femenino";
		echo "<table border=1 class='tableData'>";
		echo "<tr>";
		for ($i=0; $i < $this->numcampos() ; $i++) {
			echo  "<th>".mysqli_fetch_field_direct($this->Consulta_ID, $i)->name."</th>";
		}
		echo  "<th>Actualizar</th>";
		echo  "<th>Borrar</th>";
		echo "</tr>";
		while ($row=mysqli_fetch_array($this->Consulta_ID)) {
			echo "<tr>";
			for ($i=0; $i < $this->numcampos(); $i++) { 
				if ($i==6) {
					echo "<td>".$listGener[$row[$i]]."</td>";
				}else{
					echo "<td>".$row[$i]."</td>";
				}	
			}
			echo "<td><a href='actualizar.php?id=$row[0]'>Actualizar</a></td>";
			echo "<td><a href='borrar.php?id=$row[0]'>Borrar</a></td>";
			echo "</tr>";
		}
		echo "</table>";
	}
	
	function consulta_lista(){
		while ($row = mysqli_fetch_array($this->Consulta_ID)) {
			for ($i=0; $i < $this->numcampos(); $i++) { 
				$row[$i];
			}
			return $row;
		}
	}


}
?>