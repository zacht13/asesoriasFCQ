<!doctype html>

<html lang = "en">

<head>

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js" type="text/javascript"></script>
<script type="text/javascript" src="http://www.fcq.uach.mx/templates/plantillatest/js/jQuery.BlackAndWhite.js"></script>
<script type="text/javascript" src="http://www.fcq.uach.mx/templates/plantillatest/js/actions.js"></script>

 <script>
			$(function() {
    $( "#tabs" ).tabs().addClass( "ui-tabs-vertical ui-helper-clearfix" );
    $( "#tabs li" ).removeClass( "ui-corner-top" ).addClass( "ui-corner-left" );
  });
  </script>
  <style>
  .ui-tabs-vertical { width: 55em; }
  .ui-tabs-vertical .ui-tabs-nav { padding: .2em .1em .2em .2em; float: left; width: 12em; }
  .ui-tabs-vertical .ui-tabs-nav li { clear: left; width: 100%; border-bottom-width: 1px !important; border-right-width: 0 !important; margin: 0 -1px .2em 0; }
  .ui-tabs-vertical .ui-tabs-nav li a { display:block; }
  .ui-tabs-vertical .ui-tabs-nav li.ui-tabs-active { padding-bottom: 0; padding-right: .1em; border-right-width: 1px; border-right-width: 1px; }
  .ui-tabs-vertical .ui-tabs-panel { padding: 1em; float: right; width: 40em;}
  </style>
</head>
<body>
		
		<div id="tabs">
			<ul>
				<li><a href="#tabs-1">Test 1</a></li>
				<li><a href="#tabs-1">Test 2</a></li>
			</ul>
			<div id="#tabs-1">
				<p>Esto es html del bueno</p>
				<?php
					$nombre = "Luis Miguel";
					$apellido = "Cabezas Granados";
				?>
		
				<p>Este parrafo contiene HTML y PHP.
				El autor del script es <?php echo ("$nombre $apellido");?> </p>
			</div>
		</div>
	</body>
</html>