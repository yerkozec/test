<?php
function producto(){?>
	<?php require 'C:/xampp/htdocs/concremag/conexion/conexion.php';?>
	<?php
	$sql_query = "SELECT molde,stock_critico, color, pro.id_producto
					FROM producto pro
					JOIN total_primera tp
					ON tp.id_producto = pro.id_producto
					JOIN color co
					ON co.id_color = pro.id_color
					WHERE pro.id_producto = tp.id_producto";
	$resultado = mysqli_query($DB_con,$sql_query);
	while ($mostrar = mysqli_fetch_array($resultado)){
		$id_producto = $mostrar['id_producto'];
		$critico = $mostrar['stock_critico'];
		$consulta_stock = "SELECT cant_total_p as stock
							FROM total_primera tp
							WHERE tp.id_producto = '$id_producto'";
		$buscar_stock = mysqli_query($DB_con,$consulta_stock);
		$resultado_stock = mysqli_fetch_array($buscar_stock);
		$stock_real = $resultado_stock['stock'];
	//	(aqui va el codigo de sumar la lista de total_primera o segunda y restarle la venta )
		$color = $mostrar['color'];
		if($stock_real < $critico){?>
		<tr>
		<td class="tdd"><?php echo $mostrar['molde'];?></td>
		<td class="tdd"><?php echo $color;?></td>
		<td class="tdd" style="color:red;"><?php echo "$stock_real";?></td>
		</tr>
		<?php 
		} 
		
	}
}



//falta recibir la informacion para poder tomar que producto se quiere ocupar
function stock_disponible($q){?> 
	<?php require 'C:/xampp/htdocs/concremag/conexion/conexion.php';?>
	<?php
	$consulta_stock = "SELECT cant_total_p 
					FROM total_primera tp
					JOIN producto pro
					ON pro.id_producto = tp.id_producto
					WHERE tp.id_producto = '$q'";
	$resultado_primera = mysqli_query($DB_con,$consulta_stock);
	$mostrar_primera = mysqli_fetch_array($resultado_primera);
	$stock_primera = $mostrar_primera['cant_total_p'];
	
	$consulta_stock = "SELECT cant_total_s 
					FROM total_segunda ts
					JOIN producto pro
					ON pro.id_producto = ts.id_producto
					WHERE ts.id_producto = '$q'";
	$resultado_segunda = mysqli_query($DB_con,$consulta_stock);
	$mostrar_segunda = mysqli_fetch_array($resultado_segunda);
	$stock_segunda = $mostrar_segunda['cant_total_s'];
	
		?>
		<tr>
		<td class="tdd">Stock Disponible Primera</td>
		<td class="tdd"><?php echo $stock_primera;?></td>
		</tr>
		<tr>
		<td class="tdd">Stock Disponible Segunda</td>
		<td class="tdd"><?php echo $stock_segunda;?></td>
		</tr>
		<?php

}
?>