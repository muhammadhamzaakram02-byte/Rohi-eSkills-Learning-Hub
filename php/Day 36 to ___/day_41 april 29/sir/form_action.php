<?php
session_start();
// echo "<pre>";
// print_r($_GET);
// echo "</pre>";

// echo "<pre>";
// print_r($_REQUEST);
// echo "</pre>";


// echo "<hr>";

// echo "<pre>";
// print_r($_POST['email']);
// echo "</pre>";


$name = $_POST['name'];
$email = $_POST['email'];
$age = $_POST['age'];
$city = $_POST['city'];
$course_id = $_POST['course_id'];


// echo "<pre>";
// print_r($_FILES);

// echo "</pre>";




$host = "localhost";
$username = "root";
$pwd = "";
$db = "student";

$connection = mysqli_connect($host,$username,$pwd,$db);

if(!$connection){
    echo "connection not connect";
}


$image = null;


if(isset($_FILES['image'])){

$path = "uploads/";
$allow_type = ["image/jpg","image/jpeg","image/png"];

$allow_size = 2*1024*1024;

if(in_array($_FILES['image']['type'],$allow_type) == false){
    die("image must be in png, jpg and jpeg");
}

if($_FILES['image']['size']>$allow_size){
    echo "image is to large";
}


$ext = pathinfo($_FILES['image']['name'],PATHINFO_EXTENSION);

$ramdom_name = uniqid().time(). ".".$ext;

$destination = $path.$ramdom_name;

if(move_uploaded_file($_FILES['image']['tmp_name'],$destination)){
$image = $ramdom_name;
echo 'image upload successfuly';
}


}


$q = "INSERT INTO `users` (`name`, `image`, `email`, `city`, `age`, `course_id`) VALUES ('$name', '$image', '$email', '$city', '$age', '$course_id')";

if(mysqli_query($connection,$q)){

$_SESSION['success'] = "User Created Successfully";
   
header("Location:home.php");
}else{
    echo "not user inserted";
}









?>