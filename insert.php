<?php
	include("config.php");
	$link=conectarse();
		$selectAsesor = $_POST['asesor'];
		echo "$selectAsesor<br>";
		$selectAsesor = explode(" - ", $selectAsesor);
		echo "$selectAsesor[0]<br>"; //nombre del asesor
		echo "$selectAsesor[1]<br>"; // Hora del la asesoria
		$fecha = $_POST['datepicker'];
		$fecha = explode(" ", $fecha);
		switch($fecha[3]){
			case 'Enero':
				$fecha[3] = 01;
				break;
			case 'Febrero':
				$fecha[3] = 02;	
				break;
			case 'Marzo':
				$fecha[3] = 03;
				break;
			case 'Abril':
				$fecha[3] = 04;
				break;
			case 'Mayo':
				$fecha[3] = 05;
				break;
			case 'Junio':
				$fecha[3] = 06;
				break;
			case 'Julio':
				$fecha[3] = 07;
				break;
			case 'Agosto':
				$fecha[3] = "08";
				break;
			case 'Septiembre':
				$fecha[3] = "09";
				break;
			case 'Octubre':
				$fecha[3] = 10;
				break;
			case 'Noviembre':
				$fecha[3] = 11;
				break;
			case 'Diciembre':
				$fecha[3] = 12;
				break;
		}
		$clave = $_POST['materia'];
		$clave = explode(" ", $clave);
		$dia = $fecha[0];
		$fecha= "2014-$fecha[3]-$fecha[1]";
		echo "$fecha<br>"; // 
		echo "$clave[0]<br>"; // Clave de la materia
		echo "$clave[1]<br>"; // Nombre de la materia
		
		$sql="INSERT INTO asesorias (fecha, asesor_id, clave_materia, materia, 
			mat_alumno, tema1, resultado, cometarios) 
			VALUES ('$fecha', '$asesor_id', '$clave[0]','$clave[1]', '$_SESSION['k_user']')";
			mysql_query($sql,$link);

?>