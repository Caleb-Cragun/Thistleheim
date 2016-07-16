<?php
// Get your db connection file, be sure it has a new connection to the
// tech support database
require('../model/database.php');

// Get the models needed - work will need to be done in both
require('../model/customer_db.php');
require('../model/registration_db.php');
require('../model/product_db.php');

$action = filter_input(INPUT_POST, 'action');

if ($action == 'login'){
    $email = filter_input(INPUT_POST, 'email');
    if($email == NULL || $email == FALSE){
        include('../product_register/customer_login.php');
    } else {
        $login = get_customer_by_email($email);
        if ($login['customerID'] == NULL || $login['customerID'] == FALSE){
            $message = 'Invalid Username';
            include('../product_register/product_register.php');
        } else {
            $first = $login['firstName'];
            $last = $login['lastName'];
            
            $list = get_products();
            include ('../product_register/product_register.php');
        }
    }
} else if ($action == 'add_registration'){
    $product_code = filter_input(INPUT_POST, 'product_code');
}

/* 
 * What you will need
 *   1. The product_register application should default to the customer_login view
 *   2. If the email address is not provided, make them enter one
 *   3. Check if the email entered is valid, if so get the user information from 
 *       the database
 *   4. Send the logged-in user to the product registration page
 *   5. Automatically enter the user's name in the product registration form
 *   6. When the page loads the product list should be a drop down menu of 
 *       products built from a resultset queried out of the database
 *   7. If the product registration data is submitted, register the product
 *   8. If the product is registered successfully, confirm it to the user.
 */

