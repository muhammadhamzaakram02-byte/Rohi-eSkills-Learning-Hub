<?php
$id = $_GET['id'];
$database = mysqli_connect("localhost", "root", "", "database1");
$query = "DELETE FROM `products` WHERE id='$id'";
$result = mysqli_query($database, $query);
header("Location: data.php");
?>