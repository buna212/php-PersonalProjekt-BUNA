<?php
include("db.php");

if(isset($_POST['add'])){

    $name = $_POST['name'];
    $price = $_POST['price'];

    $image = $_FILES['image']['name'];
    $tmp = $_FILES['image']['tmp_name'];

    move_uploaded_file($tmp, "uploads/" . $image);

    mysqli_query($conn,
    "INSERT INTO products (product_name, product_price, product_image)
    VALUES ('$name', '$price', '$image')");

    header("Location: admin.php");
    exit();
}
?>

<form method="POST" enctype="multipart/form-data">
    <input type="text" name="name">
    <input type="number" name="price">
    <input type="file" name="image">
    <button type="submit" name="add">Add</button>
</form>