<html>
<head>
	<title>Registering...</title>
</head>
	<body>
		<?php
			$servername = "localhost";
			$username = "root";
			$password = "";
			$banco = "cadastro";
			$conexao = mysql_connect($servername, $username, $password) or die(mysql_error());
			mysql_select_db($banco) or die(mysql_error());

			$firstName=$_POST['firstName'];
			$lastName=$_POST['lastName'];
			$email=$_POST['email'];
			$cpf=$_POST['cpf'];
			$birthday=$_POST['birthday'];
			$sql = mysql_query("INSERT INTO usuarios (firstName, lastName, email, cpf, birthday)
				VALUES('$firstName', '$lastName', '$email', '$cpf', '$birthday')");
		?>
	</body>
</html>

