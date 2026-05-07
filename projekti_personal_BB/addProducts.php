<?php
include("db.php");

if(isset($_POST['add_product'])){

    $name = $_POST['product_name'];
    $price = $_POST['product_price'];

    $image = $_FILES['product_image']['name'];
    $tmp_name = $_FILES['product_image']['tmp_name'];

    move_uploaded_file($tmp_name, "uploads/$image");

    mysqli_query($conn, "INSERT INTO products
    (product_name, product_price, product_image)

    VALUES

    ('$name', '$price', '$image')
    ");

    header("Location: admin.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Add Product</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">

    <h1>Add Product</h1>

    <form method="POST" enctype="multipart/form-data">

        <div class="mb-3">

            <label>Product Name</label>

            <input type="text"
            name="product_name"
            class="form-control"
            required>

        </div>

        <div class="mb-3">

            <label>Product Price</label>

            <input type="number"
            step="0.01"
            name="product_price"
            class="form-control"
            required>

        </div>

        <div class="mb-3">

            <label>Product Image</label>

            <input type="file"
            name="product_image"
            class="form-control"
            required>

        </div>

        <button type="submit"
        name="add_product"
        class="btn btn-dark">
        Add Product
        </button>

    </form>

</div>

</body>
</html>