<?php

// Get all the products for the registration dropdown list
function get_products(){
    global $db;
    $query = 'SELECT productCode, name FROM Products';
    $statement = $db->prepare($query);
    $statement->execute();
    $list = $statement->fetch();
    $statement->closeCursor();
    return $list;}
