<?php


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

$id = $_POST['id'];
$name = $_POST['name'];
$email = $_POST['email'];
$age = $_POST['age'];
$city = $_POST['city'];
$course_id = $_POST['course_id'];


$q = "UPDATE users SET name = '$name',email= '$email',age = '$age',city = '$city',course_id= '$course_id' WHERE id =' $id' ";


if(mysqli_query($connection, $q)){
    header("Location:home.php");
}

?>