<?php
 		include_once('inc/conexao.php');
	 	if(isset($_POST['Is_active'])){
	 		// $string = ", Is_active='" . $_POST['Is_active'] . "'";
	 		$sql = "UPDATE usuarios SET firstName='" . $_POST['firstName'] . "', lastName='" . $_POST['lastName'] . "', email='" . $_POST['email'] . "', cpf='" . $_POST['cpf'] . "', birthday='" . $_POST['birthday'] . "', Is_active='" . $_POST['Is_active'] . "' WHERE id='" . $_POST['id'] . "'";
	 	} else {
	 		$sql = "UPDATE usuarios SET firstName='" . $_POST['firstName'] . "', lastName='" . $_POST['lastName'] . "', email='" . $_POST['email'] . "', cpf='" . $_POST['cpf'] . "', birthday='" . $_POST['birthday'] . "' WHERE id='" . $_POST['id'] . "'";
	 	}
 		// $sql = "UPDATE usuarios SET firstName='" . $_POST['firstName'] . "', lastName='" . $_POST['lastName'] . "', email='" . $_POST['email'] . "', cpf='" . $_POST['cpf'] . "', birthday='" . $_POST['birthday'] . "', '" . $string . "' WHERE id='" . $_POST['id'] . "'";
var_dump($_POST);
	 	if (mysqli_query($conn, $sql)) {
	     // header('Location: index.php');
	 		echo 'Updated!';
	} 
		else {
	    echo "Error updating record: " . mysqli_error($conn);
	}

mysqli_close($conn);