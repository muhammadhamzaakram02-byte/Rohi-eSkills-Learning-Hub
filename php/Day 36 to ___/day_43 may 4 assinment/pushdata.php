<?php
$database = mysqli_connect("localhost", "root", "", "database1");
$name = $_POST['name'];
$price = $_POST['price'];
$quantity = $_POST['quantity'];
$category = $_POST['category'];
$new = isset($_POST['new']) ? $_POST['new'] : '';
$sale = isset($_POST['sale']) ? $_POST['sale'] : '';
$featured = isset($_POST['featured']) ? $_POST['featured'] : '';
$trending = isset($_POST['trending']) ? $_POST['trending'] : '';
$image = $_FILES['image']['name'];
$image_tmp = $_FILES['image']['tmp_name'];
move_uploaded_file($image_tmp, "uploads/$image");

$query = "INSERT INTO `products`(`name`, `price`, `quantity`, `category`, `new`, `sale`, `featured`, `trending`, `image`) VALUES ('$name', '$price', '$quantity', '$category', '$new', '$sale', '$featured', '$trending', '$image')";

mysqli_query($database, $query);
header("Location: data.php");



?>