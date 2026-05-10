<?php


$id = $_GET['id'];


echo $id;


$host = "localhost";
$username = "root";
$pwd = "";
$db = "student";

$connection = mysqli_connect($host,$username,$pwd,$db);

if(!$connection){
    echo "connection not connect";
}else{
    echo "connection successfuly";
}


$query = "DELETE FROM users WHERE id = $id";


if(mysqli_query($connection,$query)){
    header("Location:home.php");
}

?>