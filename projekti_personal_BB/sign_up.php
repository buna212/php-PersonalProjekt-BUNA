<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  <title>Sign In</title>
    <style>



    body {
      font-family: Arial, sans-serif;
      background: #e995e9;
    }
    .container {
      background: white;
      padding: 30px;
      border-radius: 10px;
      box-shadow: 0 4px 12px rgba(0,0,0,0.1);
      width: 300px;
    }
    h2 {
      text-align: center;
      margin-bottom: 20px;
    }
    input {
      width: 100%;
      padding: 10px;
      margin: 8px 0;
      border: 1px solid #ccc;
      border-radius: 6px;
    }
    button {
      width: 100%;
      padding: 10px;
      background: rgb(175, 94, 212);
      color: white;
      border: none;
      border-radius: 6px;
      cursor: pointer;
    }
    button:hover {
      background: #fa07ee;
    }
    .footer {
      text-align: center;
      margin-top: 10px;
      font-size: 14px;
    }
    .outter-container {
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
}
   
  </style>
<body>
    

<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Urban Doll NYC</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarText">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">HOME</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="shop.php">SHOP</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="sign_in.php">SIGN_IN</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="sign_up.php">SIGN_UP</a>
        </li>
      </ul>
      <span class="navbar-text">
       Shop at Urban Doll NYC
      </span>
    </div>
  </div>
</nav>
<div class="outter-container">
<div class="container">
  <h2>Sign Up</h2>
  <form>
    <input type="email" placeholder="Email" required>
    <input type="password" placeholder="Password" required>
    <input type="confirm password" placeholder="Confirm Password" required>
    <button type="submit"  href="admin.php">Sign In</button>
  </form>
  <div class="footer">
  </div>
</div>
</div>






<div class="card text-center" style="background:pink;">
  <div class="card-header">
    Featured
  </div>
  <div class="card-body">
    <h5 class="card-title">Urban Doll NYC</h5>
    <p class="card-text">Support us by shopping at our shop.</p>
   
  </div>
  <div class="card-footer text-body-secondary">
   @Urban.Doll.NYC
  </div>
</div>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>




<?php
include("db.php");

if(isset($_POST['signup'])){

    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirm = $_POST['confirm'];

    if($password != $confirm){
        $error = "Passwords do not match!";
    } else {

        mysqli_query($conn,
        "INSERT INTO admin (email, password, role)
        VALUES ('$email', '$password', 'admin')");

        header("Location: sign_in.php");
        exit();
    }
}
?>