<?php
require('database.php');

// Gets the values to put into the places in the form
$product = filter_input(INPUT_POST, 'product', FILTER_VALIDATE_INT);
$category = filter_input(INPUT_POST, 'category', FILTER_VALIDATE_INT); 
$code = filter_input(INPUT_POST, 'product_code');
$name = filter_input(INPUT_POST, 'product_name');
$price = filter_input(INPUT_POST, 'list_price', FILTER_VALIDATE_FLOAT);
?>

<!DOCTYPE html>
<html>

<!-- the head section -->
<head>
    <title>My Guitar Shop</title>
    <link rel="stylesheet" type="text/css" href="main.css">
</head>

<!-- the body section -->
<body>
    <header><h1>Product Manager</h1></header>

    <main>
        <h1>Edit Product</h1>
        <form action="edit.php" method="post">
            
            <input type="hidden" name="product_value" value="<?php echo $product ?>"><br>

            <label>Category:</label>
            <input type="text" name="category" value="<?php echo $category ?>" readonly><br>

            <label>Code:</label>
            <input type="text" name="code" value="<?php echo $code ?>"><br>

            <label>Name:</label>
            <input type="text" name="name" value="<?php echo $name ?>"><br>

            <label>List Price:</label>
            <input type="text" name="price" value="<?php echo $price ?>"><br>
            
            <label>&nbsp;</label>
            <input type="submit" value="Save Changes"><br>
        </form>
        <p><a href="index.php">View Product List</a></p>
    </main>

    <footer>
        <p>&copy; <?php echo date("Y"); ?> My Guitar Shop, Inc.</p>
    </footer>
</body>
</html>