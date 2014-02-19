<!doctype html>

<html lang = "en">

<head>
<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />
<link href="http://fcq.uach.mx/documentos/planeacion/Betty/Bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen"/>
  <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
  <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
  <script src="http://fcq.uach.mx/documentos/planeacion/Betty/Bootstrap/js/bootsrap.min.js"></script>
  <link rel="stylesheet" href="/resources/demos/style.css" />
  <script>
	$(function() {
		$( "#tabs" ).tabs().addClass( "ui-tabs-vertical ui-helper-clearfix" );
		$( "#tabs li" ).removeClass( "ui-corner-top" ).addClass( "ui-corner-left" );
	
		var availableTags=[
		"Tema 1",
		"Tema 2",
		"Tema 3",
		"Tema 4"
		];
		
		$("#tags").autocomplete({
			source: availableTags
		});
  });
  </script>
  <style>
  .ui-tabs-vertical { width: 55em; }
  .ui-tabs-vertical .ui-tabs-nav { padding: .2em .1em .2em .2em; float: left; width: 12em; }
  .ui-tabs-vertical .ui-tabs-nav li { clear: left; width: 100%; border-bottom-width: 1px !important; border-right-width: 0 !important; margin: 0 -1px .2em 0; }
  .ui-tabs-vertical .ui-tabs-nav li a { display:block; }
  .ui-tabs-vertical .ui-tabs-nav li.ui-tabs-active { padding-bottom: 0; padding-right: .1em; border-right-width: 1px; border-right-width: 1px; }
  .ui-tabs-vertical .ui-tabs-panel { padding: 1em; float: right; width: 40em;}

  p{
	text-indent:25px;
  }
  
   body {
	background-color: #EBEBEB;
   }
   
  </style>
</head>
<body>
		<?php
			session_start();
			//datos para establecer la conexion con la base de mysql.
			include ("config.php");
			$link=conectarse();
		?>
		<img src="http://www.fcq.uach.mx/images/logos/logo50aniv-web.png" style="margin-left: 275px">
		<center><h1>Sistema de Asesorias</h1></center>
		<br>
		<br>
		<div id="tabs">
			<ul>
				<li><a href="tabs-1">   Apartar</a></li>
				<li><a href="tabs-2">   Ver</a></li>
				<li><a href="tabs-3">   Evaluar</a></li>
				<li><a href="tabs-4">   Historial</a></li>
			</ul>
			<div id="#tabs-1">
				<br>
				<br>
				<form>
					<div>
					</div>
					<?php
						
					?>
						<p><label> Nombre: Beatriz Fierro Reynoso. </label></p>
						<p><label> Carrera: Ing. de Software. </label></p>
						<p><label> Semestre: 8vo. </label></p>
						<p><label style="margin-left: 275px"> Tutor: No tiene. </label></p>
						<p><label style="margin-left: 275px"> Materia: <select name="mytextarea">
							<option name="mat1">Materia 1</option>
							<option name="mat2">Materia 2</option>
							<option name="mat3">Materia 3</option>
							<option name="mat4">Materia 4</option>
							<option name="mat5">Materia 5</option>
							<option name="mat6">Materia 6</option>
							<option name="mat7">Materia 7</option>
							<option name="mat8">Materia 8</option>
							<option name="mat9">Materia 9</option>
							<option name="mat10">Materia 10</option>
						</select></label></p>
						
						<div class="ui-widget" style="margin-left: 300px">
							<p><label for="tags"> Tema: 
							<input id="tags"/></label></p>
						</div>
						
						<div class="ui-widget" style="margin-left: 300px">
							<p><label for="tags"> Tema: 
							<input id="tags"/></label></p>
						</div>
						
						<div class="ui-widget" style="margin-left: 300px">
							<p><label for="tags"> Tema: 
							<input id="tags"/></label></p>
						</div>
						
						<p><label style="margin-left: 275px"> Materia: <select name="mytextarea">
							<option name="mat1">Materia 1</option>
							<option name="mat2">Materia 2</option>
							<option name="mat3">Materia 3</option>
							<option name="mat4">Materia 4</option>
							<option name="mat5">Materia 5</option>
							<option name="mat6">Materia 6</option>
							<option name="mat7">Materia 7</option>
							<option name="mat8">Materia 8</option>
							<option name="mat9">Materia 9</option>
							<option name="mat10">Materia 10</option>
						</select></label></p>
						
						<div class="ui-widget" style="margin-left: 300px">
							<p><label for="tags"> Tema: 
							<input id="tags"/></label></p>
						</div>
						
						<div class="ui-widget" style="margin-left: 300px">
							<p><label for="tags"> Tema: 
							<input id="tags"/></label></p>
						</div>
						
						<div class="ui-widget" style="margin-left: 300px">
							<p><label for="tags"> Tema: 
							<input id="tags"/></label></p>
						</div>
						
						<p><label style="margin-left: 275px"> Materia: <select name="mytextarea">
							<option name="mat1">Materia 1</option>
							<option name="mat2">Materia 2</option>
							<option name="mat3">Materia 3</option>
							<option name="mat4">Materia 4</option>
							<option name="mat5">Materia 5</option>
							<option name="mat6">Materia 6</option>
							<option name="mat7">Materia 7</option>
							<option name="mat8">Materia 8</option>
							<option name="mat9">Materia 9</option>
							<option name="mat10">Materia 10</option>
						</select></label></p>
						
						<div class="ui-widget" style="margin-left: 300px">
							<p><label for="tags"> Tema: 
							<input id="tags"/></label></p>
						</div>
						
						<div class="ui-widget" style="margin-left: 300px">
							<p><label for="tags"> Tema: 
							<input id="tags"/></label></p>
						</div>
						
						<div class="ui-widget" style="margin-left: 300px">
							<p><label for="tags"> Tema: 
							<input id="tags"/></label></p>
						</div>
						
						<table>
							<tr>
								<td>Num. Control</td>
								<td>Nombre</td>
								<td>Fecha y Hora</td>
							</tr>
							<tr>
								<td>1111</td>
								<td>Maestro por Asignar</td>
								<td>Hoy a las 16:00 hrs</td>
							</tr>
							<tr>
								<td>2222</td>
								<td>Maestro por Asignar</td>
								<td>Martes a las 17:00 hrs</td>
								
								
							</tr>
						</table>
						
						<br>
						
						<p align=right style="margin-right: 100px"><button>Aceptar</button></p>
					</div>
				</form>
					<div id="#tabs-2">
						<table>
							<tr>
								<td>Num.</td>
								<td>Alumno</td>
								<td>Materia</td>
								<td>Tema</td>
								<td>Maestro</td>
								<td>Dia</td>
								<td>Hora</td>
							</tr>
							<tr>
								<td>1</td>
								<td>Betty Fierro</td>
								<td>Redes</td>
								<td>VLAN</td>
								<td>Juan Eli Gomez</td>
								<td>Jueves 8 de Agosto del 2013</td>
								<td>18:00 hrs</td>
							</tr>
						</table>
					</div>
		
					<div id="#tabs-3">
		
					</div>
		
					<div id="#tabs-4">
		
					</div>
					
		</div>
		
	</body>
</html>