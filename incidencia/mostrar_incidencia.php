<?php
function incidencia(){
?>
	<?php require 'C:/xampp/htdocs/concremag/conexion/conexion.php';?>
	<?php
	$fecha_inci = $_POST['fecha_incidencia'];
	$fecha_inci = date('Y-m-d',strtotime(str_replace('-','/',$fecha_inci)));
	$fecha_fin = $_POST['fin'];
	$fecha_fin = date('Y-m-d',strtotime(str_replace('-','/',$fecha_fin)));
	$sql_query = "SELECT molde as moldes, fecha_inci, primera_cal, segunda_cal, perdida
					FROM eficiencia efi 
					JOIN cant_produccion cp 
					ON cp.id_cant_produ = efi.id_cant_produ 
					JOIN paletizado pal 
					ON pal.id_paletizado = cp.id_paletizado 
					JOIN produccion
					ON produccion.id_produccion = pal.id_produccion 
					JOIN producto produ
					ON produ.id_producto = produccion.id_producto
					WHERE efi.fecha_inci BETWEEN '$fecha_inci' AND '$fecha_fin'
					ORDER BY fecha_inci ASC";
	$resultado = mysqli_query($DB_con,$sql_query);
	while($mostrar = mysqli_fetch_array($resultado)){
		$molde = $mostrar['moldes'];
		$fecha_inci = $mostrar['fecha_inci'];
		?>
		<tr>
		<td class="tdd"><?php echo $molde;?></td>
		<td class="tdd"><?php echo $fecha_inci;?></td>
		<td class="tdd"><?php echo $mostrar['primera_cal'].'%';?></td>
		<td class="tdd"><?php echo $mostrar['segunda_cal'].'%';?></td>
		<td class="tdd"><?php echo $mostrar['perdida'].'%';?></td>
		</tr>
		<?php
	}
}

?>