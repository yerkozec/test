<?php



function dar_fecha(){
	$fecha_produ = $_POST['datepicker1'];
	$fecha_produ = date('Y-m-d',strtotime(str_replace('-','/',$fecha_produ)));
	echo $fecha_produ;
}
function molde_paletizar(){
	?>
	<?php require 'C:/xampp/htdocs/concremag/conexion/conexion.php';?>
	<?php
	$hh = 0;
	$fecha_produ = $_POST['datepicker1'];
	$fecha_produ = date('Y-m-d',strtotime(str_replace('-','/',$fecha_produ)));
	$molde = "SELECT id_produccion, molde, produc.id_producto
				FROM produccion produc
				JOIN producto
				ON producto.id_producto = produc.id_producto
				WHERE fecha = '$fecha_produ'";
	$buscar = mysqli_query($DB_con,$molde);
	?>
	<?php
	while ($mostrar = mysqli_fetch_array($buscar)){
	$id_producto = $mostrar['id_producto'];
	$radio_molde = $mostrar['molde'];
	$id_produccion = $mostrar['id_produccion']
	?>
	<td><input type="radio" name="molde" value="<?php echo $id_produccion;?>" onclick="<?php $hh=$id_produccion; echo $hh;?>" ><?php echo $id_produccion;?> - <?php echo $radio_molde;?></td>
	
	<?php
	}
}
	?>
	
<?php

