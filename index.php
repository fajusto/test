<html>
<head>
	<title>Test</title>
	<link rel="stylesheet" type="text/css" href="bootstrap.css">
	<style>
	#formRow {
		margin: 2px;
	}
	</style>
</head>
<body>
<form name="CustomerForm" method="post" action="registerTest.php">
		<input id="formRow" type="text" name="firstName" placeholder="First Name" maxlength="50"/><br>
		<input id="formRow" type="text" name="lastName" placeholder="Last Name" maxlength="50"/><br>
		<input id="formRow" type="text" name="email" placeholder="E-mail" maxlength="70"/><br>
		<input id="formRow" type="text" name="cpf" placeholder="CPF" maxlength="11"/><br>
		<input id="formRow" type="date" name="birthday" placeholder="Birthday" maxlength="10"/><br>
		<input name="Is_active" type="checkbox" value="1"/>Is active!<br>
		<input type="submit" value="Submit">
</form>
<table class="table">
	<tr>
		<th>First Name</th>
		<th>Last Name</th>
		<th>E-mail</th>
		<th>CPF</th>
		<th>Birthday</th>
		<th>Is active</th>
	</tr>

	<?php
		include_once('inc/conexao.php');
		$sql = "SELECT firstName, lastName, email, cpf, birthday, Is_active FROM usuarios";
		$result = $conn->query($sql);

		if ($result->num_rows > 0) {
		    // echo "<table>";
		    while($row = $result->fetch_assoc()) {
	?>
	<tr>
	<td><?= $row["firstName"] ?></td>
	<td><?= $row["lastName"] ?></td>
	<td><?= $row["email"] ?></td>
	<td><?= $row["cpf"] ?></td>
	<td><?= $row["birthday"] ?></td>
	<td>
		<?php 
			echo $row["Is_active"];
		?>
	</td>
</tr>
	<?php	        
		        // echo "<tr><td>".$row["firstName"]."</td><td>".$row["lastName"]."</td><td>".$row["email"]."</td><td>".$row["cpf"]."</td><td>".$row["birthday"]."</td><td>".$row["Is_active"]."</td></tr>";
		    }
		    // echo "</table>";
		} else {
		    echo "0 results";
		}
		$conn->close();
	?>
		<tr>
			<td>João</td>
			<td>Silva</td>
			<td>joao@silva.com</td>
			<td>22265425414</td>
			<td>15/08/1998</td>
			<td>1</td>
		</tr>
		<tr>
			<td>Maria</td>
			<td>Silva</td>
			<td>joana@silva.com</td>
			<td>22265425414</td>
			<td>15/08/1998</td>
			<td>1</td>
		</tr>
		<tr>
			<td>Joana</td>
			<td>Silva</td>
			<td>joana@silva.com</td>
			<td>22265425414</td>
			<td>15/08/1998</td>
			<td>1</td>
		</tr>
	</table>

</body>
</html>