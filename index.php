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
  
  .texto1 {
color:black;   /* Color del texto */
text-shadow: 4px 4px 0 yellow,
                  -1px -1px yellow,
                   1px -1px yellow,
                  -1px 1px yellow,
                   0 1px yellow,
                   1px 0 yellow,
                  -1px 0 yellow,
                   0 -1px yellow;
}

h1 {
		position:absolute;
		top: 4px;
		left: 450px;
	}
  
   body {
	background:  url('quimicatalogo.png')  center fixed no-repeat;
   }
   
   
  </style>
  
</head>
<body>
		<tr>
		    <td><img src="http://www.fcq.uach.mx/images/logos/logo50aniv-web.png" style="margin-left: 275px"></td>			
		</tr>	
		
		<h1 class = "texto1" style="color:purple;  text-shadow: 5px blue; font-size: 50px; ">Sistema de Asesorias</h1>
		<br>
		<br>
		<br>
		<br><br><br><br>
		<div >
		<form action="login.php" method="post">
			      <center><p><b> Usuario: </br><input type="text" name="user" size="20" maxlength="12" /></b></center>
				
				</p>
			      <center><p><b>Password: </br></b><input type="password" name="passw" size="10" maxlength="16" />
				</center>
				</br>
			</p>
			      <p>
			        <center><input type="submit" value="Ingresar" /></center>
		          </p>
		        </form>
		 </div>
	</body>
</html>