if(isset($_POST["ingresar_palet"])){

	?>
	<?php require 'C:/xampp/htdocs/concremag/conexion/conexion.php';?>
	<?php
	$fecha_produ = $_POST['datepicker1'];
	$fecha_produ = date('Y-m-d',strtotime(str_replace('-','/',$fecha_produ)));
	$fecha_palet = $_POST['datepicker2'];
	$fecha_palet = date('Y-m-d',strtotime(str_replace('-','/',$fecha_palet)));
	$hora_inicio = $_POST['timepicker1'];
	$hora_fin = $_POST['timepicker2'];
	$cant_trabajador = $_POST['cant_trabajador'] ;
	$cant_primera = $_POST['cant_primera'];
	$cant_segunda = $_POST['cant_segunda'];
	$cant_perdida = $_POST['cant_perdida'];
	$moldes = $_POST['molde'];
	$id_produccion = $_POST['molde'];
	    
		echo "<script type='text/javascript'> alert('pre record created successfully');</script>";

	$insert_paletizado = "INSERT INTO paletizado (id_paletizado, fecha_palet, fecha_produccion, hora_inicio, hora_fin, cant_trabajador,id_produccion)
							VALUES ('','$fecha_palet','$fecha_produ','$hora_inicio','$hora_fin','$cant_trabajador','$id_produccion')";
	
	if (mysqli_query($DB_con, $insert_paletizado)) {
    echo "<script type='text/javascript'> alert('New record created successfully');</script>";
		
		$consulta_id_palet = "SELECT id_paletizado
								FROM paletizado pal
								ORDER BY id_paletizado DESC
								LIMIT 1";
		$buscar_id = mysqli_query($DB_con,$consulta_id_palet);
		$mostrar_id = mysqli_fetch_array($buscar_id);
		$id_palet = $mostrar_id['id_paletizado'];
		
		$consulta_id_producido = " SELECT
										produc.id_producto
									FROM
										paletizado pal
									JOIN produccion produc ON
										produc.id_produccion = pal.id_produccion
									WHERE
										produc.id_produccion = pal.id_produccion
									ORDER BY pal.id_paletizado
									LIMIT 1";
		$buscar_id_producido = mysqli_query($DB_con,$consulta_id_producido);
		$mostrar_id_producido = mysqli_fetch_array($buscar_id_producido);
		$id_producido = $mostrar_id_producido['id_producto'];
		
		$consulta_id_primera = "SELECT
									tp.id_total_prim 
								FROM
									total_primera tp
								JOIN producto pro ON
									pro.id_producto = tp.id_producto
								JOIN total_segunda ts ON
									ts.id_producto = pro.id_producto
								WHERE
									tp.id_producto = '$id_producido'";
		$buscar_id_primera = mysqli_query($DB_con,$consulta_id_primera);
		$mostrar_id_primera = mysqli_fetch_array($buscar_id_primera);
		$id_total_prim = $mostrar_id_primera['id_total_prim'];
		
		$consulta_id_segunda = "SELECT
									ts.id_total_segunda 
								FROM
									total_primera tp
								JOIN producto pro ON
									pro.id_producto = tp.id_producto
								JOIN total_segunda ts ON
									ts.id_producto = pro.id_producto
								WHERE
									tp.id_producto = '$id_producido'";
		$buscar_id_segunda = mysqli_query($DB_con,$consulta_id_segunda);
		$mostrar_id_segunda = mysqli_fetch_array($buscar_id_segunda);
		$id_total_segunda = $mostrar_id_segunda['id_total_segunda'];
		
		$insert_cant_produccion = "INSERT INTO cant_produccion (id_cant_produ,cant_primera,cant_segunda,cant_perdida,id_paletizado,id_total_prim,id_total_segunda)
									VALUES ('','$cant_primera','$cant_segunda','$cant_perdida','$id_palet','$id_total_prim','$id_total_segunda')";
									
		if (mysqli_query($DB_con, $insert_cant_produccion)) {
			echo "<script type='text/javascript'> alert('New record created successfully');</script>";
			
			$consulta_id_paletizado = "SELECT id_paletizado
										FROM cant_produccion cp
										ORDER BY cp.id_cant_produ DESC
										LIMIT 1";
			$buscar_id_paletizado = mysqli_query($DB_con,$consulta_id_paletizado);
			$mostrar_id_paletizado = mysqli_fetch_array($buscar_id_paletizado);
			$id_paletizado= $mostrar_id_paletizado['id_paletizado'];
			
			$consulta_producido = "SELECT cant_producido
									 FROM produccion produc
									 JOIN paletizado pal
									 ON pal.id_produccion = produc.id_produccion
									 WHERE pal.id_produccion = produc.id_produccion
									 ORDER  BY pal.id_paletizado DESC
									 LIMIT 1";
			$buscar_producido = mysqli_query($DB_con,$consulta_producido);
			$mostrar_producido = mysqli_fetch_array($buscar_producido);
			$producido= $mostrar_producido['cant_producido'];
			
			$consulta_fecha_inci = "SELECT fecha_palet
									  FROM paletizado pal
									  ORDER BY pal.id_paletizado DESC
									  LIMIT 1";
			$buscar_fecha_inci = mysqli_query($DB_con,$consulta_fecha_inci);
			$mostrar_fecha_inci = mysqli_fetch_array($buscar_fecha_inci);
			$fecha_inci= $mostrar_fecha_inci['fecha_palet'];
			
			$consulta_primera = "SELECT ((cant_primera *100)/'$producido') as priemra
									FROM cant_produccion cp
									WHERE cp.id_paletizado = '$id_paletizado'";
			$buscar_primera = mysqli_query($DB_con,$consulta_primera);
			$mostrar_primera = mysqli_fetch_array($buscar_primera);
			$primera= $mostrar_primera['primera'];
									
			$consulta_segunda = "SELECT ((cant_segunda * 100)/'$producido') as segunda
									FROM cant_produccion cp
									WHERE cp.id_paletizado = '$id_paletizado'";
			$buscar_segunda = mysqli_query($DB_con,$consulta_segunda);
			$mostrar_segunda = mysqli_fetch_array($buscar_segunda);
			$segunda= $mostrar_segunda['segunda'];
									
			$consulta_perdida = "SELECT ((cant_perdida * 100)/'$producido') as perdida
									FROM cant_produccion cp
									WHERE cp.id_paletizado = '$id_paletizado'";			
			$buscar_perdida = mysqli_query($DB_con,$consulta_perdida);
			$mostrar_perdida = mysqli_fetch_array($buscar_perdida);
			$perdida= $mostrar_perdida['perdida'];
									
			$consulta_id_cant_produ = "SELECT id_cant_produ
										 FROM cant_produccion
										 ORDER BY id_cant_produ DESC
										 LIMIT 1";
			$buscar_id_cant_produ = mysqli_query($DB_con,$consulta_id_cant_produ);
			$mostrar_id_cant_produ = mysqli_fetch_array($buscar_id_cant_produ);
			$id_cant_produ= $mostrar_id_cant_produ['id_cant_produ'];
			
			$insert_eficiencia = "INSERT INTO eficiencia(id_eficiencia, fecha_inci, primera_cal, segunda_cal, perdida, id_cant_produ)
										VALUES('','$fecha_inci','$primera','$segunda','$perdida','$id_cant_produ')";
			if (mysqli_query($DB_con, $insert_eficiencia)) {
				echo "<script type='text/javascript'> alert('New record created successfully');</script>";
				header('location: /concremag/paletizado/paletizado.php');
				exit;
			}else {
			echo "<script type='text/javascript'> alert('Error: ". $insert_eficiencia . "<br>" . mysqli_error($DB_con)."');</script>";
			}
		} else {
		echo "<script type='text/javascript'> alert('Error: ". $insert_cant_produccion . "<br>" . mysqli_error($DB_con)."');</script>";
		}
	} else {
	echo "<script type='text/javascript'> alert('Error: ". $insert_paletizado . "<br>" . mysqli_error($DB_con)."');</script>";
	}
	
$DB_con->close();
}

?>

