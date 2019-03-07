<?php
session_start();
$fullNameValue ="";
$totalValue2 = "";
/*
 * Create a session variable for the mobile number 
 */

$totalValue = $_POST['txtTotal'];
$_SESSION['txtName'] = $fullNameValue;
$_SESSION['txtTotal'] = $totalValue2;
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
                <center>
                <h1> ETJT Consulting Services</h1>
                <div class="form">
                    <form name="Details" method="post" action="Ebus3.php">
                        
                            <table cellspacing="10">
                                <tr>
                                    <td><b></b></td>
                                    <td><b>Please enter your  payment details  below</b></td>
                                </tr>
                                <tr>
                                    <td>Name</td>
                                    <td><input type="text" id="txtName" name="txtName" value="" required/></td>
                                </tr>
                                
                                <tr>
                                    <td>Phone number</td>
                                    <td><input type="number" name="phone_num" id="phone_num" max="9999999999"/></td>
                                </tr>
                                <tr>
                                    <td>PIN</td>
                                    
                                    <td><input type="password" id="txtPIN" name="txtPIN" maxlength="4" required/></td>
                                </tr>
                                <tr>
                                    <td><input type ="hidden" id="txtTotal" name="txtTotal" value="<?php echo $totalValue; ?>"/>
                                </tr>
                            </table>
                        </center>
                        <center>
                      <input type="submit" name="btncontinue" id="btnContinue" onclick="" value="Continue"/>
                            </center>
                    </form>
                </div>
                <br></br>
                <center>
            <img src="code.jpg"width="400" height="250" ><img src="code3.jpg" width="400" height="250" ><img src="code2.jpg"  width="400" height="250" >
                </center>
            </body>
    </html>

