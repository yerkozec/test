<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8" />
        <title>
            Eficiencia 
        </title><!--titulo de la pestaña -->
        <script src="modernizr.min.js"></script>
    </head>
    <body style="background-color:  #99a3a4 ;margin:0px;">
		<link rel="stylesheet" href="/resources/demos/style.css">
		<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
		<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
		<link rel="stylesheet" href="/concremag/sidenav.css" type="text/css">
		<link rel="stylesheet" href="/concremag/incidencia/table_style.css" type="text/css">
        
		<?php include 'C:/xampp/htdocs/concremag/incidencia/mostrar_incidencia.php';?>

        <header> 
            <img src = "/concremag/img/banner.jpg" alt ="banner" style="width:100%;height:250px;"/>
            <div class="topnav" align="center">
				<a href="/concremag/index.php">Home</a>
				<a href="/concremag/producto/producto.php">Producto</a>
				<a href="/concremag/produccion/produccion.php">Produccion</a>
				<a class="active" href="incidencia.php">Incidencia</a>
				<a href="/concremag/paletizado/paletizado.php">Paletizado</a>
				<a href="/concremag/valorizacion/valorizacion.php">Valorizacion</a>
				<a href="/concremag/ventas/ventas.php">Ventas y Despacho</a>
			</div> 
        </header><!--MENU DE PAGINACION-->
		
        <fieldset style= "background: #d0d3d4 ;width: 50%; margin:  0px auto;"> 
            
			<div style="padding:15px 30px;">
				<form action="incidencia.php" method="post">
					<label>Fecha:</label>
					<input type="text;datetime-local" name="fecha_incidencia" id="datepicker" placeholder="Ingresar fecha">
					<input type="text;datetime-local" id="datepicker2" name="fin" placeholder="Ingresar fecha fin" onchange="document.getElementById('mostrar_inci').click();">
					<input type="submit" style="display:none;float:right; margin-bottom:4px;" name="mostrar" value="MOSTRAR" id="mostrar_inci">
				</form>
			</div> 
			
            <fieldset style= "background: #d0d3d4 ;width: 90%; margin:  5px auto;">
				<table style="margin: 10px 20%;">
					<tr >
						<th rowspan=2 class="moldes">Molde</th>
						<th rowspan=2>Fecha</th>
						<th colspan=3>Eficiencia</th>
					</tr>
					<tr>
						<th>Primera</th>
						<th>Segunda</th>
						<th>Perdida</th>
					</tr>
					<?php
					if(isset($_POST["mostrar"])){ incidencia();}
					?>
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