<!DOCTYPE html>
<html lang="es">
    <head>
		
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>
            Prefabricados
        </title><!--titulo de la pestaña -->
        <script src="modernizr.min.js"></script>
        <script src="funcion_mostrar.js"></script>
		<script src="funcion_color.js"></script> 
		<link rel="stylesheet" href="dropdown.css" type="text/css" media="all" />
        <link rel="stylesheet" href="style_produ.css" type="text/css" media="all" />
		<link rel="stylesheet" href="/concremag/sidenav.css" type="text/css"/>
        <link rel="funcion_mostrar" href="funcion_mostrar.js" type="function/js" />
		<link rel="funcion_color" href="funcion_color.js" type="function/js" />
		<link rel="funcion_subir_datos" href="funcion_subir_datos.js" type="function/js" />
		<link rel="stylesheet" href="tabla_style.css" type="text/css">
		<?php include 'C:/xampp/htdocs/concremag/producto/stock_critico.php';?>
		
    </head>
    <body style="background-color:  #99a3a4 ; margin:0px; max-width:100%">
        
		<header> 
            <img src = "/concremag/img/banner.jpg" alt ="banner" style="width:100%;height:250px;"/>
            <div class="topnav" align="center">
				<a href="/concremag/index.php">Home</a>
				<a class="active" href="producto.php">Producto</a>
				<a href="/concremag/produccion/produccion.php">Produccion</a>
				<a href="/concremag/incidencia/incidencia.php">Incidencia</a>
				<a href="/concremag/paletizado/paletizado.php">Paletizado</a>
				<a href="/concremag/valorizacion/valorizacion.php">Valorizacion</a>
				<a href="/concremag/ventas/ventas.php">Ventas y Despacho</a>
			</div> 
        </header><!--MENU DE PAGINACION-->
		<table>
			<tr>
			<td style="float:inline-start;">
			<fieldset class="fuera" id="fieldset">
					<! BLOQUE DE PRODUCTOS>
					
					<fieldset style= "background: #d0d3d4 ;width: 90%; margin:  0px auto; height:90%;">
					
					<aside>
						<div class="dropdown" id="adoquin_cruz_tab">
							<button class="dropbtn" onclick="abrirproducto(event, 'adoquin_cruz')">ADOQUIN CRUZ</button>
							<div class="dropdown-content">
								<color class="tablinks2" onclick="abrircolor(event, 'cruz_normal')"id= "defaultOpen2" >NORMAL</color>
								<color class="tablinks2" onclick="abrircolor(event, 'cruz_amarillo')">AMARILLO</color>
								<color class="tablinks2" onclick="abrircolor(event, 'cruz_rojo')">ROJO</color>
								<color class="tablinks2" onclick="abrircolor(event, 'cruz_negro')">NEGRO</color>
								<color class="tablinks2" onclick="abrircolor(event, 'cruz_cafe')">CAFE</color>
							</div>
						</div>
						<div class="dropdown" id="adoquin_siames_tab">
							<button class="dropbtn" onclick="abrirproducto(event, 'adoquin_siames')">ADOQUIN SIAMÉS</button>
								<div class="dropdown-content">
									<color class="tablinks2" onclick="abrircolor(event, 'siames_normal')" >NORMAL</color>
									<color class="tablinks2" onclick="abrircolor(event, 'siames_amarillo')">AMARILLO</color>
									<color class="tablinks2" onclick="abrircolor(event, 'siames_rojo')">ROJO</color>
									<color class="tablinks2" onclick="abrircolor(event, 'siames_negro')">NEGRO</color>
									<color class="tablinks2" onclick="abrircolor(event, 'siames_cafe')">CAFE</color>
								</div>
						</div>   
						
						<div class="dropdown" id="adoquin_sigma_tab">
							<button class="dropbtn" onclick="abrirproducto(event, 'adoquin_sigma')">ADOQUIN SIGMA</button>
							<div class="dropdown-content">
								<color class="tablinks2" onclick="abrircolor(event, 'sigma_normal')" id= "defaultOpen4">NORMAL</color>
								<color class="tablinks2" onclick="abrircolor(event, 'sigma_amarillo')">AMARILLO</color>
								<color class="tablinks2" onclick="abrircolor(event, 'sigma_rojo')">ROJO</color>
								<color class="tablinks2" onclick="abrircolor(event, 'sigma_negro')">NEGRO</color>
								<color class="tablinks2" onclick="abrircolor(event, 'sigma_cafe')">CAFE</color>
							</div>
						</div>
						
						<div class="dropdown" id="bloque_tab">
							<button class="dropbtn" onclick="abrirproducto(event, 'bloque')">BLOQUE 140</button>
						</div>

						<div class="dropdown" id="bloque_split_tab">
							<button class="dropbtn" onclick="abrirproducto(event, 'bloque_split')">BLOQUE SPLIT CORT</button>
							<div class="dropdown-content">
								<color class="tablinks2" onclick="abrircolor(event, 'split_normal')" id= "defaultOpen5">NORMAL</color>
								<color class="tablinks2" onclick="abrircolor(event, 'split_amarillo')">AMARILLO</color>
								<color class="tablinks2" onclick="abrircolor(event, 'split_rojo')">ROJO</color>
								<color class="tablinks2" onclick="abrircolor(event, 'split_negro')">NEGRO</color>
								<color class="tablinks2" onclick="abrircolor(event, 'split_cafe')">CAFE</color>
							</div>
						</div>
						
						<!--<div class="dropdown" id="bloque_split_esquina_tab"> <! BOTON DE BLOQUE SPLIT CORTADO ESQUINA>
							<button class="dropbtn" onclick="abrirproducto(event, 'bloque_split_esquina')">BLOQUE SPLIT CORT</button>
							<div class="tab">
								<button class="tablinks2" onclick="abrircolor(event, 'split_esquina_normal')">NORMAL</button>
								<button class="tablinks2" onclick="abrircolor(event, 'split_esquina_amarillo')">AMARILLO</button>
								<button class="tablinks2" onclick="abrircolor(event, 'split_esquina_rojo')">ROJO</button>
								<button class="tablinks2" onclick="abrircolor(event, 'split_esquina_negro')">NEGRO</button>
								<button class="tablinks2" onclick="abrircolor(event, 'split_esquina_cafe')">CAFE</button>
							</div>
						</div>-->
						
						<div class="dropdown" id="bloque_190_tab">
							<button class="dropbtn" onclick="abrirproducto(event, 'bloque_190')">BLOQUE 190</button>
							<div class="dropdown-content">
								<color class="tablinks2" onclick="abrircolor(event, 'bloque190_normal')" id= "defaultOpen6">NORMAL</color>
								<color class="tablinks2" onclick="abrircolor(event, 'bloque190_amarillo')">AMARILLO</color>
								<color class="tablinks2" onclick="abrircolor(event, 'bloque190_rojo')">ROJO</color>
								<color class="tablinks2" onclick="abrircolor(event, 'bloque190_negro')">NEGRO</color>
								<color class="tablinks2" onclick="abrircolor(event, 'bloque190_cafe')">CAFE</color>
							</div>
						</div>
						
						<div class="dropdown" id="solerilla_tab">
							<button class="dropbtn" onclick="abrirproducto(event, 'solerilla')">SOLERILLA</button>
							<div class="dropdown-content">
								<color class="tablinks2" onclick="abrircolor(event, 'solerilla_normal')" id= "defaultOpen7">NORMAL</color>
								<color class="tablinks2" onclick="abrircolor(event, 'solerilla_amarillo')">AMARILLO</color>
								<color class="tablinks2" onclick="abrircolor(event, 'solerilla_rojo')">ROJO</color>
								<color class="tablinks2" onclick="abrircolor(event, 'solerilla_negro')">NEGRO</color>
								<color class="tablinks2" onclick="abrircolor(event, 'solerilla_cafe')">CAFE</color>
							</div>
						</div>
						
						<div class="dropdown" id="solera_tab">
							<button class="dropbtn" onclick="abrirproducto(event, 'solera')" id="defaultOpen">SOLERA</button>
						</div>
					</aside>
					
					<aside>
						<div id="adoquin_cruz" class="tabcontent"> <!BOTON DE ADOQUIN CRUZ>
						
							<div id="cruz_normal" class="tabcontent2">
								<h3>NORMAL</h3>
								<table class="tabla">
								<tr>
									<img src="/concremag/img/FICHA 8 ADOQUIN CRUZ.jpg" alt = "cruz_normal" style="width:60%; align:right"/>
								</tr>
								<tr>
									<td class="tdd"colspan=2>Stock Disponible</td>
								</tr>
								<?php stock_disponible($q='1051'); ?>
							</table>
							</div>
							
							<div id="cruz_amarillo" class="tabcontent2">
								<h3>AMARILLO</h3>
								<table class="tabla">
								<tr>
									<img src="/concremag/img/FICHA 8 ADOQUIN CRUZ.jpg" alt = "cruz_normal" style="width:60%; align:right"/>
								</tr>
								<tr>
									<td class="tdd"colspan=2>Stock Disponible</td>
								</tr>
								<?php stock_disponible($q='1052'); ?>
							</table>
							</div>

							<div id="cruz_rojo" class="tabcontent2">
								<h3>ROJO</h3>
								<table class="tabla">
								<tr>
									<img src="/concremag/img/FICHA 8 ADOQUIN CRUZ.jpg" alt = "cruz_normal" style="width:60%; align:right"/>
								</tr>
								<tr>
									<td class="tdd"colspan=2>Stock Disponible</td>
								</tr>
								<?php stock_disponible($q='1053'); ?>
							</table>
							</div>

							<div id="cruz_negro" class="tabcontent2">
								<h3>NEGRO</h3>
								<table class="tabla">
								<tr>
									<img src="/concremag/img/FICHA 8 ADOQUIN CRUZ.jpg" alt = "cruz_normal" style="width:60%; align:right"/>
								</tr>
								<tr>
									<td class="tdd"colspan=2>Stock Disponible</td>
								</tr>
								<?php stock_disponible($q='1054'); ?>
							</table>
							</div>
							
							<div id="cruz_cafe" class="tabcontent2">
								<h3>CAFE</h3>
								<table class="tabla">
								<tr>
									<img src="/concremag/img/FICHA 8 ADOQUIN CRUZ.jpg" alt = "cruz_normal" style="width:60%; align:right"/>
								</tr>
								<tr>
									<td class="tdd"colspan=2>Stock Disponible</td>
								</tr>
								<?php stock_disponible($q='1055'); ?>
							</table>
							</div>
							
							
						</div>	
						
						<div id="adoquin_siames" class="tabcontent"> <!BOTON DE ADOQUIN SIAMES>
						
							<div id="siames_normal" class="tabcontent2">
								<h3>NORMAL</h3>
								<table class="tabla">
								<tr>
									<img src="/concremag/img/FICHA 4 ADOQUIN SIAMES.jpg" alt = "siames_normal" style="width:60%; align:left"/>
								</tr>
								<tr>
									<td class="tdd"colspan=2>Stock Disponible</td>
								</tr>
								<?php stock_disponible($q='1061'); ?>
							</table>
								
							</div>

							<div id="siames_amarillo" class="tabcontent2">
								<h3>AMARILLO</h3>
								<table class="tabla">
								<tr>
									<img src="/concremag/img/FICHA 4 ADOQUIN SIAMES.jpg" alt = "siames_normal" style="width:60%; align:left"/>
								</tr>
								<tr>
									<td class="tdd"colspan=2>Stock Disponible</td>
								</tr>
								<?php stock_disponible($q='1062'); ?>
							</table>
							</div>

							<div id="siames_rojo" class="tabcontent2">
								<h3>ROJO</h3>
								<table class="tabla">
								<tr>
									<img src="/concremag/img/FICHA 4 ADOQUIN SIAMES.jpg" alt = "siames_normal" style="width:60%; align:left"/>
								</tr>
								<tr>
									<td class="tdd"colspan=2>Stock Disponible</td>
								</tr>
								<?php stock_disponible($q='1063'); ?>
							</table>
							</div>

							<div id="siames_negro" class="tabcontent2">
								<h3>NEGRO</h3>
								<table class="tabla">
								<tr>
									<img src="/concremag/img/FICHA 4 ADOQUIN SIAMES.jpg" alt = "siames_normal" style="width:60%; align:left"/>
								</tr>
								<tr>
									<td class="tdd"colspan=2>Stock Disponible</td>
								</tr>
								<?php stock_disponible($q='1064'); ?>
							</table>
							</div>
							
							<div id="siames_cafe" class="tabcontent2">
								<h3>CAFE</h3>
								<table class="tabla">
								<tr>
									<img src="/concremag/img/FICHA 4 ADOQUIN SIAMES.jpg" alt = "siames_normal" style="width:60%; align:left"/>
								</tr>
								<tr>
									<td class="tdd"colspan=2>Stock Disponible</td>
								</tr>
								<?php stock_disponible($q='1065'); ?>
							</table>
							</div>
						</div> 
						
						<div id="adoquin_sigma" class="tabcontent"> <! BOTON DE ADOQUIN SIGMA>
						
							<div id="sigma_normal" class="tabcontent2">
								<h3>NORMAL</h3>
							<table class="tabla">
								<tr>
									<img src="/concremag/img/FICHA 3 ADOQUIN SIGMA.jpg" alt = "sigma_normal" style="width:60%;align:left"/>
								</tr>
								<tr>
									<td class="tdd"colspan=2>Stock Disponible</td>
								</tr>
								<?php stock_disponible($q='1041'); ?>
							</table>	
							</div>

							<div id="sigma_amarillo" class="tabcontent2">
								<h3>AMARILLO</h3>
								<table class="tabla">
								<tr>
									<img src="/concremag/img/FICHA 3 ADOQUIN SIGMA.jpg" alt = "sigma_normal" style="width:60%;align:left"/>
								</tr>
								<tr>
									<td class="tdd"colspan=2>Stock Disponible</td>
								</tr>
								<?php stock_disponible($q='1042'); ?>
							</table>
							</div>

							<div id="sigma_rojo" class="tabcontent2">
								<h3>ROJO</h3>
								<table class="tabla">
								<tr>
									<img src="/concremag/img/FICHA 3 ADOQUIN SIGMA.jpg" alt = "sigma_normal" style="width:60%;align:left"/>
								</tr>
								<tr>
									<td class="tdd"colspan=2>Stock Disponible</td>
								</tr>
								<?php stock_disponible($q='1043'); ?>
							</table>
							</div>

							<div id="sigma_negro" class="tabcontent2">
								<h3>NEGRO</h3>
							<table class="tabla">
								<tr>
									<img src="/concremag/img/FICHA 3 ADOQUIN SIGMA.jpg" alt = "sigma_normal" style="width:60%;align:left"/>
								</tr>
								<tr>
									<td class="tdd"colspan=2>Stock Disponible</td>
								</tr>
								<?php stock_disponible($q='1044'); ?>
							</table>
							</div>
							
							<div id="sigma_cafe" class="tabcontent2">
								<h3>CAFE</h3>
								<table class="tabla">
								<tr>
									<img src="/concremag/img/FICHA 3 ADOQUIN SIGMA.jpg" alt = "sigma_normal" style="width:60%;align:left"/>
								</tr>
								<tr>
									<td class="tdd"colspan=2>Stock Disponible</td>
								</tr>
								<?php stock_disponible($q='1045'); ?>
							</table>
							</div>
						</div>
						
						<div id="bloque" class="tabcontent"> <! BOTON DE BLOQUE 140>
							<h3>NORMAL</h3>
							<table class="tabla">
								<tr>
									<img src="/concremag/img/FICHA 1 BLOQUE.jpg" alt = "bloque" style="width:60%; align:left"/>
								</tr>
								<tr>
									<td class="tdd"colspan=2>Stock Disponible</td>
								</tr>
								<?php stock_disponible($q='1031'); ?>
							</table>
						</div>
						
						<div id="bloque_split" class="tabcontent"> <! BOTON DE BLOQUE SPLIT CORTADO>
						
							<div id="split_normal" class="tabcontent2">
								<h3>NORMAL</h3>
								<table class="tabla">
								<tr>
									<img src="/concremag/img/FICHA 8 BLOQUES SPLIT.jpg" alt = "split_normal" style="width:60%;align:left"/>
								</tr>
									<tr>
										<td class="tdd"colspan=2>Stock Disponible</td>
									</tr>
									<?php stock_disponible($q='1011'); ?>
								</table>
								
							</div>

							<div id="split_amarillo" class="tabcontent2">
								<h3>AMARILLO</h3>
								<table class="tabla">
								<tr>
									<img src="/concremag/img/FICHA 8 BLOQUES SPLIT.jpg" alt = "split_normal" style="width:60%;align:left"/>
								</tr>
									<tr>
										<td class="tdd"colspan=2>Stock Disponible</td>
									</tr>
									<?php stock_disponible($q='1012'); ?>
								</table>
							</div>

							<div id="split_rojo" class="tabcontent2">
								<h3>ROJO</h3>
								<table class="tabla">
								<tr>
									<img src="/concremag/img/FICHA 8 BLOQUES SPLIT.jpg" alt = "split_normal" style="width:60%;align:left"/>
								</tr>
									<tr>
										<td class="tdd"colspan=2>Stock Disponible</td>
									</tr>
									<?php stock_disponible($q='1013'); ?>
								</table>
							</div>

							<div id="split_negro" class="tabcontent2">
								<h3>NEGRO</h3>
								<table class="tabla">
								<tr>
									<img src="/concremag/img/FICHA 8 BLOQUES SPLIT.jpg" alt = "split_normal" style="width:60%;align:left"/>
								</tr>
									<tr>
										<td class="tdd"colspan=2>Stock Disponible</td>
									</tr>
									<?php stock_disponible($q='1014'); ?>
								</table>
							</div>
							
							<div id="split_cafe" class="tabcontent2">
								<h3>CAFE</h3>
								<table class="tabla">
								<tr>
									<img src="/concremag/img/FICHA 8 BLOQUES SPLIT.jpg" alt = "split_normal" style="width:60%;align:left"/>
								</tr>
									<tr>
										<td class="tdd"colspan=2>Stock Disponible</td>
									</tr>
									<?php stock_disponible($q='1015'); ?>
								</table>
							</div>
						</div>
						
						<!-- <div id="bloque_split_esquina" class="tabcontent"> <! BOTON DE BLOQUE SPLIT CORTADO ESQUINA>
							
							<div id="split_esquina_normal" class="tabcontent2">
								<h3>NORMAL</h3>
								<img src="/concremag/img/FICHA 8 BLOQUES SPLIT.jpg" alt = "split_esquina_normal" style="width:60%;align:left"/>
							</div>

							<div id="split_esquina_amarillo" class="tabcontent2">
								<h3>AMARILLO</h3>
								<img src="/concremag/img/FICHA 8 BLOQUES SPLIT.jpg" alt = "split_esquina_amarillo" style="width:60%;align:left"/>
							</div>

							<div id="split_esquina_rojo" class="tabcontent2">
								<h3>ROJO</h3>
								<img src="/concremag/img/FICHA 8 BLOQUES SPLIT.jpg" alt = "split_esquina_rojo" style="width:60%;align:left"/>
							</div>

							<div id="split_esquina_negro" class="tabcontent2">
								<h3>NEGRO</h3>
								<img src="/concremag/img/FICHA 8 BLOQUES SPLIT.jpg" alt = "split_esquina_negro" style="width:60%;align:left"/>
							</div>
							
							<div id="split_esquina_cafe" class="tabcontent2">
								<h3>CAFE</h3>
								<img src="/concremag/img/FICHA 8 BLOQUES SPLIT.jpg" alt = "split_esquina_cafe" style="width:60%;align:left"/>
							</div>
						</div>-->
						
						<div id="bloque_190" class="tabcontent"> <! BOTON DE BLOQUE 190>
						
							<div id="bloque190_normal" class="tabcontent2">
								<h3>NORMAL</h3>
								<table class="tabla">
								<tr>
									<img src="/concremag/img/FICHA 7 BLOQUE 190.jpg" alt = "bloque190_normal" style="width:60%;align:left"/>
								</tr>
									<tr>
										<td class="tdd"colspan=2>Stock Disponible</td>
									</tr>
									<?php stock_disponible($q='1021'); ?>
								</table>
								
							</div>

							<div id="bloque190_amarillo" class="tabcontent2">
								<h3>AMARILLO</h3>
								<table class="tabla">
								<tr>
									<img src="/concremag/img/FICHA 7 BLOQUE 190.jpg" alt = "bloque190_normal" style="width:60%;align:left"/>
								</tr>
									<tr>
										<td class="tdd"colspan=2>Stock Disponible</td>
									</tr>
									<?php stock_disponible($q='1022'); ?>
								</table>
							</div>

							<div id="bloque190_rojo" class="tabcontent2">
								<h3>ROJO</h3>
								<table class="tabla">
								<tr>
									<img src="/concremag/img/FICHA 7 BLOQUE 190.jpg" alt = "bloque190_normal" style="width:60%;align:left"/>
								</tr>
									<tr>
										<td class="tdd"colspan=2>Stock Disponible</td>
									</tr>
									<?php stock_disponible($q='1023'); ?>
								</table>
							</div>

							<div id="bloque190_negro" class="tabcontent2">
								<h3>NEGRO</h3>
								<table class="tabla">
								<tr>
									<img src="/concremag/img/FICHA 7 BLOQUE 190.jpg" alt = "bloque190_normal" style="width:60%;align:left"/>
								</tr>
									<tr>
										<td class="tdd"colspan=2>Stock Disponible</td>
									</tr>
									<?php stock_disponible($q='1024'); ?>
								</table>
							</div>
							
							<div id="bloque190_cafe" class="tabcontent2">
								<h3>CAFE</h3>
								<table class="tabla">
								<tr>
									<img src="/concremag/img/FICHA 7 BLOQUE 190.jpg" alt = "bloque190_normal" style="width:60%;align:left"/>
								</tr>
									<tr>
										<td class="tdd"colspan=2>Stock Disponible</td>
									</tr>
									<?php stock_disponible($q='1025'); ?>
								</table>
							</div>
						</div>
						
						<div id="solerilla" class="tabcontent"> <! BOTON DE SOLERILLA>
						
							<div id="solerilla_normal" class="tabcontent2">
								<h3>NORMAL</h3>
								<table class="tabla">
								<tr>
									<img src="/concremag/img/FICHA 14 SOLERILLA.jpg" alt = "solerilla_normal" style="width:60%;align:left"/>
								</tr>
									<tr>
										<td class="tdd"colspan=2>Stock Disponible</td>
									</tr>
									<?php stock_disponible($q='1071'); ?>
								</table>
							</div>

							<div id="solerilla_amarillo" class="tabcontent2">
								<h3>AMARILLO</h3>
								<table class="tabla">
								<tr>
									<img src="/concremag/img/FICHA 14 SOLERILLA.jpg" alt = "solerilla_amarillo" style="width:60%;align:left"/>	
								</tr>
									<tr>
										<td class="tdd"colspan=2>Stock Disponible</td>
									</tr>
									<?php stock_disponible($q='1072'); ?>
								</table>
								
							</div>

							<div id="solerilla_rojo" class="tabcontent2">
								<h3>ROJO</h3>
								<table class="tabla">
								<tr>
								<img src="/concremag/img/FICHA 14 SOLERILLA.jpg" alt = "solerilla_rojo" style="width:60%;align:left"/>
								</tr>
									<tr>
										<td class="tdd"colspan=2>Stock Disponible</td>
									</tr>
									<?php stock_disponible($q='1073'); ?>
								</table>
							</div>

							<div id="solerilla_negro" class="tabcontent2">
								<h3>NEGRO</h3>
								<table class="tabla">
								<tr>
								<img src="/concremag/img/FICHA 14 SOLERILLA.jpg" alt = "solerilla_negro" style="width:60%;align:left"/>
								</tr>
									<tr>
										<td class="tdd"colspan=2>Stock Disponible</td>
									</tr>
									<?php stock_disponible($q='1074'); ?>
								</table>
							</div>
							
							<div id="solerilla_cafe" class="tabcontent2">
								<h3>CAFE</h3>
								<table class="tabla">
								<tr>
								<img src="/concremag/img/FICHA 14 SOLERILLA.jpg" alt = "solerilla_cafe" style="width:60%;align:left"/>
								</tr>
									<tr>
										<td class="tdd"colspan=2>Stock Disponible</td>
									</tr>
									<?php stock_disponible($q='1075'); ?>
								</table>
							</div>
						</div>

						<div id="solera" class="tabcontent"> <! BOTON DE SOLERA>
							<h3>NORMAL</h3>
							<table class="tabla">
							<tr>
							<img src="/concremag/img/FICHA 2 SOLERA.jpg" alt = "solera" style="width:60%;align:left"/>
							</tr>
								<tr>
									<td class="tdd"colspan=2>Stock Disponible</td>
								</tr>
								<?php stock_disponible($q='1081'); ?>
							</table>
						</div>
						<script>document.getElementById('defaultOpen').click();</script>
					</aside>
					</fieldset>
					<!FIN BLOQUE DE PRODUCTOS>
					<br/>
				
			</fieldset>
			</td>
			<td style="max-width:250px;">
			<table class="tabla">
				<tr>
				<th class="thh">Producto</th>
				<th class="thh">Color</th>
				<th class="thh">Stock Critico</th>
				</tr>
				<?php producto(); ?>
			</table>
			</td>
			</tr>
		</table>
    </body>
</html>


