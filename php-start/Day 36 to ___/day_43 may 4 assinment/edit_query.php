<?php
echo 'helleworld';
// $id = 49;
$id = $_GET["id"];
echo $id;
// $id = $_POST["id"];
$name = $_POST["name"];
$price = (int)$_POST["price"];
$quantity = (int)$_POST["quantity"];
$category = $_POST["category"];
$new = isset($_POST["new"]) ? $_POST["new"] : null;
$sale = isset($_POST["sale"]) ? $_POST["sale"] : null;
$featured = isset($_POST["featured"]) ? $_POST["featured"] : null;
$trending = isset($_POST["trending"]) ? $_POST["trending"] : null;

$database = mysqli_connect("localhost", "root", "", "database1");

$query = "UPDATE `products` SET name='$name', price=$price, quantity=$quantity, category='$category', new='$new', sale='$sale', featured='$featured', trending='$trending' WHERE id=$id";

mysqli_query($database, $query);

header("Location: data.php");

?>