<?php
function mostrar_fecha(){
	$fecha_venta= $_POST['fecha_venta'];
	echo $fecha_venta;
}

function mostrar_orden(){
	?>
	<?php require 'C:/xampp/htdocs/concremag/conexion/conexion.php';?>
	<?php
	$fecha_despacho = $_POST['fecha_venta'];
	$fecha_despacho = date('Y-m-d',strtotime(str_replace('-','/',$fecha_despacho)));
	$consulta_orden = "SELECT orden
						FROM venta
						WHERE fecha_venta = '$fecha_despacho'";
	$buscar_orden = mysqli_query($DB_con,$consulta_orden);
	?>
	
	<select name="orden" style="width:145px">
	<option value="">seleccionar orden</option>
	<?php
	while($resultado_orden = mysqli_fetch_array($buscar_orden)){
		$orden = $resultado_orden['orden'];
		?>
		<option value="<?php $orden;?>"><?php echo $orden;?></option>
		<?php
	}
	?>
	</select>
	
	<?php
}

?>