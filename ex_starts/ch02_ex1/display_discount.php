<!-- Performs the calculations for the form -->
<?php
    // Collects the values input by the user
    $product_description = filter_input(INPUT_POST, 'product_description');
    $list_price = filter_input(INPUT_POST, 'list_price');
    $discount_percent = filter_input(INPUT_POST, 'discount_percent');
    
    // Error handling for the form
    // Checks the product description box
    if ($product_description === FALSE){
        $error_message = 'Please insert a product description.';
    } else if ($list_price === FALSE){
        $error_message = 'Please insert a price.';
    } else if ($list_price <= 0){
        $error_message = 'List price is negative, please correct.';
    } else if ($discount_percent === FALSE){
        $error_message = 'Please insert a discount percentage.';
    } else if ($discount_percent <= 0){
        $error_message = 'Discount percent is negative, please correct.';
    } else {
        $error_message = '';
    }
    
    // Returns to the index page if there is an error
    if ($error_message != ''){
        include('index.php');
        exit();
    }
    
    // Calculates the discounts and the price 
    $discount = $list_price * $discount_percent * .01;
    $discount_price = $list_price - $discount;
    
    // Calculates the sales tax on the product
    $sales_tax_rate = 8;
    $sales_tax = $discount_price * $sales_tax_rate * .01;
    $total_amount = $discount_price + $sales_tax;
    

    // apply currency formatting to the dollar and percent amounts
    $list_price_f = "$".number_format($list_price, 2);
    $discount_percent_f = $discount_percent."%";
    $discount_f = "$".number_format($discount, 2);
    $discount_price_f = "$".number_format($discount_price, 2);
    $sales_tax_f = "$".number_format($sales_tax, 2);
    $total_amount_f = "$".  number_format($total_amount, 2);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Product Discount Calculator</title>
    <link rel="stylesheet" type="text/css" href="main.css">
</head>
<body>
    <main>
        <h1>Product discount calculator</h1>

        <label>Product Description:</label>
        <span><?php echo $product_description; ?></span><br>

        <label>List Price:</label>
        <span><?php echo $list_price_f; ?></span><br>

        <label>Standard Discount:</label>
        <span><?php echo $discount_percent_f; ?></span><br>

        <label>Discount Amount:</label>
        <span><?php echo $discount_f; ?></span><br>

        <label>Discount Price:</label>
        <span><?php echo $discount_price_f; ?></span><br>
        
        <label>Sales Tax:</label>
        <span><?php echo $sales_tax_f; ?></span><br>
        
        <label>Total Amount:</label>
        <span><?php echo $total_amount_f; ?></span><br>
    </main>
</body>
</html>