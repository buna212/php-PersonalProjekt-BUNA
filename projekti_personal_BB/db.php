<?php

$host = "localhost";
$user = "root";
$password = "";
$database = "projekti_personal_BB";

$conn = mysqli_connect($host, $user, $password, $database);

if(!$conn){
    die("Connection failed");
}

?>