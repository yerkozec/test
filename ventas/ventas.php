<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8" />
        <title>
            Ventas
        </title><!--titulo de la pestaña -->
        <script src="modernizr.min.js"></script>
		<link rel="stylesheet" href="/concremag/sidenav.css" type="text/css"/>
		<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
		<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
        <link rel="stylesheet" href="/resources/demos/style.css">
		<?php include 'C:/xampp/htdocs/concremag/ventas/update_venta.php';?>
		<?php include 'C:/xampp/htdocs/concremag/ventas/insert_despacho.php';?>
		<?php include 'C:/xampp/htdocs/concremag/ventas/mostrar_orden.php';?>
    </head>
    <body style="background-color:  #99a3a4 ; margin:0px;">
        <header> 
            <img src = "/concremag/img/banner.jpg" alt ="banner" style="width:100%;height:250px;"/>
			<div class="topnav" align="center">
				<a href="/concremag/index.php">Home</a>
				<a href="/concremag/producto/producto.php">Producto</a>
				<a href="/concremag/produccion/produccion.php">Produccion</a>
				<a href="/concremag/incidencia/incidencia.php">Incidencia</a>
				<a href="/concremag/paletizado/paletizado.php">Paletizado</a>
				<a href="/concremag/valorizacion/valorizacion.php">Valorizacion</a>
				<a class="active" href="ventas.php">Ventas y Despacho</a>
			</div> 
        </header> <!--MENU DE PAGINACION-->
		
		<fieldset style= "background: #d0d3d4 ;width: 50%; margin:  0px auto;"> 
		<fieldset style= "background: #d0d3d4 ;width: 90%; margin:  5px auto;">
			<table style="margin: 10px; width:90%">
				<form action="update_venta.php" method="post">
				<td><h3>Ventas</h3></td>
				<tr>
					<td>Fecha:</td>
					<td><input type="text;datetime-local" name="fecha_venta" id="datepicker" placeholder="Ingresar fecha venta"></td>
				</tr>
				<tr>
					<tr>
					<td>Ingresar Cantidad Vendida:</td>
					<td><input type="number" name="cant_venta" id="cant_venta" step="1" value="0" style="width:140px"></td>
					</tr>
					<tr>
					<td>Seleccionar Calidad:</td>
					<td><select name="calidad" style="width:145px">
							<option value="">Calidad</option>
                            <option value="1">Primera</option>
                            <option value="2">Segunda</option>
                        </select></td>
					</tr>
					<tr>
					<td>Seleccionar Producto</td>
					<td>
					<select name="prefabricados" style="width:145px">
                            <option value="1">BLOQUES SPLIT</option>
                            <option value="2">BLOQUE</option>
                            <option value="3">BLOQUE 140</option>
                            <option value="4">ADOQUIN SIGMA</option>
                            <option value="5">ADOQUIN CRUZ</option>
                            <option value="6">ADOQUIN SIAMÉS</option>
                            <option value="7">SOLERILLA</option>
                            <option value="8">SOLERA</option>
                        </select>
					</td>
					</tr>
					<tr>
					<td>Seleccionar Color</td>
					<td>
						<select name="color" style=" width:145px">
                            <option value="1">NORMAL</option>
                            <option value="2">AMARILLO</option>
                            <option value="3">ROJO</option>
                            <option value="4">NEGRO</option>
							<option value="5">CAFE</option>
                        </select>
					</td>
					</tr>
					<tr>
						<td>Ingresar Numero de Orden:</td>
						<td><input type="text" name="orden_venta" id="orden_venta" value="0" style="width:140px"></td>
					</tr>
					<tr>
					<td></td>
					<td></td>
					<td><input type="submit" style="width:130px" name="agregar_venta" value="Agregar Venta" id="boton1"><td>
					</tr>
				</tr>
				</form>
				<form action="ventas.php" method="post">
				<td><h3>Despachos</h3></td>
				<tr>
					<td>Fecha Venta:</td>
					<td><input type="text;datetime-local" name="fecha_venta" id="datepicker2" value="<?php mostrar_fecha();?>" placeholder="Ingresar fecha venta" onchange="document.getElementById('mostrar_orden').click();"></td>
				</tr>
				<tr>
					<td></td>
					<td></td>
					<td><input type="submit" style="display:none;width:130px" name="mostrar_orden" value="Mostrar Orden" id="mostrar_orden"><td>
				</tr>
				</form>
				<tr>
				<form action="insert_despacho.php" method="post">
					<tr>
						<td>Seleccionar Orden</td>
						<td>
							<?php	
								if(isset($_POST["mostrar_orden"])){mostrar_orden();}
							?>
						</td>
					</tr>
					<tr>
					<td>Ingresar Fecha Despachada:</td>
					<td><input type="text/datetime-local" id="datepicker3" name="fecha_despacho" placeholder="Ingresar fecha despacho"></td>
					</tr>
					
					<tr>
					<td>Ingresar Cantidad Despachada:</td>
					<td><input type="number" name="cant_despacho" id="cant_despacho" step="1" value="0" style="width:140px"></td>
					</tr>
					
					<tr>
					<td>Seleccionar Calidad:</td>
					<td>
						<select name="calidad_despacho" style="width:145px">
                            <option value="1">Primera</option>
                            <option value="2">Segunda</option>
                        </select></td>
					</tr>
					
					<tr>
					<td>Seleccionar Producto</td>
					<td>
					<select name="prefabricados" style="width:145px">
                            <option value="1">BLOQUES SPLIT</option>
                            <option value="2">BLOQUE</option>
                            <option value="3">BLOQUE 140</option>
                            <option value="4">ADOQUIN SIGMA</option>
                            <option value="5">ADOQUIN CRUZ</option>
                            <option value="6">ADOQUIN SIAMÉS</option>
                            <option value="7">SOLERILLA</option>
                            <option value="8">SOLERA</option>
                        </select>
					</td>
					</tr>
					<tr>
					<td>Seleccionar Color</td>
					<td>
						<select name="color" style=" width:145px">
                            <option value="1">NORMAL</option>
                            <option value="2">AMARILLO</option>
                            <option value="3">ROJO</option>
                            <option value="4">NEGRO</option>
							<option value="5">CAFE</option>
                        </select>
					</td>
					</tr>
					<tr>
						<td></td>
						<td></td>
						<td><input type="submit" style="width:130px" name="agregar_despacho" value="Agregar Despacho" id="boton1"><td>
					</tr>
				</tr>
				</form>
			</table>
		</fieldset>
        </fieldset>
    </body>
</html>

<script>
$( function() {
$( "#datepicker").datepicker();
} );
</script>

<script>
$( function() {
$( "#datepicker2" ).datepicker();
} );
</script>

<script>
$( function() {
$( "#datepicker3").datepicker();
} );
</script>