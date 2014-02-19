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

		<div id="tabs">
			<ul>
				<li><a href="#tabs-1">   Apartar</a></li>
				<li><a href="#tabs-2">   Ver</a></li>
				<li><a href="#tabs-3">   Evaluar</a></li>
				<li><a href="#tabs-4">   Historial</a></li>
			</ul>
			<div id="#tabs-1">
			
				<TABLE BORDER=1 WIDTH=300>
					<TR>
						<TD WIDTH=100> prueba</TD>

						<TD WIDTH=100> prueba</TD>

						<TD WIDTH=100> prueba</TD>
					</TR>

					<TR>
						<TD WIDTH=100> prueba</TD>

						<TD WIDTH=100> prueba</TD>

						<TD WIDTH=100> prueba</TD>		
					</TR>
				</TABLE>
			
			</div>
			<div id="#tabs-2">
			
				<span>hola</span>
			
			</div>
			<div id="#tabs-3">
			
				<span>hola</span>
			
			</div>
			<div id="#tabs-4">
			
				<span>hola</span>
			
			</div>
		</div>
	</body>
</html>