<?php
function mostrar_cant_paletizar(){ 
	?>
	<?php require 'C:/xampp/htdocs/concremag/conexion/conexion.php';?>
	<?php 
		$muestra = $_POST['molde'];
		echo $muestra;
		$cant_paletizar = "SELECT cant_producido
							FROM produccion
							WHERE ";

}