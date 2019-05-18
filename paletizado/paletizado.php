<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8" />
        <title> 
            Paletizado 
        </title> <!--titulo de la pestaña -->
        <script src="modernizr.min.js"></script>
		<script src="radio_form.js"></script> 
		<link rel="stylesheet" href="/concremag/sidenav.css" type="text/css"/>
		<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
		<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
        <link rel="stylesheet" href="/resources/demos/style.css">
		<link rel="radio_form" href="radio_form.js">
		<?php include 'C:/xampp/htdocs/concremag/paletizado/insert_palet.php';?>
    </head>
    <body style="background-color:  #99a3a4 ; margin:0px;">
		<header> <!--MENU DE PAGINACION-->
            <img src = "/concremag/img/banner.jpg" alt ="banner" style="width:100%;height:250px;"/>
			<div class="topnav" align="center">
				<a href="/concremag/index.php">Home</a>
				<a href="/concremag/producto/producto.php">Producto</a>
				<a href="/concremag/produccion/produccion.php">Produccion</a>
				<a href="/concremag/incidencia/incidencia.php">Incidencia</a>
				<a class="active" href="paletizado.php">Paletizado</a>
				<a href="/concremag/valorizacion/valorizacion.php">Valorizacion</a>
				<a href="/concremag/ventas/ventas.php">Ventas y Despacho</a>
			</div> 
        </header>
		<fieldset style= "background: #d0d3d4 ;width: 50%; margin:  0px auto;">
		
            <div style="padding:15px 30px;">
			<form action="paletizado.php" method="post">
				Fecha: 
				<input type="text;datetime-local" name="datepicker1" id="datepicker1" placeholder="Ingresar fecha" value="<?php dar_fecha();?>" onchange="document.getElementById('mostrar_molde').click();">
				<input type="submit" name="mostrar_molde" style="display:none;" value="MOSTRAR" id="mostrar_molde">
			</div>
			</form>
            <fieldset style= "background: #d0d3d4 ;width: 90%; margin:  0px auto;">
			
				<div>
				<form action="insert_palet.php" method="post">
					<table>
						<tr>
							<td>Molde:<td/>
							<?php 
							if(isset($_POST["mostrar_molde"])){ molde_paletizar(); }
							?>
						</tr>
					
					</table>
				</div>
				<hr style="color:#fff;"/>
				<table>
					<tr>
						<td>Fecha paletizado: </td>
						<td><input type="text;datetime-local" id="datepicker2" placeholder="Ingresar fecha"></td>
					</tr>
					<tr>
						<td>Hora Inicio:</td>
						<td><input type="time" name="timepicker1" align="middle" style="width:140px"></td>
						<td>(hh:mm AM/PM)</td>
					</tr>
					<tr>
						<td>Hora Fin:</td>
						<td><input type="time" name="timepicker2" style="width:140px"></td>
						<td>(hh:mm AM/PM)</td>
					</tr>
					<tr>
						<td>Cantidad trabajadores</td>
						<td><input type="number" name="cant_trabajador" step="1" value="0" style="width:140px"></td>
						<td>Personas</td>
					</tr>
					<tr>
						<td>Cantidad Primera:</td>
						<td><input type="number" name="cant_primera" step="1" value="0" style="width:140px"></td>
						<td>(unidades)</td>
					</tr>
					<tr>
						<td>Cantidad Segunda:</td>
						<td><input type="number" name="cant_segunda" step="1" value="0" style="width:140px"></td>
						<td>(unidades)</td>
					</tr>
					<tr>
						<td>Cantidad Perdida:</td>
						<td><input type="number" id="cant_perdida" step="1" value="0" style="width:140px" onchange="suma()"></td>
						<td> (unidades)</td>
					</tr>
						
				</table>
				<input type="submit" name="ingresar_palet" style="float:right;" value="INGRESAR" id="ingresar_palet">
				</form>
            </fieldset>
        </fieldset>
	</body>
</html>	

<script>
$( function() {
	$( "#datepicker1" ).datepicker();
} );
</script>
<script>
$( function() {
	$( "#datepicker2" ).datepicker();
} );
</script>