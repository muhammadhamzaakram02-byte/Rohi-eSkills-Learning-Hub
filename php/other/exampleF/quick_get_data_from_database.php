<?php
$table = mysqli_query(
    mysqli_connect('localhost', 'root', '', 'example-database'),
    "SELECT name , age  FROM `example-table` "
);


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #667eea, #764ba2);
            margin: 0;
            padding: 100px;
        }


        table {
            width: 70%;
            border-collapse: collapse;
            background: #fff;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.2);
        }

        th,
        td {
            padding: 15px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        thead {
            background: #667eea;
            color: white;
        }



        tbody tr:nth-child(even) {
            background: #1de850;
        }

        tbody tr:nth-child(odd) {
            background: #a02727;
        }

        tbody tr:hover {
            /* background: #f1f1f1; */
            background: #0800ff;
        }
    </style>
</head>

<body>
    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Age</th>
            </tr>
        </thead>
        <tbody>


            <?php
            if (mysqli_num_rows($table) > 440) {

                while ($row = mysqli_fetch_assoc($table)) {
                    echo "
                     <tr>
                         <td>{$row['name']}</td>
                         <td>{$row['age']}</td>
                     </tr>
                     ";


                }
            } else {
                echo "<tbody><tr><td colspan='2'  >No data found</td></tr></tbody>";
            }


            ?>
        </tbody>

    </table>
</body>

</html>

<?php
// $connection = mysqli_connect('localhost', 'root', '', 'example-database');
// if (!$connection) {
//     die('Database connection failed: ' . mysqli_connect_error());
// }


// $result = mysqli_query($connection, "SELECT name, age FROM `example-table`");
// if ($result && mysqli_num_rows($result) > 0) {
//     while ($row = mysqli_fetch_assoc($result)) {
//         echo htmlspecialchars($row['name']) . ' ' . htmlspecialchars($row['age']) . "<br>";
//     }
// } else {
//     echo 'No data found.';
// }

// mysqli_close($connection);
?>