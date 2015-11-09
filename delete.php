<?php
	include_once('inc/conexao.php');
	 	
		 $sql = "DELETE FROM usuarios WHERE id='" . $_GET['id']  .  "'";

			 if (mysqli_query($conn, $sql)) {
			     header('Location: index.php');
			 		// echo 'Updated!';
			} 
				else {
			    echo "Error updating record: " . mysqli_error($conn);
			}

mysqli_close($conn);