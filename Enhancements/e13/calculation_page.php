<!DOCTYPE html>
<html>
<head>
    <title>Future Value Calculator</title>
    <link rel="stylesheet" type="text/css" href="main.css"/>
</head>

<body>
    <main>
    <h1>Future Value Calculator</h1>
    <?php if (!empty($error_message)) { ?>
        <p class="error"><?php echo $error_message; ?></p>
    <?php } // end if ?>
    <form action="." method="post">
        <input type="hidden" name="action" value="calculate_value">
        <div id="data">
            <label>Investment Amount:</label>
            <select name="investment">
                <?php for($i = 10000; $i <= 50000; $i += 5000){ 
                    if($i == $investment){ ?>
                        <option selected="selected"><?php echo $i ?></option>
                    <?php } else{?>
                        <option><?php echo $i ?></option>
                    <?php }?>
                <?php }?>
            </select><br>

            <label>Yearly Interest Rate:</label>
            <select name="interest_rate">
                <?php for($j = 4; $j <= 12; $j += 0.5){ 
                    if($j == $interest_rate){ ?>
                        <option selected="selected"><?php echo $j ?></option>
                    <?php } else{?>
                        <option><?php echo $j ?></option>
                    <?php }?>
                <?php }?>
            </select><br>

            <label>Number of Years:</label>
            <input type="text" name="years"
                   value="<?php echo $years; ?>"/><br>
            <input type="checkbox" name="month">Compound Interest Monthly<br>
        </div>

        <div id="buttons">
            <label>&nbsp;</label>
            <input type="submit" value="Calculate"/><br>
        </div>

    </form>
    </main>
</body>
</html>