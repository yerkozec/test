
<?php
if(isset($_POST["ingresar"])){
?>
	<?php require 'C:/xampp/htdocs/concremag/conexion/conexion.php';?>
	<?php
	$fecha = $_POST['datepicker'];
	$fecha = date('Y-m-d',strtotime(str_replace('-','/',$fecha)));
	$hora_inicio = $_POST['timepicker1'];
	$hora_fin = $_POST['timepicker2'];
	$vol_ocupado = $_POST['vol_ocupado'] ;
	$colacion = $_POST['timepicker3'];
	$detencion = $_POST['timepicker4'];
	$cant_producido = $_POST['cant_produ'];
	$cant_perdido = $_POST['cant_perdi']; 
	$id_producto = '10'.$_POST['prefabricados'].$_POST['color'];
	$consulta = "INSERT INTO produccion (id_produccion, fecha, hora_inicio, hora_fin, vol_ocupado, colacion, detencion, cant_producido, cant_perdido, id_producto)
							VALUES ('','$fecha','$hora_inicio','$hora_fin','$vol_ocupado','$colacion','$detencion','$cant_producido','$cant_perdido','$id_producto')";
	if(isset($hora_inicio,$hora_fin,$cant_producido,$vol_ocupado)){
	if (mysqli_query($DB_con, $consulta)) {
    echo "<script type='text/javascript'> alert('New record created successfully');</script>";
	header('location: /concremag/produccion/produccion.php');
	exit;
} else {
	echo "<script type='text/javascript'> alert('Error: ". $consulta . "<br>" . mysqli_error($DB_con)."');</script>";
}
} else {
	echo "<script type='text/javascript'> alert('Error: falta data');</script>";
}
	
$DB_con->close();
}
?>
