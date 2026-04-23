<?php
   
    include_once('config.php');
   
    if(isset($_POST['submit'])){
        $emri = $_POST['emri'];
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        $tempPass = $_POST['password'];
        $password = password_hash($tempPass, PASSWORD_DEFAULT);
          $confirmpass = password_hash($tempPass, PASSWORD_DEFAULT);

          if(empty($emri) || empty($email) || empty($username)  || empty($password) || empty($confirmpass)){
            echo "Please fill in all fields";
          }
          else {
            $sql = "insert into users (emri, email, username, password, confirm_password) values (:emri, :email, :username, :password, :confirmpass)";

            $insertSQL = $conn->prepare($sql);
            $insertSQL->bindParam(":emri", $emri);
            $insertSQL->bindParam(":email", $email);
            $insertSQL->bindParam(":username", $username);
            $insertSQL->bindParam(":password", $password);
            $insertSQL->bindParam(":confirmpass", $confirmpass);
            $insertSQL->execute();

            header('Location: login.php');

    }

    }
?> 