<?php

$host = "localhost";
$user="root";
$pass="";
$dbname="projekti_personal buna php advanced";

try {
	
	$conn=new PDO("mysql:host=$host;dbname=$dbname",$user,$pass);

    echo "Connection was successful";

} catch (PDOException $e) {
	echo "error: " . $e->getMessage();
}
 ?>