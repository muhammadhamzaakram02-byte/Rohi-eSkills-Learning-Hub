<?php echo "<h1> line number : " . __LINE__ . " </h1>";
echo "<h1> line number : " . __LINE__ . " </h1>";

echo 'Example of PHP code, okay ';
echo '<h2>Example of PHP code, okay</h2>';

// old version of array
// $array = array (
// 'key1' => 'value1',
// 'key2' => 'value2',
// 'key3' => 'value3'
// );

// new version of array
$array = [
    'key1' => 'value1',
    'key2' => 'value2',
    'key3' => 'value3'
];

echo '<hr>';
echo "<h1>error ayaa line number : " . __LINE__ . " par </h1>"; // This will print the line number where this code is located    
echo '<hr>';
echo '<pre>';
print_r($array);
echo '</pre>';
$string = 'This is a string , ' . 'This is another string.' . '<h2>Yet Another String</h2>';
echo $string;
echo '<hr>';
echo "<h1>error ayaa line number : " . __LINE__ . " par </h1>"; // out put is 19
echo '<hr>';



$all = $_POST;
$name = $_POST['name'];
$age = $_POST['age'];
// print_r($name);
echo $name;
echo $age;
print_r($all);
echo '<pre>';
print_r($_POST);
echo '</pre>';

$host = 'localhost';
$username = 'root';
$password = '';
$database = 'example-database';
$connent_db = mysqli_connect($host, $username, $password, $database);


$push_data = "INSERT INTO   `example-table` (`name`, `age`) VALUES ('$name' , '$age')";

mysqli_query($connent_db, $push_data);
header("Location:examplehome.php");
// mysqli_query(mysqli_connect('localhost', 'root', '', 'example-database'), "INSERT INTO   `example-table` (`name`, `age`) VALUES ('$name' , '$age')");

// for understanding the above code okay 
// mysqli_query($connent_db, "INSERT INTO `example-table` (`id`, `name`, `age`) VALUES (NULL, '$name', '$age')");

// // this is the correct way to insert data into the database but you want to use variables to insert data into the database then you can use the above code but you have to make sure that the variables are properly sanitized to prevent SQL injection attacks.

?>