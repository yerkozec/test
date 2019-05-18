<?php
if(isset($_POST['agregar_venta'])){
	?>
	<?php require 'C:/xampp/htdocs/concremag/conexion/conexion.php';?>
	<?php
	$consulta_valor_p ="(SELECT venta_primera 
						FROM venta v 
						JOIN total_primera tp 
						ON tp.id_total_prim = v.id_total_primera 
						WHERE v.id_total_primera = tp.id_total_prim )";
	$buscar_valor_p = mysqli_query($DB_con,$consulta_valor_p);
	$resultado_valor_p = mysqli_fetch_array($buscar_valor_p);
	$consulta_venta_primera = $resultado_valor_p['venta_primera'];
	
	$consulta_valor_s ="(SELECT venta_segunda 
						FROM venta v 
						JOIN total_segunda ts 
						ON ts.id_total_segunda = v.id_total_segunda 
						WHERE v.id_total_segunda = ts.id_total_segunda)";
	$buscar_valor_s = mysqli_query($DB_con,$consulta_valor_s);
	$resultado_valor_s = mysqli_fetch_array($buscar_valor_s);
	$consulta_venta_segunda = $resultado_valor_s['venta_segunda'];
	
	$consulta_id_venta = "(SELECT id_total_primera 
							FROM venta v 
							JOIN total_primera tp 
							ON tp.id_total_prim=v.id_total_primera 
							WHERE v.id_total_primera = tp.id_total_prim)";
							
	$fecha_venta = $_POST['fecha_venta'];
	$fecha_venta = date('Y-m-d',strtotime(str_replace('-','/',$fecha_venta)));
	$orden = $_POST['orden_venta'];
	$calidad_venta = $_POST['calidad'];
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
	
	if($calidad_venta == 1){
	$venta_primera = $_POST['cant_venta'];
	$insert_venta_primera = "INSERT INTO venta (id_venta,fecha_venta,orden,venta_primera,venta_segunda,id_total_primera,id_total_segunda)
										VALUES('','$fecha_venta','$orden','$venta_primera',NULL,'$id_total_primera',NULL)";
	if (mysqli_query($DB_con, $insert_venta_primera)) {
		echo "<script type='text/javascript'> alert('New record created successfully');</script>";
		header('location: /concremag/venta/ventas.php');
		exit;
	} else {
		echo "<script type='text/javascript'> alert('Error: ". $insert_venta_primera . "<br>" . mysqli_error($DB_con)."');</script>";
	}
	}
	else{
		$venta_segunda = $_POST['cant_venta'];
		$insert_venta_segunda = "INSERT INTO venta (id_venta,fecha_venta,orden,venta_primera,venta_segunda,id_total_primera,id_total_segunda)
										VALUES('','$fecha_venta','$orden',NULL,'$venta_segunda',NULL,'$id_total_segunda')";
	if (mysqli_query($DB_con, $insert_venta_segunda)) {
		echo "<script type='text/javascript'> alert('New record created successfully');</script>";
		header('location: /concremag/venta/ventas.php');
		exit;
	} else {
		echo "<script type='text/javascript'> alert('Error: ". $insert_venta_segunda . "<br>" . mysqli_error($DB_con)."');</script>";
	}
	}
	
	

$DB_con->close();
	
}
?>