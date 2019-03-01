<!DOCTYPE html>
<html>
    <style>
        body{
            background-color: grey;
            color: lightblue;
        }
    </style>
    <body>
        <!-- // Starting the session to get the session variable from the last page-->
        <?php
        session_start();
        $totalValue = $_Post ['txtTotal'];
        
        echo "The total value is ".$totalValue.".";
        ?>
    </body>
</html>






