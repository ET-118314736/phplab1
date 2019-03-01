<?php
session_start();
$fullNameValue ="";
$totalValue = "";
/*
 * Create a session variable for the mobile number 
 */

$totalValue = $_post ['txtTotal'];
$_SESSION['txtName'] = $fullNameValue;
$_SESSION['txtTotal'] = $totalValue;
/*
 * Allocate the mobile number session variable to a text box
 */
?>
<!DOCTYPE html>
        <html>
            <head>
                <style>
                    body{
                        background-color: grey;
                        color: lightblue
                    }
                    td{
                        color: lightblue;
                    }
                    input{
                        color:grey;
                        background-color: lightblue;
                    }
                </style>
                <title>eBusiness 2</title>
            </head>
            
            <body>
                <div class="form">
                    <form name="Details" method="post" action="Ebus3.php">
                        <center>
                            <table cellspacing="10">
                                <tr>
                                    <td><b></b></td>
                                    <td><b>Enter your details  below</b></td>
                                </tr>
                                <tr>
                                    <td>Phone number</td>
                                    <td><input type="text" id="txtName" name="txtName" value=""/></td>
                                </tr>
                                <tr>
                                    <td>Password</td>
                                    <td><input type="text" id="txtPassword" name="txtPassword" value=""/></td>
                                </tr>
                                <tr>
                                    <td><input type ="hidden" id="txtTotal" name="txtTotal" value="<?php echo $totalValue;?>"/>
                                </tr>
                            </table>
                        </center>
                        <center>
                      <input type="submit" name="btncontinue" id="btnContinue" onclick="" value="Continue"/>
                            </center>
                </div>
                    </form>
            </body>
    </html>

