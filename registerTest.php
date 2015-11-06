<html>
<head>
	<title>Registering...</title>
</head>
	<body>
		<?php
		include_once('inc/conexao.php');
			$firstName=$_POST['firstName'];
			$lastName=$_POST['lastName'];
			$email=$_POST['email'];
			$cpf=$_POST['cpf'];
			$birthday=$_POST['birthday'];
			$Is_active=$_POST['Is_active'];
			$sql = mysql_query("INSERT INTO usuarios (firstName, lastName, email, cpf, birthday, Is_active)
				VALUES('$firstName', '$lastName', '$email', '$cpf', '$birthday', '$Is_active')");
			echo "<pre>";
			var_dump($_POST);
		?>
	</body>
</html>

