<?php
// Deletes a category from the category list
// Gets the category id
$category_id = filter_input(INPUT_POST, 'category_id', FILTER_VALIDATE_INT);

// Checks for a valid category id
if ($category_id == null || $category_id == false) {
    $error = "Invalid category ID.";
    include('error.php');
} else {
    require_once('database.php');

    // Removes the category from the database  
    $query = 'DELETE FROM categories 
              WHERE categoryID = :category_id';
    $statement = $db->prepare($query);
    $statement->bindValue(':category_id', $category_id);
    $statement->execute();
    $statement->closeCursor();

    // Display the Category List page
    include('category_list.php');
}
?>
