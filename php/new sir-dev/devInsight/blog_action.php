<?php
$title = $_POST['title'];
$content = $_POST['content'];
$excerpt = $_POST['excerpt'];
$category = $_POST['category'];


$host="localhost";
$username="root";
$pwd="";
$db="database1";

$connection= mysqli_connect($host,$username,$pwd,$db);

$image = null;


if(isset($_FILES['image'])){

$path = "uploads/";
$allow_type = ["image/jpg","image/jpeg","image/png"];

$allow_size = 2*1024*1024;

if(in_array($_FILES['image']['type'],$allow_type) == false){
    // die("image must be in png, jpg and jpeg");
}

if($_FILES['image']['size']>$allow_size){
    // die("Image is too large");
}


$ext = pathinfo($_FILES['image']['name'],PATHINFO_EXTENSION);

$ramdom_name = uniqid().time(). ".".$ext;

$destination = $path.$ramdom_name;

if(move_uploaded_file($_FILES['image']['tmp_name'],$destination)){
$image = $ramdom_name;
echo 'image upload successfuly';
}


}


$query = "INSERT INTO blog (title, category, image, content, short_description) VALUES ('$title','$category','$image','$content','$excerpt')";

if(mysqli_query($connection,$query)){
    header("Location:blog_all.php");
}




?>