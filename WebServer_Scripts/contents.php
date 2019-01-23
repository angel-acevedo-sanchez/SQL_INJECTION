<?php
	
error_reporting(E_ALL);
ini_set('display_errors', '1');

	include 'conexion2.php';


	$conn2 = pg_connect("host=$host dbname=$db user=$user password=$pwd");

	if(!$conn2){
		echo "FATAL ERROR CONNECTION";
		die();
	}

	if(isset($_GET["id"])){

		$sql = "SELECT * FROM pc WHERE id= ".$_GET["id"];
		$resul = pg_exec($conn2, $sql);

		if(pg_numrows($resul) == 0){
			echo "Product NOT FOUND";
		}
		else{
			$row = pg_fetch_array($resul, 0);

			echo "<h3>Product detail</h3>";
	                echo "<table border='1'><tr>";
        	        echo "<tr><td>Code</td><td>Name</td><td>Price</td></tr>";
               		 echo "<tr><td>" .$row["code"].
                        '</td><td>' .$row["name"].
                        '</td><td>' .$row["price"].
                        '</td></tr>';
               		 echo "</table>";

		}
	}

?>
