<html>
<head>
	<title>Test</title>
	<style>
	#formRow {
		margin: 2px;
	}
	</style>
</head>
<body>
<form name="CustomerForm" method="post" action="registerTest.php">
	<td>
		<input id="formRow" type="text" name="firstName" placeholder="First Name" maxlength="50"/><br>
		<input id="formRow" type="text" name="lastName" placeholder="Last Name" maxlength="50"/><br>
		<input id="formRow" type="text" name="email" placeholder="E-mail" maxlength="70"/><br>
		<input id="formRow" type="text" name="cpf" placeholder="CPF" maxlength="11"/><br>
		<input id="formRow" type="date" name="birthday" placeholder="Birthday" maxlength="10"/><br>
		<input name="Is_active" type="checkbox" value="1"/>Is active!<br>
		<input type="submit" value="Enviar Cadastro">
	</td>
</form>
</body>
</html>