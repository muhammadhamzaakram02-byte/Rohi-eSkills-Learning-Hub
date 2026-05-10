
<?php
session_start();

print_r($_SESSION);

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


$query = "SELECT * FROM users";


$result = mysqli_query($connection,$query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Student Table</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #667eea, #764ba2);
            margin: 0;
            padding: 40px;
        }

        .table-container {
            max-width: 1000px;
            margin: auto;
            background: #fff;
            padding: 20px;
            border-radius: 15px;
            box-shadow: 0 10px 25px rgba(0,0,0,0.2);
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
            color: #333;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            overflow: hidden;
            border-radius: 10px;
        }

        thead {
            background: #667eea;
            color: white;
        }

        th, td {
            padding: 12px 15px;
            text-align: center;
        }

        th {
            text-transform: uppercase;
            font-size: 14px;
            letter-spacing: 1px;
        }

        tbody tr {
            transition: all 0.3s ease;
        }

        tbody tr:nth-child(even) {
            background: #f4f6fb;
        }

        tbody tr:hover {
            background: #e0e7ff;
            transform: scale(1.01);
        }

        .btn {
            padding: 6px 12px;
            border: none;
            border-radius: 20px;
            cursor: pointer;
            font-size: 12px;
            transition: 0.3s;
        }

        .message{
            height: 30px;
            width: 50%;
            border:  2px solid red;
            background-color: skyblue;
        }

        .edit-btn {
            background: #4CAF50;
            color: white;
        }

        .edit-btn:hover {
            background: #45a049;
        }

        .delete-btn {
            background: #f44336;
            color: white;
        }

        .delete-btn:hover {
            background: #d32f2f;
        }

        @media (max-width: 768px) {
            table, thead, tbody, th, td, tr {
                display: block;
            }

            th {
                display: none;
            }

            td {
                position: relative;
                padding-left: 50%;
                text-align: left;
            }

            td::before {
                position: absolute;
                left: 15px;
                top: 12px;
                font-weight: bold;
                color: #555;
            }

            td:nth-of-type(1)::before { content: "ID"; }
            td:nth-of-type(2)::before { content: "Name"; }
            td:nth-of-type(3)::before { content: "Email"; }
            td:nth-of-type(4)::before { content: "City"; }
            td:nth-of-type(5)::before { content: "Age"; }
            td:nth-of-type(6)::before { content: "Course ID"; }
            td:nth-of-type(7)::before { content: "Action"; }
        }
    </style>
</head>
<body>

<div class="table-container">
    <h2>Student Records</h2>
     <a href="index.php">create user</a>
    <?php
if(isset($_SESSION['success']) == true){
echo "<div class = 'message'>{$_SESSION['success']}</div>";
unset($_SESSION['success']);
}

    ?>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>image</th>
                <th>Email</th>
                <th>City</th>
                <th>Age</th>
                <th>Course ID</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
           
         <?php
if(mysqli_num_rows($result)> 0){
    while($row = mysqli_fetch_assoc($result)){
        echo " <tr>
                <td>{$row['id']}</td>
                <td>{$row['name']}</td>
                <td><img width = 70px src= 'uploads/{$row['image']}'></td>
                <td>{$row['email']}</td>
                <td>{$row['city']}</td>
                <td>{$row['age']}</td>
                <td>{$row['course_id']}</td>
                <td>
                    <a href='update_user.php?id={$row['id']}' class='btn edit-btn'>Edit</a>
                    <a href = 'delete_action.php?id={$row['id']}' class='btn delete-btn'>Delete</a>
                </td>
            </tr>";
    }
}

         ?>  
         
        </tbody>
    </table>
</div>

</body>
</html>