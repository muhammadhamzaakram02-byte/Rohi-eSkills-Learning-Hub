<?php
$database = mysqli_connect("localhost", "root", "", "database1");
$email = $_POST['email'];
$password = $_POST['password'];
$checkuser = mysqli_query($database, "SELECT * FROM devsphere WHERE email='$email' AND password='$password'");
if (mysqli_num_rows($checkuser) == 0) {
    echo "Invalid email or password. Please try again.";
    session_start();
    $_SESSION['user_not_found'] = "Invalid email or password. Please try again or sign up for a new account.";
    header("Location: signup.php");
    exit();
} else {
    echo "Login successful! Welcome back.";
    session_start();
    $_SESSION['user_found'] = "Login successful! Welcome back.";
    header("Location: admin_dashboard.php");

    // header("Location: login.php");
    // header("location:" . $_SERVER['PHP_SELF']);
    // exit();


}