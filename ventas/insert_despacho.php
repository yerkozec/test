<?php
if(isset($_POST['agregar_despacho'])){
	?>
	<?php require 'C:/xampp/htdocs/concremag/conexion/conexion.php';?>
	<?php
	
	$fecha_despacho = $_POST['fecha_despacho'];
	$fecha_despacho = date('Y-m-d',strtotime(str_replace('-','/',$fecha_despacho)));
	$orden = $_POST['orden'];
	echo $orden;
	$calidad_despacho = $_POST['calidad_despacho'];
	$id_producto = '10'.$_POST['prefabricados'].$_POST['color'];
	$consulta_id_total = "SELECT id_total_prim,id_total_segunda
							FROM producto pro
							JOIN total_primera tp
							ON tp.id_producto = pro.id_producto
							JOIN total_segunda ts
							ON ts.id_producto = pro.id_producto
							WHERE tp.id_producto = '$id_producto'
							AND ts.id_producto = '$id_producto'";
	$buscar_id = mysqli_query($DB_con,$consulta_id_total);
	$resultado_id = mysqli_fetch_array($buscar_id);
	$id_total_primera = $resultado_id['id_total_prim'];
	$id_total_segunda = $resultado_id['id_total_segunda'];
	$consulta_id_venta = "SELECT id_venta
							FROM venta v
							WHERE v.orden = '$orden'";
	$buscar_id_venta = mysqli_query($DB_con,$consulta_id_venta);
	$resultado_id_venta = mysqli_fetch_array($buscar_id_venta);
	$id_venta = $resultado_id_venta['id_venta'];
	
	if($calidad_despacho == 1){
	$despacho_primera = $_POST['cant_despacho'];
	$insert_despacho_primera = "INSERT INTO despacho (id_despacho,fecha_despacho,cant_despa_primera,cant_despa_segunda,id_venta)
										VALUES('','$fecha_despacho','$despacho_primera',NULL,'$id_total_primera',$id_venta)";
		if (mysqli_query($DB_con, $insert_despacho_primera)) {
			echo "<script type='text/javascript'> alert('New record created successfully');</script>";
			header('location: /concremag/venta/ventas.php');
			exit;
		} else {
			echo "<script type='text/javascript'> alert('Error: ". $insert_despacho_primera . "<br>" . mysqli_error($DB_con)."');</script>";
			echo "se cae primera";
		}
	}
	else{
		$despacho_segunda = $_POST['cant_despacho'];
		$insert_despacho_segunda = "INSERT INTO despacho (id_despacho,fecha_despacho,cant_despa_primera,cant_despa_segunda,id_venta)
										VALUES('','$fecha_despacho',NULL,'$despacho_segunda','$id_total_segunda',$id_venta)";
		if (mysqli_query($DB_con, $insert_despacho_segunda)) {
			echo "<script type='text/javascript'> alert('New record created successfully');</script>";
			header('location: /concremag/venta/ventas.php');
			exit;
		} else {
			echo "<script type='text/javascript'> alert('Error: ". $insert_despacho_segunda . "<br>" . mysqli_error($DB_con)."');</script>";
			echo "se cae segunda";
		}
	}
	
	

$DB_con->close();
	
}

?>