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

	 <script>	 	
	 	function AbrirMenu(tab){
	 		var list = document.getElementById("#tabs-"+ tab);	 		
        		list.style.display = "block";    		
	 		for(i=1;i<5;i++){
	 			if (i != tab)
	 			document.getElementById("#tabs-"+i).style.display = "none";
	 		}	 		    		    	
	 	}

	 	function habMat(o1,o2){
	 		var object = document.getElementById(o1);
	 		var object2 = document.getElementById(o2);
	 		object.style.display = "block";
	 		object2.style.display = "block";

	 	}

	 	function sigTema(objeto){
	 		var object = document.getElementById(objeto);	 		 	
	 		object.style.display = "block";
	 		object.focus();
	 	}	 	

	 	function limpiar(){
	 		document.tags.reset();
	 	}

	 	function obtInformacion(){
	 		return "Cita programada en: Noviembre 3 2013 17:00 <br>Tema 1: <br>Tema 2: ";
	 	}

	 	function obtInformacionHist(){
	 		return "Cita programada en: Noviembre 3 2013 17:00 <br>Tema 1: <br>Tema 2: <br> Comentario: --------";
	 	}

	 </script>
<link rel="stylesheet" type="text/css" href="css/jquery-ui-1.7.2.custom.css" />
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.7.2/jquery-ui.min.js"></script>
</head>
<body>

		<img src="http://www.fcq.uach.mx/images/logos/logo50aniv-web.png" style="margin-left: 50px">
		<center><h1>Sistema de Asesorias</h1></center>
		<br>
		<br>
		<div id="tabs">
			<ul>
				<li><a <button type="button" onclick="AbrirMenu('1')"></button>Alumnos</a></li>
				<li><a <button type="button" onclick="AbrirMenu('2')"></button>Asesor</a></li>
			<div id="#tabs-1">
				<br>
				<br>
				<form>
					<div>		
									
						<p><label> Nombre Completo del Alumno </label></p>
						<p><label> Carrera del Alumno </label></p>
						<p><label> Semestre del Alumno </label></p>
						<p><label style="margin-left: 275px"> Tutor: No tiene. </label></p>
						<p><label style="margin-left: 275px"> Materia:
						 	<select id="materia1" name="mytextarea" onchange="habMat('materia2','tema1-1')"; >
						 		<option name="none">Elija una materia</option>
						 		<option name="mat1">Materia 1</option>
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
						<div id="tema1-1" class="ui-widget" style="margin-left: 300px; display: none">
							<p><label for="tags"> Tema: 
							<input id="tags" onchange="sigTema('tema1-2')"/></label></p>
						</div>
						
						<div id="tema1-2" class="ui-widget" style="margin-left: 300px; display: none">
							<p><label for="tags"> Tema: 
							<input id="tags" onchange="sigTema('tema1-3')"/></label></p>
						</div>
						
						<div id="tema1-3" class="ui-widget" style="margin-left: 300px; display: none">
							<p><label for="tags"> Tema: 
							<input id="tags" /></label></p>
						</div>
						
						<p><label style="margin-left: 275px; display: none" id="materia2">
						 Materia: <select name="mytextarea" onchange="habMat('materia3','tema2-1')">
							<option name="mat1">Elija una materia</option>
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
						
						<div id="tema2-1" class="ui-widget" style="margin-left: 300px; display: none">
							<p><label for="tags"> Tema: 
							<input id="tags" onchange="sigTema('tema2-2')"/></label></p>
						</div>
						
						<div id="tema2-2" class="ui-widget" style="margin-left: 300px; display: none">
							<p><label for="tags"> Tema: 
							<input id="tags" onchange="sigTema('tema2-3')"/></label></p>
						</div>
						
						<div id="tema2-3" class="ui-widget" style="margin-left: 300px; display: none">
							<p><label for="tags"> Tema: 
							<input id="tags"/></label></p>
						</div>
						
						<p><label style="margin-left: 275px; display: none" id="materia3"> Materia: <select name="mytextarea" onchange="habMat('tema3-1')">
							<option name="none">Elija una materia</option>
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
						
						<div id="tema3-1" class="ui-widget" style="margin-left: 300px; display: none">
							<p><label for="tags"> Tema: 
							<input id="tags" onchange="sigTema('tema3-2')"/></label></p>						
						
							<p id="tema3-2"><label for="tags" style="display:none"> Tema: 
							<input id="tags" onchange="sigTema('tema3-3')"/></label></p>												
						
							<p id="tema3-3"><label for="tags" style="display:none"> Tema: 
							<input id="tags" /></label></p>
						</div>
																	
						<br>
						<p align=right style="margin-right: 100px"><button>Limpiar</button></p></div>
						<p align=right style="margin-right: 100px"><button onclick="limpiar()">Aceptar</button></p>
						
						</div>
				</form>					

			<div id="#tabs-2" style="display: none; margin-left:225px" >						
												
						
						<table border="0" CELLSPACING="25" CELLPADING="30">							
							<tr><th>Nombre</th><th>Materia</th></tr>
							<br>
							<tr><td><a onmouseover="javascript:document.getElementById('inf').innerHTML=obtInformacion();" onmouseout="javascript:document.getElementById('inf').innerHTML=''">Alexis Maldonado</a>	</td><td>Quimica I - Profesor 2</td></tr>
							<tr><td><a onmouseover="javascript:document.getElementById('inf').innerHTML=obtInformacion();" onmouseout="javascript:document.getElementById('inf').innerHTML=''">Edgar Romero</a>	</td><td>Elementos II  - Profesora 8</td></tr>
							<tr><td><a onmouseover="javascript:document.getElementById('inf').innerHTML=obtInformacion();" onmouseout="javascript:document.getElementById('inf').innerHTML=''">Alumno</a></td><td>Ingles 4  - Profesora 1</td></tr>
						</table>
						<br><hr>
						<p id="inf" style="font-size:15px;color:blue;margin-left:0px;"></p>

						</div>
		

			<div id="#tabs-3" style="display: none">

