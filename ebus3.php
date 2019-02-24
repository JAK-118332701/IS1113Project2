<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"
    </head>
    
    <body>
        <?php
            session_start();
            $totalValue = $_POST['txtTotal'];
            echo "the total value is ".$totalValue.".";
        ?>
    </body>
</html>
