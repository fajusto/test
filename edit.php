<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
include_once('inc/conexao.php');
$sql =  "SELECT id, firstName, lastName, email, cpf, birthday, Is_active  FROM usuarios WHERE id='" . $_GET['id']  .  "'";
			$result = $conn->query($sql);
			$usuario = $result->fetch_array();
mysqli_close($conn);
?>

<form name="CustomerForm" method="post" action="update.php">
		<input id="formRow" type="text" name="firstName" placeholder="First Name" maxlength="50" value="<?= $usuario['firstName'] ?>"/><br>
		<input id="formRow" type="text" name="lastName" placeholder="Last Name" maxlength="50" value="<?= $usuario['lastName'] ?>"/><br>
		<input id="formRow" type="text" name="email" placeholder="E-mail" maxlength="70" value="<?= $usuario['email'] ?>"/><br>
		<input id="formRow" type="text" name="cpf" placeholder="CPF" maxlength="11" value="<?= $usuario['cpf'] ?>"/><br>
		<input id="formRow" type="date" name="birthday" placeholder="Birthday" maxlength="10" value="<?= $usuario['birthday'] ?>"/><br>
		<input type="checkbox" value="1" <?= ($usuario['Is_active'] == 1) ? 'checked="checked"' : '' ?>>Is active!<br>
		<input type="submit" value="Submit">
		<input name="id" type="hidden" value="<?= $usuario['id'] ?>">
</form>
</body>
</html>
