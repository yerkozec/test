<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8" />
        <title>
            Produccion
        </title><!--titulo de la pestaña -->
        <script src="modernizr.min.js"></script>
		<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
		<link rel="stylesheet" href="/resources/demos/style.css">
		<link rel="stylesheet" href="style_produ.css" type="text/css" media="all" />
		<link rel="stylesheet" href="/concremag/sidenav.css" type="text/css"/>
		<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
		<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
		<?php include 'C:/xampp/htdocs/concremag/produccion/funcion_alerta.php';?>
    </head>
    <body style="background-color:  #99a3a4; margin:0px;" >
		<header> <!--MENU DE PAGINACION-->
            <img src = "/concremag/img/banner.jpg" alt ="banner" style="width:100%;height:250px;"/>
           	<div class="topnav" align="center">
				<a href="/concremag/index.php">Home</a>
				<a href="/concremag/producto/producto.php">Producto</a>
				<a class="active" href="produccion.php">Produccion</a>
				<a href="/concremag/incidencia/incidencia.php">Incidencia</a>
				<a href="/concremag/paletizado/paletizado.php">Paletizado</a>
				<a href="/concremag/valorizacion/valorizacion.php">Valorizacion</a>
				<a href="/concremag/ventas/ventas.php">Ventas y Despacho</a>
			</div> 
        </header>
		<fieldset style= "background: #d0d3d4 ;width: 50%; margin:  0px auto;">
			<form action="funcion_alerta.php" method="post">
                <fieldset style= "background: #d0d3d4 ;width: 90%; margin:  0px auto;">
                    
                    <p style="float:right">
                        <?php echo 'Seleccione Molde:';?>
                        <select name="prefabricados" style="float:right;width:140px">
                            <option value="1">BLOQUES SPLIT</option>
                            <option value="2">BLOQUE</option>
                            <option value="3">BLOQUE 140</option>
                            <option value="4">ADOQUIN SIGMA</option>
                            <option value="5">ADOQUIN CRUZ</option>
                            <option value="6">ADOQUIN SIAMÉS</option>
                            <option value="7">SOLERILLA</option>
                            <option value="8">SOLERA</option>
                        </select>
						<br/>
						<br/>
                        <?php echo 'Seleccione Color:';?>
                        <select name="color" style="float:right; width:140px">
                            <option value="1">NORMAL</option>
                            <option value="2">AMARILLO</option>
                            <option value="3">ROJO</option>
                            <option value="4">NEGRO</option>
							<option value="5">CAFE</option>
                        </select>
                    </p>
					<table>
						<tr>
							<td>Fecha: </td>
							<td><input type="text;datetime-local" name="datepicker" id="datepicker" style="width:140px"></td>
						</tr>
						<tr>
							<td>Hora Inicio:</td>
							<td><input type="time" name="timepicker1" id="timer1" align="middle" style="width:140px"></td>
							<td>(hh:mm AM/PM)</td>
						</tr>
						<tr>
							<td>Hora Fin:</td>
							<td><input type="time" name="timepicker2" style="width:140px"></td>
							<td>(hh:mm AM/PM)</td>
						</tr>
						<tr>
							<td>Detenciones:</td>
							<td><input type="time" name="timepicker3" style="width:140px"></td>
							<td>(hh:mm AM/PM)</td>
						</tr>
						<tr>
							<td>Colaciones:</td>
							<td><input type="time" name="timepicker4" style="width:140px"></td>
							<td>(hh:mm AM/PM)</td>
						</tr>
						<tr>
							<td>Volumen de materia ocupado:</td>
							<td><input type="number" name="vol_ocupado" step="0.01" style="width:140px"></td>
							<td>(m3)</td>
						</tr>
						<tr>
							<td>Cantidad Producido:</td>
							<td><input type="number" name="cant_produ" id="cant_producido" step="1" value="0" style="width:140px"></td>
							<td> (unidades)</td>
						</tr>
						<tr>
							<td>Cantidad Perdida:</td>
							<td><input type="number" name="cant_perdi" id="cant_perdido" step="1" value="0" style="width:140px"></td>
							<td> (unidades)</td>
						</tr>
						<tr>
							<td>Total=</td>
							<td><!--suma de cantidad producido con cantidad perdida ???--></td>
							<td> (unidades)</td>
						</tr>
						
					</table>
					
                </fieldset>
				<div class="tab">
                <button class="tab" name="ingresar">Ingresar</button>
				</div>
			</form>
		</fieldset>
    </body>
</html>


<script>
	$( function() {
		$( "#datepicker" ).datepicker();
	} );
</script>
