<!DOCTYPE html>
<html>
    <head>
        <title>Consulting Services Checkout</title>
        <link rel="stylesheet" href="styles.css" type="text/css" />
    </head>
    <body>
        <?php
            session_start();
            $totalValue = $_POST['txtTotal'];
            echo "the total value is ".$totalValue.".";
        ?>
    </body>
</html>

