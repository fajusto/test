<?php
		include_once('inc/conexao.php');
			$firstName=$_POST['firstName'];
			$lastName=$_POST['lastName'];
			$email=$_POST['email'];
			$cpf=$_POST['cpf'];
			$birthday=$_POST['birthday'];
			$Is_active=$_POST['Is_active'];
			$sql = "INSERT INTO usuarios (firstName, lastName, email, cpf, birthday, Is_active)
				VALUES('$firstName', '$lastName', '$email', '$cpf', '$birthday', '$Is_active')";

$redirect = "http://localhost/test/index.php";

			 	if (mysqli_query($conn, $sql)) {
	     header('Location: index.php');
	 		//echo 'Updated!';
	} 
				else {
	    echo "Error updating record: " . mysqli_error($conn);
	}

			
			header("location:$redirect");
		mysqli_close($conn);
?>
