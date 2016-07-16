<?php
function get_products_by_category($category_id) {
    global $db;
    $query = 'SELECT * FROM products
              WHERE products.categoryID = :category_id
              ORDER BY productID';
    $statement = $db->prepare($query);
    $statement->bindValue(":category_id", $category_id);
    $statement->execute();
    $products = $statement->fetchAll();
    $statement->closeCursor();
    return $products;
}

function get_product($product_id) {
    global $db;
    $query = 'SELECT * FROM products
              WHERE productID = :product_id';
    $statement = $db->prepare($query);
    $statement->bindValue(":product_id", $product_id);
    $statement->execute();
    $product = $statement->fetch();
    $statement->closeCursor();
    return $product;
}

function delete_product($product_id) {
    global $db;
    $query = 'DELETE FROM products
              WHERE productID = :product_id';
    $statement = $db->prepare($query);
    $statement->bindValue(':product_id', $product_id);
    $statement->execute();
    $statement->closeCursor();
}

function add_product($category_id, $code, $name, $price) {
    global $db;
    $query = 'INSERT INTO products
                 (categoryID, productCode, productName, listPrice)
              VALUES
                 (:category_id, :code, :name, :price)';
    $statement = $db->prepare($query);
    $statement->bindValue(':category_id', $category_id);
    $statement->bindValue(':code', $code);
    $statement->bindValue(':name', $name);
    $statement->bindValue(':price', $price);
    $statement->execute();
    $statement->closeCursor();
}

function update_product($product, $category, $pro_name, $pro_code, $pro_price){
    global $db;
    // Updates the changes in the database
    $query = 'UPDATE products SET productCode = :product_code, 
             productName = :product_name, listPrice = :list_price
             WHERE productID = :product_id AND categoryID = :category_id';
    $statement = $db->prepare($query);
    $statement->bindValue(':product_id', $product);
    $statement->bindValue(':category_id', $category);
    $statement->bindValue(':product_name', $pro_name);
    $statement->bindValue(':product_code', $pro_code);
    $statement->bindValue(':list_price', $pro_price);
    $statement->execute();
    $statement->closeCursor();
}
?>