<?php
	
	error_reporting(E_ALL);
	ini_set('display_errors', '1');

	session_start();

	include 'conexion2.php';

	$conn = pg_connect("host=$host dbname=$db user=$user password=$pwd");

	if(!$conn){
		echo "FATAL ERROR connection";
		die();
	}

	if(isset($_POST["reg_user"])){

		$username = $_POST["username"];
		$password = $_POST["password_1"];

		$sql = "Select * FROM users
				WHERE name = '" .
				$username . 
				"' and password = '" . 
				$password . "'";
		
		$resul = pg_exec($conn, $sql);
		$numRows = pg_numrows($resul);

		if($numRows != 0){

			$row = pg_fetch_array($resul, 0);
			$descr = $row['description'];

			echo "<h3>Login Succesful</h3>
					Welcome to the website, "						 
					.$descr."<br> 
					Click <a href='contents1.php'</a> here.";

		} else{

			echo "<h3>Login Error</h3>";
		}

	}

	pg_close($conn);
?>
