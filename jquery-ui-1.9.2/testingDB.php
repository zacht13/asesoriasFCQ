
<html>
<head>
	<title>Probando bases de datos</title>
</head>
<body>

	<?php 
		$con = mysqli_connect("http://fcq.uach.mx","fcq_user2_2013","Sjeo8723hoDeh635678Z","fcq_ago2013");
		 //$con = mysqli_connect("localhost","root","toor","ferreteria");
		if(mysqli_connect_errno($con)){			
			echo "<br> Error al conectar D:";
		} else {
		echo "Conexión exitosa (:";
		}

		// $rs = mysqli_query($con,"Select *from tipos");
			
		// echo "<table border='1'>
		// <tr><th>id</th><th>Tipo</th></tr>";


		// while($row = mysqli_fetch_array($rs)){
		// 	echo  "<tr><td>"  . $row[0] . "</td>"  
		// 			.  "<td>" . $row[1] . "</td></tr>";
		// }

		// echo "</table>"


	 ?>


</body>
</html>