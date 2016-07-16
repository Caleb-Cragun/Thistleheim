<?php
/* Code that checks the new values that have been input by the user and then
 * updates the value in the table
 */

// Gets the values from the form
$product = filter_input(INPUT_POST, 'product_value', FILTER_VALIDATE_INT);
$category = filter_input(INPUT_POST, 'category', FILTER_VALIDATE_INT); 
$code = filter_input(INPUT_POST, 'code');
$name = filter_input(INPUT_POST, 'name');
$price = filter_input(INPUT_POST, 'price', FILTER_VALIDATE_FLOAT);

/* Checks the values to make sure that none of the values are null. If they
 * are then an error is thrown. If they are not, then the value is updated.
 */
if ($category == null || $category == false || $product == null || $product == false ||
    $code == null || $name == null || $price == null || $price == false) {
    $error = "Invalid information. Check all fields and try again.";
    include('error.php');
} else {
    require_once('database.php');
    
    // Updates the changes in the database
    $query = 'UPDATE products SET productCode = :product_code, 
             productName = :product_name, listPrice = :list_price
             WHERE productID = :product_id AND categoryID = :category_id';
    $statement = $db->prepare($query);
    $statement->bindValue(':product_id', $product);
    $statement->bindValue(':category_id', $category);
    $statement->bindValue(':product_name', $name);
    $statement->bindValue(':product_code', $code);
    $statement->bindValue(':list_price', $price);
    $statement->execute();
    $statement->closeCursor();
}

// Display the Product List page
include('index.php');
?>