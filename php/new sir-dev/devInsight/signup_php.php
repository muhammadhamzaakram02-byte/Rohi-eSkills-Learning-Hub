<?php
echo "Hello, World!";
$database = mysqli_connect("localhost", "root", "", "database1");
$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$email = $_POST['email'];
$password = $_POST['password'];

$chechemail = mysqli_query($database, "SELECT * FROM devsphere WHERE email='$email'");
if (mysqli_num_rows($chechemail) > 0) {
    echo "Email already exists. Please use a different email.";
    session_start();
    $_SESSION['user_not_found'] = "Email already exists. Please use a different email or log in to your existing account.";
    header("Location: login.php");
    exit();
}

$query = "INSERT INTO devsphere (firstName, lastName, email, password) VALUES ('$firstName', '$lastName', '$email', '$password')";
mysqli_query($database, $query);
session_start();
$_SESSION['user_found'] = "Account created successfully. Please log in.";
header("Location: login.php");
?>