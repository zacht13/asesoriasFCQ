<html>
	
	<head> Entrada 
		<style>.error {color: #FF0000;}</style>
	</head>

	<body>

		<form  method="post" action="login.php" >

			Name: <Input type="text" name="user"><span class="error"><?php echo $user?></span><br>
			Contraseña: <input type="text" name="passw"><span class="error"><?php echo $passw?></span><br>
			<input type="submit" name="submit" value="Entrar">

		</form>

	</body>

</html>







