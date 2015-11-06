<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
	echo $_GET["partiuSextaFeira"];
	echo "</br>";
	echo $_GET["id"];
?>
<form name="CustomerForm" method="post" action="store.php">
		<input id="formRow" type="text" name="firstName" placeholder="First Name" maxlength="50"/><br>
		<input id="formRow" type="text" name="lastName" placeholder="Last Name" maxlength="50"/><br>
		<input id="formRow" type="text" name="email" placeholder="E-mail" maxlength="70"/><br>
		<input id="formRow" type="text" name="cpf" placeholder="CPF" maxlength="11"/><br>
		<input id="formRow" type="date" name="birthday" placeholder="Birthday" maxlength="10"/><br>
		<input name="Is_active" type="checkbox" value="1"/>Is active!<br>
		<input type="submit" value="Submit">
</form>
</body>
</html>
