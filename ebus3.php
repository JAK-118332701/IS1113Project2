<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
    </head>
    
    <body>
        <?php
            session_start();
            $totalValue2 = $_POST["txtTotal"];
            $fullNameValue = $_POST["txtName"];
            
            
            echo "the total value is " .$totalValue2. ".";
            echo "the name is".$fullNameValue.".";
        ?>
    </body>
</html>
