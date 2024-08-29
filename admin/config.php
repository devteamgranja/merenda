<?php 
try {
	$conn = new PDO("mysql:host=localhost;dbname=merenda","root","");
} catch (PDOException $e) {
	echo "Errro Ao acesar Base De dados";
}

 ?>