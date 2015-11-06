<?php
$servername = "localhost";
			$username = "root";
			$password = "";
			$banco = "cadastro";
			$conexao = mysql_connect($servername, $username, $password) or die(mysql_error());
			mysql_select_db($banco) or die(mysql_error());
$conn->close();