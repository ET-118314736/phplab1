<!DOCTYPE html>
<html>
    <style>
        body{
            background-image: url(reciept2.jpg);
            background-repeat: no-repeat;
            background-size: cover;
            color: lightblue;
            font-size:large;
        }
    </style>
    <body>
        <strong>
    <center>  <h1><strong>Purchase Receipt</strong></h1>
    
        <!-- // Starting the session to get the session variable from the last page-->
        <?php
        session_start();
        
        $totalValue2 = $_POST['txtTotal'];
        $fullNameValue = $_POST['txtName'];
        echo"Name:".$fullNameValue.".";
        echo "<br></br>";
        echo "Total Price:".$totalValue2.".";
       
        ?>
    </center>
        </strong>
</body>
</html>






