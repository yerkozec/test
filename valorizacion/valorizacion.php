<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8" />
        <title>
            Valorizacion 
        </title><!--titulo de la pestaña -->
		<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
		<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
        <link rel="stylesheet" href="/resources/demos/style.css">
        <script src="modernizr.min.js"></script>
		<link rel="stylesheet" href="/concremag/sidenav.css" type="text/css"/>
		<link rel="stylesheet" href="/concremag/incidencia/table_style.css" type="text/css">
		<?php include 'C:/xampp/htdocs/concremag/valorizacion/mostrar_valor.php';?>
    </head>
    <body style="background-color:  #99a3a4 ; margin:0px;">
        
		<header> <!--MENU DE PAGINACION-->
            <img src = "/concremag/img/banner.jpg" alt ="banner" style="width:100%;height:250px;"/>
			<div class="topnav" align="center">
				<a href="/concremag/index.php">Home</a>
				<a href="/concremag/producto/producto.php">Producto</a>
				<a href="/concremag/produccion/produccion.php">Produccion</a>
				<a href="/concremag/incidencia/incidencia.php">Incidencia</a>
				<a href="/concremag/paletizado/paletizado.php">Paletizado</a>
				<a class="active" href="valorizacion.php">Valorizacion</a>
				<a href="/concremag/ventas/ventas.php">Ventas y Despacho</a>
			</div> 
        </header>
		
		<fieldset style= "background: #d0d3d4 ;width: 50%; margin:  0px auto;"> 
			<div style="padding:15px 30px;">
			<form action="valorizacion.php" method="post">
            Fechas: 
			<input type="text;datetime-local" id="datepicker" name="inicio" placeholder="Ingresar fecha inicio">
			<input type="text;datetime-local" id="datepicker2" name="fin" placeholder="Ingresar fecha fin" onchange="document.getElementById('mostrar_valorizacion').click();">
			<input type="submit" name="mostrar" style="display:none;float:right;" value="MOSTRAR" id="mostrar_valorizacion" onclick = "mostrar();">
			</div>
			</form>
            <fieldset style= "background: #d0d3d4 ;width: 90%; margin:  0px auto;">
				<table>
					<tr>
						<th rowspan=2>Molde</th>
						<th colspan=3>Primera Calidad</th>
						<th colspan=3>Segunda Calidad</th>
					</tr>
					<tr>
						<th>Cantidad</th>
						<th>Precio</th>
						<th>Total</th>
						<th>Cantidad</th>
						<th>Precio</th>
						<th>Total</th>
					</tr>
					<tr>
						<td>prefabricado</td>
						<td>stock/total</td>
						<td>Precio/unitario</td>
						<td>(precio*stock)</td>
						<td>stock/total</td>
						<td>Precio/unitario</td>
						<td>(precio*stock)</td>
					</tr>
					<?php if(isset($_POST["mostrar"])){ valorizacion(); } ?>
				</table>
            </fieldset>
            
        </fieldset>
	</body>
</html>	

<script>
$( function() {
	$( "#datepicker" ).datepicker();
} );
</script>
<script>
$( function() {
	$( "#datepicker2" ).datepicker();
} );
</script>