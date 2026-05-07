<?php
session_start();
include("db.php");

if(!isset($_SESSION['admin'])){
    header("Location: sign_in.php");
    exit();
}

$getProducts = mysqli_query($conn, "SELECT * FROM products");
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Admin Dashboard</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">

</head>
<body>

<div class="container mt-5">

    <div class="d-flex justify-content-between">

        <h1>Urban Doll NYC Admin</h1>

        <a href="logout.php" class="btn btn-danger">
            Logout
        </a>

    </div>

    <hr>

    <a href="add_product.php" class="btn btn-dark mb-4">
        Add Product
    </a>

    <table class="table table-bordered table-striped">

        <thead class="table-dark">

            <tr>
                <th>ID</th>
                <th>Image</th>
                <th>Name</th>
                <th>Price</th>
                
            </tr>

        </thead>

        <tbody>

        <?php while($row = mysqli_fetch_assoc($getProducts)){ ?>

            <tr>

                <td><?= $row['id']; ?></td>

                <td>
                    <img src="uploads/<?= $row['product_image']; ?>"
                    width="80">
                </td>

                <td><?= $row['product_name']; ?></td>

                <td>$<?= $row['product_price']; ?></td>

                <td>

                    <a href="edit_product.php?id=<?= $row['id']; ?>"
                    class="btn btn-warning btn-sm">
                    Edit
                    </a>

                    <a href="delete_product.php?id=<?= $row['id']; ?>"
                    class="btn btn-danger btn-sm">
                    Delete
                    </a>

                </td>

            </tr>

        <?php } ?>

        </tbody>

    </table>

</div>

</body>
</html>