<br>	
					<p><label for="matr" style="margin-left: 200px;">Matricula: <input id="matr"></label></p>
					<p><label style="margin-left: 200px;" id="materia3"> Materia: <select name="mytextarea">
							<option name="none">Elija una materia</option>
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

						
						<div style="margin-left:225px">

							<label for="dia"> Fecha/Hora: <select  name="dia">
							<option name="none">Elija una fecha</option>
							<option name="dia1">03/8/2013 14:00</option>
							<option name="dia2">20/8/2013 17:00</option>
							<option name="dia3">05/9/2013 15:00</option>
							</label></select>
							
							<label for="result"> Resultado <select  name="result" STYLE="width:50px">
							<option name="none"></option>
							<option name="1">1</option>
							<option name="2">2</option>
							<option name="3">3</option>
							<option name="4">4</option>
							<option name="5">5</option>
							<option name="6">6</option>
							<option name="7">7</option>
							<option name="8">8</option>
							<option name="9">9</option>
							<option name="10">10</option>							
							</label></select>
							<label for="comentario">Observaciones<br><textarea type="textarea" id="comentario" rows="5"></textarea></label>
							<input name="submit" type="submit" value="Enviar">
							</div>

					</div>
		
			<div id="#tabs-4" style="display: none; margin-left:225px">
						<table border="0" CELLSPACING="25" CELLPADING="30">							
							<tr><th>Nombre</th><th>Materia</th></tr>
							<br>
							<tr><td><a onmouseover="javascript:document.getElementById('infh').innerHTML=obtInformacionHist();"onmouseout="javascript:document.getElementById('infh').innerHTML=''">Alexis Maldonado</a>	</td><td>Quimica I - Profesor 2</td></tr>
							<tr><td><a onmouseover="javascript:document.getElementById('infh').innerHTML=obtInformacionHist();"onmouseout="javascript:document.getElementById('infh').innerHTML=''">Edgar Romero</a>	</td><td>Elementos II  - Profesora 8</td></tr>
							<tr><td><a onmouseover="javascript:document.getElementById('infh').innerHTML=obtInformacionHist();"onmouseout="javascript:document.getElementById('infh').innerHTML=''">Alumno</a></td><td>Ingles 4  - Profesora 1</td></tr>
						</table>
						<br><hr>
						<p id="infh" style="font-size:15px;color:blue;margin-left:0px;"></p>
					</div>
			</div>			
	</body>
</html>