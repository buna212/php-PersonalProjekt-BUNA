<?php

$host = "localhost";
$user = "root";
$password = "";
$database = "projekti_personal_bb";

$conn = mysqli_connect($host, $user, $password, $database);

if(!$conn){
    die("Connection failed");
}

?>