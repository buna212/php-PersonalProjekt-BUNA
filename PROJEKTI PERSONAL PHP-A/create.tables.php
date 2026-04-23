<?php 
    $host = "localhost";
    $db = "projekti_personal buna php advanced";
    $user = 'root';
    $pass = '';

    try{

        $conn = new PDO("mysql:host=$host; dbname=$db" , $user, $pass);

        $sql = "CREATE TABLE users(
            id INT(6) NOT NULL AUTO_INCREMENT PRIMARY KEY,
            emri VARCHAR(255) NOT NULL,
            username VARCHAR(255) NOT NULL,
            email VARCHAR(255) NOT NULL,
            password VARCHAR(255) NOT NULL,
            confirm_password VARCHAR(255) NOT NULL,
            is_admin VARCHAR(255) NOT NULL
            );

            CREATE TABLE movies(
            id INT(6) NOT NULL AUTO_INCREMENT PRIMARY KEY,
            movie_name VARCHAR(255) NOT NULL,
            movie_desc VARCHAR(255) NOT NULL,
            movie_quality VARCHAR(255) NOT NULL,
            movie_rating VARCHAR(255) NOT NULL,
            movie_image VARCHAR(255) NOT NULL
            );

            CREATE TABLE  bookings(
            id INT(6) NOT NULL AUTO_INCREMENT PRIMARY KEY,
            user_id INT(6) NOT NULL,
            movie_id INT(6) NOT NULL,
            nr_tickets INT(6) NOT NULL,
            date VARCHAR(255) NOT NULL,
            time VARCHAR(255) NOT NULL
            );
        
        ";




        $conn->exec($sql);


        echo "TABLE CREATED";

    }catch(Exception $e){

        echo "TABLE NOT CREATED";

    }

?>