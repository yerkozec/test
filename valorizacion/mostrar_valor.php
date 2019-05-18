<?php
function valorizacion(){?>
	<?php require 'C:/xampp/htdocs/concremag/conexion/conexion.php';?>
	<?php
	$fecha_inicio = $_POST['inicio'];
	$fecha_inicio = date('Y-m-d',strtotime(str_replace('-','/',$fecha_inicio)));
	$fecha_fin = $_POST['fin'];
	$fecha_fin = date('Y-m-d',strtotime(str_replace('-','/',$fecha_fin)));
	$valor_total_primera = 0;
	$valor_total_segunda = 0;
	$sql_query = "SELECT molde,valor_unitario,cant_total_p,cant_total_s,fecha_inci
					FROM producto produ JOIN valor_producto vp 
					ON vp.id_producto = produ.id_producto 
					JOIN total_primera tp 
					ON tp.id_producto = produ.id_producto 
					JOIN total_segunda ts 
					ON ts.id_producto = produ.id_producto 
					JOIN cant_produccion cp
					ON cp.id_total_prim = tp.id_total_prim
					JOIN cant_produccion
					ON cp.id_total_segunda = ts.id_total_segunda
					JOIN paletizado pal
					ON pal.id_paletizado = cp.id_paletizado
					JOIN eficiencia efi
					ON efi.id_cant_produ = cp.id_cant_produ
					WHERE fecha_inci BETWEEN '$fecha_inicio' AND '$fecha_fin'";
	$resultado = mysqli_query($DB_con,$sql_query);
	while($mostrar = mysqli_fetch_array($resultado)){
		
		$primera = $mostrar['valor_unitario'];
		$segunda = $mostrar['valor_unitario'];
		$segunda = ($segunda - ($segunda * 0.20));
		
	//	$unitario_p = $uf * $primera;
	//	$unitario_s = $uf * $segunda;
		$total_primera = $mostrar['cant_total_p'];
		$total_primera = ($total_primera * $primera);
		$temp = $total_primera;
		$valor_total_primera += $temp;
		$total_primera = number_format("$total_primera");
		
		$total_segunda = $mostrar['cant_total_s'];	
		$total_segunda = ($total_segunda * $segunda);
		$temp2 = $total_segunda;
		$valor_total_segunda += $temp2;
		$total_segunda = number_format("$total_segunda");
		
		
		
		?>
		<tr>
		<td class="tdd"><?php echo $mostrar['molde'];?></td>
		<td class="tdd"><?php echo $mostrar['cant_total_p'];?></td>
		<td class="tdd"><?php echo $primera;?></td>
		<td class="tdd"><?php echo "$".$total_primera;?></td>
		<td class="tdd"><?php echo $mostrar['cant_total_s'];?></td>
		<td class="tdd"><?php echo $segunda;?></td>
		<td class="tdd"><?php echo "$".$total_segunda;?></td>

		</tr>
		<?php	
	}
	$valor_total_primera = number_format("$valor_total_primera");
	$valor_total_segunda = number_format("$valor_total_segunda");
	?>
		<tr>
		<th class="tdd" colspan=3>total primera</th>
		<td class="tdd"><?php echo "$".$valor_total_primera;?></td>
		<th class="tdd" colspan=2>total segunda</th>
		<td class="tdd"><?php echo "$".$valor_total_segunda;?></td>
		</tr>
	<?php
}
?>