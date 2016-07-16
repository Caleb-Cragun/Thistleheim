<?php include '../view/header.php'; ?>
<main>

    <h2>Register Product</h2>
    <?php if (isset($message)) : ?>
        <p><?php echo $message; ?></p>
    <?php else: // Build the product registration form ?>
        <form action="." method="post">
            <input type="hidden" name="action" value="add_registration">
            <input type="hidden" name="product_code" value="add_registration">
            <input type="hidden" name="" value="add_registration">
            <p>Customer:   <?php echo $first.' '.$last;?></p>
            Product:   <select>
                            <?php while($list):
                                echo '<option value="' .$list['productCode'].'">'. 
                                        $list['name'].'</option>';
                                    endwhile;
                            echo '</select>';
                            ?>
            </select><br>
            <p></p>
            <input type="submit" value="Register Product">
        </form>
    <?php endif; ?>

</main>
<?php include '../view/footer.php'; ?>