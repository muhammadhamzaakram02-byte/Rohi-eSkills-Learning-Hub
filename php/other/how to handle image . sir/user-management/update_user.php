<?php
$id = $_GET['id'];

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


$query = "SELECT * FROM users WHERE id = $id";

$result = mysqli_query($connection, $query);

$data = mysqli_fetch_assoc($result);


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>

<body class="bg-gray-200 flex items-center justify-center min-h-screen">

    <div class="bg-blue-50 p-8 rounded-2xl shadow-lg w-full max-w-md">
        <h2 class="text-2xl font-bold mb-6 text-center">udpate student</h2>

       
        <form method="POST" action="update_action.php" enctype="multipart/form-data"  class="space-y-4">
            <div>
                <label for="text-medium">Name</label>
                <input type="text" name="name"  value="<?php echo $data['name'] ?>" class="w-full px-4 py-2 border rounded-2xl" required>
                <input type="hidden" name="id" value="<?php echo $data['id'] ?>">
            </div>
            <div>
                <label for="text-medium">Email</label>
                <input type="email" name="email"value = " <?php echo $data['email'] ?>" class="w-full px-4 py-2 border rounded-2xl" required>
            </div>
            <div>
                <label for="text-medium">City</label>
                <select name="city"  class="w-full px-4 py-2 border rounded-2xl" required>
                    <option value="">--Select City--</option>
                    <option value="Lahore" <?php echo ($data['city'] =="Lahore" )? 'selected' :"" ?>>Lahore</option>
                    <option value="Multan" <?php echo ($data['city'] =="Multan" )? 'selected' :"" ?>>Multan</option>
                    <option value="Islamabad" <?php echo ($data['city'] =="Islamabad" )? 'selected' :"" ?>>Islamabad</option>
                    <option value="Karachi" <?php echo ($data['city'] =="Karachi" )? 'selected' :"" ?>>Karachi</option>
                </select>
            </div>
            <div>
                <label for="text-medium">Age</label>
                <input type="number" value="<?php echo $data['age'] ?>" name="age" class="w-full px-4 py-2 border rounded-2xl" required>
            </div>
            <div>
                <label for="block mb-1 text-medium">Course_Id</label>
                <select  name="course_id"
                    class="w-full px-4 py-2 border rounded-2xl" required>
                    <option value="">--Select Courses--</option>
                    <option value="1"  <?php echo ($data['course_id'] =="1" )? 'selected' :"" ?>>Web Development</option>
                    <option value="2"  <?php echo ($data['course_id'] =="2" )? 'selected' :"" ?>>Digital Marketing</option>
                    <option value="3"  <?php echo ($data['course_id'] =="3" )? 'selected' :"" ?>>Graphic Design</option>
                    <option value="4" <?php echo ($data['course_id'] =="4" )? 'selected' :"" ?>>Data Science</option>
                </select>
            </div>
            <button class="bg-blue-500 text-white flex justify-center text-center m-auto w-36
 px-4 py-2 border rounded-2xl hover:bg-pink-600 transition">Submit</button>
        </form>

    </div>
</body>

</html>