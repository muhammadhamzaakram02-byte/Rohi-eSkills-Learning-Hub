<?php
$id = $_GET["id"];
// echo $id;
$database = mysqli_connect("localhost", "root", "", "database1");
$product = mysqli_query($database, "SELECT * FROM `products` WHERE id='$id'");
// echo '<pre>';
// print_r($product);   // bundel of data (array of rows)
// echo '</pre>';
// echo '<pre>';
// print_r($product);
// echo '</pre>';
$product = mysqli_fetch_assoc($product); // actual data row 
$product_id = $product["id"];
$product_name = $product["name"];
$product_price = (int)$product["price"];
// echo $product_price;
$product_quantity = $product["quantity"];
$product_category = $product["category"];
$product_new = $product["new"];
$product_sale = $product["sale"];
$product_featured = $product["featured"];
$product_trending = $product["trending"];


// echo $product_new;
// echo $product_sale;

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Form </title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background: linear-gradient(-9deg, yellow 0% 33%, rgb(173, 137, 137) 33% 66%, rgb(244, 47, 47) 66% 100%);
        }

        form {
            background-color: #fff;
            /* background: conic-gradient( from 110deg, #04f73c, #ee0404 , yellow, #04f73c); */
            /* background: radial-gradient(circle at center, #04f73c, green ); */
            /* background: linear-gradient( 145deg , rgb(51, 31, 31), rgb(164, 85, 136), rgb(171, 182, 171)); */
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 300px;
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
            color: green;
        }

        input[type="text"],
        input[type="number"],
        input[type="submit"],
        select {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 3px;
            box-sizing: border-box;
        }

        input[type="text"]:hover,
        input[type="number"]:hover,
        select:hover {
            border-color: #007bff;
        }

        input[type="text"]:focus,
        input[type="number"]:focus,
        select:focus {
            outline: none;
            box-shadow: 0 0 5px rgba(40, 167, 69, 0.5);
        }

        input[type="submit"] {
            background-color: #28a745;
            color: white;
            border: none;
            cursor: pointer;
            margin-top: 20px;
        }

        input[type="submit"]:hover {
            background-color: #218838;
        }

        fieldset {
            border: none;
            margin-bottom: 15px;
        }

        label {
            margin-right: 10px;
        }
    </style>
</head>

<body>
    <h1><a href="data.php">View Data</a></h1>
    <form action="edit_query.php?id=<?php echo $product_id; ?>" method="POST">
        <h2>Product Form</h2>
        <input type="text" name="name" placeholder="Product Name" value="<?php echo $product_name ; ?>" >
        <input type="number" name="price" placeholder="Price" value="<?php echo $product_price; ?>" >
        <input type="number" name="quantity" placeholder="Quantity" value="<?php echo $product_quantity; ?>" >
        <select name="category">
            <option value="">Select Category</option>
            <option value="Electronics" <?php echo $product_category === 'Electronics' ? 'selected' : ''; ?>>Electronics</option>
            <option value="Clothing" <?php echo $product_category === 'Clothing' ? 'selected' : ''; ?>>Clothing</option>
            <option value="Home Appliances" <?php echo $product_category === 'Home Appliances' ? 'selected' : ''; ?>>Home Appliances</option>
        </select>

        <input type="checkbox" name="new" value="new" id="new" <?php echo isset($product['new']) && $product['new'] === 'new' ? 'checked' : ''; ?>>
        <label for="new">New</label>
        <input type="checkbox" name="sale" value="sale" id="sale" <?php echo isset($product['sale']) && $product['sale'] === 'sale' ? 'checked' : ''; ?>>
        <label for="sale">Sale</label>
        <input type="checkbox" name="featured" value="featured" id="featured" <?php echo $product_featured === 'featured' ? 'checked' : ''; ?>>
        <label for="featured">Featured</label> <br>
        <input type="checkbox" name="trending" value="trending" id="trending" <?php echo $product_trending == 'trending' ? 'checked' : ''; ?>>
        <label for="trending">Trending</label>

        <input type="submit" value="Submit">
    </form>
</body>

</html>
