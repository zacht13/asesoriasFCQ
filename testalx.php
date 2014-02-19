<!doctype html>

<html lang = "en">

<head>
<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />
<link href="http://fcq.uach.mx/documentos/planeacion/Betty/Bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen"/>
  <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
  <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
  <script src="http://fcq.uach.mx/documentos/planeacion/Betty/Bootstrap/js/bootsrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="css/jquery-ui-1.7.2.custom.css" />
<script type="text/javascript">
jQuery(function($){
      $.datepicker.regional['es'] = {
            closeText: 'Cerrar',
            prevText: '&#x3c;Ant',
            nextText: 'Sig&#x3e;',
            currentText: 'Hoy',
            monthNames: ['Enero','Febrero','Marzo','Abril','Mayo','Junio',
            'Julio','Agosto','Septiembre','Octubre','Noviembre','Diciembre'],
            monthNamesShort: ['Ene','Feb','Mar','Abr','May','Jun',
            'Jul','Ago','Sep','Oct','Nov','Dic'],
            dayNames: ['Domingo','Lunes','Martes','Miercoles','Jueves','Viernes','Sabado'],
            dayNamesShort: ['Dom','Lun','Mar','Mi&eacute;','Juv','Vie','S&aacute;b'],
            dayNamesMin: ['Do','Lu','Ma','Mi','Ju','Vi','S&aacute;'],
            weekHeader: 'Sm',
            dateFormat: 'DD dd - MM',
            firstDay: 1,
            isRTL: false,
            showMonthAfterYear: false,
            yearSuffix: ''};
      $.datepicker.setDefaults($.datepicker.regional['es']);
});    
 
$(document).ready(function() {
   $("#datepicker").datepicker();
 });
</script>


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
  .ui-tabs-vertical {min-width: 840px}
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

	 	function displayObject(objeto){
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

	 	function mandar(par1, par2,obj){
	 	displayObject(obj);
        var parametros = {
                "fecha" : par1,
                "materia" : par2

        };
        $.ajax({
                data:  parametros,
                url:   'insertar.php',
                type:  'post',
                beforeSend: function () {
                        $("#resultado").html("Procesando, espere por favor...");
                },
                success:  function (response) {
                        $("#resultado").html(response);
                }
        	});
		}


	 </script>
</head>
<body>

		<tr> <td><img src="http://www.fcq.uach.mx/images/logos/logo50aniv-web.png" style="margin-left: 50px"></td>
		 <td> <font size="34" style="margin-left: 70px">Sistema de Asesorias</td></font></tr>
		
		<br>
		<br>
		<div id="tabs">
			<ul>
				<li><a href="tabs-1" onclick="AbrirMenu('1')"></button>Apartar</a></li>
				<li><a href="tabs-2" onclick="AbrirMenu('2')"></button>Ver</a></li>
				<li><a href="tabs-3" onclick="AbrirMenu('3')"></button>Evaluar</a></li>
				<li><a href="tabs-4" onclick="AbrirMenu('4')"></button>Historial</a></li>
			</ul>
			<div id="#tabs-1">
				<br>
				<br>
				<form name="formulario" action="insert.php" method="post">
				<div>
					<?php
					include ("config.php");
					$link=conectarse();
					@session_start();
					$result = mysql_query( "SELECT usuario, carrera, id, semestre FROM usuarios WHERE id = '".$_SESSION['k_user']."'");
					if($row = mysql_fetch_array($result)){
					echo '<p><label> Matricula:'.$row['id'].'</label></p>';
					echo '<p><label> Alumno: '.$row['usuario'].'</label></p>';
					echo '<p><label> Carrera: '.$row['carrera'].'</label></p>';
					echo '<p><label> Semestre: '.$row['semestre'].'</label></p>';
					echo '<p>Asesorías pendientes: 0</p>';
						}
						$sql = "SELECT nombre, materias.clave from materias\n"
    					. "join alum_materias\n"
    					."on alum_materias.Clave = materias.clave\n"
    					. "where alum_materias.matricula = '".$_SESSION['k_user']."' LIMIT 0, 30 "; //seleciona la base de datos de medios
								$result=mysql_query($sql,$link);
						?> 
						<p><label style="margin-left: 275px"> Materia:
						<select id="materia" name="materia"  onchange="mandar(1,1,'selecFecha')" ;return false;>
						<option name="none">Elija una materia</option>
						<?php
							while ($row=mysql_fetch_array($result)){												
									echo 
						 			'<option name="mat1">'.$row['clave'].' '.$row['nombre'].'</option>';
									}	
						?>
						</select></label></p>
					<div style="margin-left: 300px; display: none" id = "selecFecha">
						  	<label> Seleccionar Fecha:</label>
						  	<input type="text" name="datepicker" id="datepicker" readonly="readonly" size="12" href="javascript:;" onchange="mandar($('#datepicker').val(), $('#materia').val(),'asesor');return false; "/>
					</div> 

					<div id="asesor"  class="ui-widget" style="margin-left: 300px; display: none">
							<select id="resultado" name="asesor" onchange="displayObject('tema1-1')" >
								
							</select>
					</div>

					 <div id="tema1-1"  class="ui-widget" style="margin-left: 300px; display: none">
							<p><label for="tags"> Tema: </label>
							<textarea cols="30" rows="5" id="tags" name="tema" onchange="displayObject('tema1-2')"/></textarea></label></p>
					</div>						
						<br>
						<p align=right style="margin-right: 100px">
			        		<input type="submit" value="Ingresar" />
		          		</p>
				</div>
				</form>	
			</div>



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