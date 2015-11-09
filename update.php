<?php
 			include_once('inc/conexao.php');
	 	if(isset($_POST['Is_active'])){
	 		$is_active = 1;
	 	} else {
	 		$is_active = 0;
	 	}
	 	$sql = "UPDATE usuarios SET firstName='" . $_POST['firstName'] . "', lastName='" . $_POST['lastName'] . "', email='" . $_POST['email'] . "', cpf='" . $_POST['cpf'] . "', birthday='" . $_POST['birthday'] . "', Is_active='" . $is_active . "' WHERE id='" . $_POST['id'] . "'";
var_dump($sql);
	 	if (mysqli_query($conn, $sql)) {
	     header('Location: index.php');
	 		// echo 'Updated!';
	} 
		else {
	    echo "Error updating record: " . mysqli_error($conn);
	}

mysqli_close($conn);