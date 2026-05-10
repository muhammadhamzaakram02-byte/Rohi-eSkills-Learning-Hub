<?php
$connect = mysqli_connect("localhost", "root", "", "database1");

if (isset($_POST['submit'])) {
    $file_name = $_FILES['img']['name'] . time() . ".jpg"; 
    $file_temp = $_FILES['img']['tmp_name'];
    $folder = "folder/" . $file_name;

    if (move_uploaded_file($file_temp, $folder)) {
        $query = mysqli_query($connect, "INSERT INTO images (image) VALUES ('$file_name')");
        // header("Location: " . $_SERVER['PHP_SELF']);
        // exit();
    } else {
        echo "Failed to upload image";
    }
}
// echo ''.'<hr>';
// echo "folder/".$file_name.'folder'.'<br>';   
echo $file_name.'............name of img ';
echo ''.'<hr>';
echo $file_temp.'temp... path... of tem img ';
echo ''.'<hr>';
echo $folder . '........,,,,,,,,folder... path... of img ';
// echo $file_name.'<br>'.'';

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .flex {
            display: flex;
            flex-wrap: wrap;
        }

        .flex img {
            margin: 10px;
        }
    </style>
</head>

<body>
    <form method="post" enctype="multipart/form-data">
        <input type="file" name="img">
        <br>
        <input type="submit" name="submit" value="Upload Image">
    </form>
    <div class="flex">
        <?php
        $res = mysqli_query($connect, "SELECT * FROM images");
        while ($row = mysqli_fetch_array($res)) {
            echo "<img src='folder/" . $row['image'] . " ' width='100' height='100'><br>";
        }
        // echo $_FILES['img']['name'];
        // print_r($_FILES['img']['name']);
        // echo $row['image'] ;

        ?>
    </div>
</body>

</html>
<?php
        // header("Location: " . $_SERVER['PHP_SELF']);
?>