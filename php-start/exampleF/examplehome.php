<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #897a7a;
        }

        form {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 10px;
            background-color: #bd5b5b;
            padding: 20px;
            width: 40%;
            height: 40%;
        }

        input {
            padding: 10px;
            font-size: 16px;
            background-color: aqua;
            border: none;
            border-radius: 5px;
            width: 40%;
            text-align: center;
        }

        button {
            padding: 10px;
            font-size: 16px;
            background-color: green;
            color: white;
            border: none;
            cursor: pointer;
        }
    </style>
</head>

<body>
    <form action="quick_push_data_on_database.php" method="post">
        <input type="text" name="name" placeholder="Enter your name" required >
        <input type="number" name="age" placeholder="Enter your age" >
        <input type="submit" value="Submit">
    </form>

</body>

</html>