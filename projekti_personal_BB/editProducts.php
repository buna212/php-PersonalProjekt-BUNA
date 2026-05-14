<?php
include("db.php");

$id = $_GET['id'];

$product = mysqli_query($conn,
"SELECT * FROM products WHERE id='$id'");

$row = mysqli_fetch_assoc($product);

if(isset($_POST['update'])){

    $name = $_POST['name'];
    $price = $_POST['price'];

    mysqli_query($conn,
    "UPDATE products SET
    product_name='$name',
    product_price='$price'
    WHERE id='$id'");

    header("Location: admin.php");
    exit();
}
?>

<form method="POST">
    <input type="text" name="name" value="<?= $row['product_name'] ?>">
    <input type="number" name="price" value="<?= $row['product_price'] ?>">
    <button type="submit" name="update">Update</button>
</form>