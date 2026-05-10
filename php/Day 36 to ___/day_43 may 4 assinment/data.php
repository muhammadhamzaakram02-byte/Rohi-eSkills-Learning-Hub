<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Received</title>
    <style>
        * {
            /* box-sizing: border-box; */
            /* margin: 0px; */
            /* padding-right: 100px; */
        }

        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            display: flex;
            flex-direction: column;
            /* justify-content: center; */
            /* align-items: center; */
            /* height: 100vh; */
            background: linear-gradient(-9deg, yellow 0% 33%, rgb(173, 137, 137) 33% 66%, rgb(244, 47, 47) 66% 100%);
            /* background-color: ; */
        }

        h1 {
            color: rgb(54, 234, 14);
        }

        table {
            border-collapse: collapse;
            width: 80%;
            margin-top: 20px;

        }

        th,
        td {
            border: 1px solid #ddd;
            padding: 8px;
            height: 100%;
            /* display: flex; */
            /* flex-direction: column; */
            /* align-items: center; */
            text-align: left;
        }

        th {
            background-color: #04f73c;
            color: white;
            position: sticky;
            top: 0;
        }


        tr:nth-child(even) {
            background-color: #f2f2f279;

        }

        .edit {
            background-color: #4CAF50;
            color: white;
            padding: 5px 10px;
            text-decoration: none;
            border-radius: 4px;
        }

        .delete {
            background-color: #f44336;
            color: white;
            padding: 5px 10px;
            text-decoration: none;
            border-radius: 4px;
            margin-left: 13%;
        }
        .action {
                justify-content: space-around;
                display: flex;
                height: 50px;
                align-items: center;
                border: none;
                width: 200px;
            }

        @media (max-width:700px) {
            table {
                /* padding: 50px; */
                /* margin-top: 50px; */
                /* margin-left: 100px; */
            }

            body {
                /* padding: 100px; */
                /* margin: 100px; */
            }

            .action {
                justify-content: space-around;
                display: flex;
                height: 50px;
                align-items: center;
                border: none;
                width: 200px;
            }

                .delete , .edit  {
                    margin-left: 0;
                    padding: 15px 30px;
                }
        }
    </style>
</head>

<body>
    <h1><a href="form.html">product form </a></h1>
    <h1>Data Received</h1>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Image</th>
                <th>Price</th>
                <th>Quantity</th>
                <th>Category</th>
                <th>Tags</th>
                <th class="" colspan="2">Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $database = mysqli_connect("localhost", "root", "", "database1");
            $product = mysqli_query($database, "SELECT * FROM `products`");
            while ($row = mysqli_fetch_assoc($product)) { ?>
                <tr>
                    <td><?php echo $row['id']; ?></td>
                    <td><?php echo $row['name']; ?></td>
                    <td><img src="uploads/<?php echo $row['image']; ?>" alt="<?php echo $row['name']; ?>" width="100"></td>
                    <td><?php echo $row['price']; ?></td>
                    <td><?php echo $row['quantity']; ?></td>
                    <td><?php echo $row['category']; ?></td>
                    <td><?php echo $row['new'] . ' ' . $row['sale'] . ' ' . $row['featured'] . ' ' . $row['trending']; ?>
                    </td>
                    <td class="action" colspan="2">
                        <a class="edit" href="edit.php?id=<?php echo $row['id']; ?>">Edit</a> <br>
                        <a class="delete" href="delete.php?id=<?php echo $row['id']; ?>">Delete</a>
                        <!-- <a href="delete.php?id=7">Delete</a>  -->
                    </td>
                </tr>
            <?php } ?>

        </tbody>
    </table>
</body>

</html>