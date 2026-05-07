<?php
include("db.php");

$id = $_GET['id'];

$product = mysqli_query($conn,
"SELECT * FROM products WHERE id='$id'");

$row = mysqli_fetch_assoc($product);

if(isset($_POST['update_product'])){

    $name = $_POST['product_name'];
    $price = $_POST['product_price'];

    mysqli_query($conn,
    "UPDATE products SET

    product_name='$name',
    product_price='$price'

    WHERE id='$id'
    ");

    header("Location: admin.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Edit Product</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">

    <h1>Edit Product</h1>

    <form method="POST">

        <div class="mb-3">

            <label>Product Name</label>

            <input type="text"
            name="product_name"
            value="<?= $row['product_name']; ?>"
            class="form-control">

        </div>

        <div class="mb-3">

            <label>Product Price</label>

            <input type="number"
            step="0.01"
            name="product_price"
            value="<?= $row['product_price']; ?>"
            class="form-control">

        </div>

        <button type="submit"
        name="update_product"
        class="btn btn-warning">
        Update Product
        </button>

    </form>

</div>

</body>
</html>