
<html>
<head>
	<title>Probando bases de datos</title>
</head>
<body>

	<?php 
		$con = mysqli_connect("localhost","fcq_user2_2013","Sjeo8723hoDeh635678Z","fcq_ago2013");		 
		if(mysqli_connect_errno($con)){			
			echo "<br> Error al conectar D:";
		} else {
		echo "Conexión exitosa (:";
		}
		
		// $rs = mysqli_query($con,"Select *from tipos");



	 ?>


</body>
</html>