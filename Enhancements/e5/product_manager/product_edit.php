<?php include '../view/header.php'; ?>
<h1>Edit Product</h1>
<form action="." method="post">
    <input type="hidden" name="action" value="update_product">
    <input type="hidden" name="product_value" value="<?php echo $merchandise ?>"><br>

            <label>Category:</label>
            <input type="text" name="category" value="<?php echo $category ?>" readonly><br>

            <label>Code:</label>
            <input type="text" name="code" value="<?php echo $pro_code ?>"><br>

            <label>Name:</label>
            <input type="text" name="name" value="<?php echo $pro_name ?>"><br>

            <label>List Price:</label>
            <input type="text" name="price" value="<?php echo $pro_price ?>"><br>
            
            <label>&nbsp;</label>
            <input type="submit" value="Save Changes"><br>
</form>
<p><a href="../product_manager/product_list.php">View Product List</a></p>
<?php include '../view/footer.php'; ?>