<?php 
    $host = "localhost";
    $db = "projekti_personal buna php advanced";
    $user = 'root';
    $pass = '';

    try{

        $conn = new PDO("mysql:host=$host; dbname=$db" , $user, $pass);

        $sql = "INSERT INTO users(id,emri,username,email,password,confirm_password,is_admin) VALUES
        (1, 'Lum', 'LumD', 'Lum@gmail.com', 'Lum123', 'Lum123', 'false'),
        (2, 'Reis', 'ReisS', 'Reis@gmail.com', 'Reis123', 'Reis123', 'false'),
        (3, 'Sufjan', 'SufjanZ', 'Sufjan@gmail.com', 'Sufjan123', 'Sufjan123', 'false'),
        (4, 'Buna', 'BunaD', 'Buna@gmail.com', 'Buna123', 'Buna123', 'false'),
        (5, 'Arianita', 'ArianitaG', 'Arianita@gmail.com', 'Arianita123', 'Arianita123', 'true');


        INSERT INTO movies(id,movie_name,movie_desc,movie_quality,movie_rating,movie_image) VALUES
        (1, 'Spiderman' , 'description', '3D', '10', 'https://tse1.mm.bing.net/th/id/OIP.BLGJCaul5S5p-pBUY_FNTAHaHa?rs=1&pid=ImgDetMain&o=7&rm=3'),
        (2, 'Fast and Furious', 'descpriton', '2D', '10', 'https://tse3.mm.bing.net/th/id/OIP.b_ceCbZZ-5ENFzsPUf-EAwHaEo?rs=1&pid=ImgDetMain&o=7&rm=3');


        INSERT INTO bookings(id,user_id,movie_id,nr_tickets, date, time) VALUES
        (1, 4, 1, 3, '28/03/2026', '19:00'),
        (2, 3, 2, 2, '27/03/2026', '17:00');
        
        ";
        $conn->exec($sql);


        echo "Values were inserted";

    }catch(Exception $e){

        echo "Values were not inserted";

    }

?>