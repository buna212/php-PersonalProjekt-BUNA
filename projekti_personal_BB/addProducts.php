<?php	

//Including config.php file for connection with database 
	include_once('CONFIG.php');

//If the button Add Movie in movies.php is pressed, we will get datas that users added into the form, and insert them into database :
	if(isset($_POST['submit']))
	{

		$product_id = $_POST['product_id'];
		$product_name = $_POST['product_name'];
        $product_id = $_POST['movie_name'];
	

		$sql = "INSERT INTO products(movie_id, movie_name) VALUES (:movie_name, :movie_desc, :movie_quality, :movie_rating, :movie_image)";

		$insertProducts = $conn->prepare($sql);
			

		$insertMovie->bindParam(':movie_name', $movie_name);
		$insertMovie->bindParam(':movie_desc', $movie_desc);
	

		$insertProduct->execute();

		header("Location: shop.php");


	}




?>