<?php
session_start();
$totalValue="";
$_SESSION['txtTotal']= $totalValue;
?>
<!DOCTYPE html>
<html lang="en" xmlns="http.//www.w3.org/1999/xhtml">
    <head>
        <meta charset="utf-8"/>
        <title>Ebusiness 1</title>
        <link rel="stylesheet" href="style.css" type="text/css"/>  

		<style>
		h1{
			color: lightblue
		}
		body{
			background-color: grey;
		}
		
		td{
			color: lightblue;
		}
		
		input{
			background-color: lightblue;
			color:grey;
		}
		</style>
		
    </head>
    <body>
        <div class="form">
            <form name="intCalc" method="post" action="Ebus2.php">
            <center><strong><h1>Strategic Consulting Services</h1></strong></center>
            <hr/>
            <center>
                        <table cellspacing="10">
                        <tr>
                                <td><b>Please Select One Consulting Service</b></td>
                        </tr>
                        <tr>
                            <td><b>Blockchain</b></td>
                            <td><input type="radio" id="blockchain" name="rdoGroup" value="1000"/></td>
                        </tr>
                        <tr>
                            <td><b>Autonomous Things </b></td>
                            <td><input type="radio" id="autonomousthings" name="rdoGroup" value="2000"/></td>
                        </tr>
                        <tr>
                            <td><b>Immersive Experience</b></td>
                            <td><input type="radio" id="immersiveexperience" name="rdoGroup" value="3000"/></td>
                        </tr>
                        
                        </table>
            </center>
            <br />
            <center>
                <table cellspacing="10">
                    <tr>
                        <td><b></b></td>
                        <td><b>Amount</b></td>
                    </tr>
                    <tr>
                        <td>Sub Total</td>
                        <td><input type="text" id="txtSubTot" name="txtSub" readonly/></td>
                    </tr>
                    <tr>
                        <td>-Discount @10%</td>
                        <td><input type="text" id="txtDisc" name="txtDisc" readonly/></td>
                    </tr>
                    <tr>
                        <td>+VAT @20%</td>
                        <td><input type="text" id="txtVAT" name="txtVAT" readonly/></td>
                    </tr>
                    <tr>
                        <td>Total</td>
                        <td><input type="text" id="txtTotal" name="txtTotal" value="" readonly/></td>
                    </tr>
                </table>
            </center>
            <br/>
            <center>
                <input type="button" name="btnCalc" id="btnCalc" onclick="calcSub()" value="Calculate Amount"/>
                <input type="button" name="btnClear" id="btnClear" onclick="AmountClear()" value="Clear"/>
                <input type="submit" name="btnProceed" id="btnProceed" onclick="" value="Proceed"/>
            </center>
            </form>
        </div>
        <script type="text/javascript">
            function calcSub(){
                //Assigning variables to the values
                var subAmount= parseFloat(document.getElementById('txtSubTot').value);
                var blockchain = parseFloat(document.getElementById('blockchain').value);
                var autonomousthings = parseFloat(document.getElementById('autonomousthings').value);
                var immersiveexperience = parseFloat(document.getElementById('immersiveexperience').value);
            
            //If radio buttons are clicked values are assigned
           if (document.getElementById('blockchain').checked){
               document.intCalc.txtSubTot.value = blockchain;
               subAmount= blockchain;
               calcDispVatTotalDisc(subAmount);
           }
           else if (document.getElementById('autonomousthings').checked){
               document.intCalc.txtSubTot.value = autonomousthings;
               subAmount= autonomousthings;
               calcDispVatTotalDisc(subAmount);
           }
            else if (document.getElementById('immersiveexperience').checked){
               document.intCalc.txtSubTot.value = immersiveexperience;
               subAmount= immersiveexperience;
               calcDispVatTotalDisc(subAmount);
           }
       }
        //Function for calculating values 
        function calcDispVatTotalDisc(parmSubTotal){
            var subTotal = parseFloat(parmSubTotal);
            var discCalc = parseFloat(subTotal*.10);
            var vatCalc = parseFloat(subTotal*.20);
            var total = parseFloat(subTotal - discCalc + vatCalc);
            
            //Instering them into the correct fields
            document.intCalc.txtDisc.value = discCalc;
             document.intCalc.txtVAT.value = vatCalc;
              document.intCalc.txtTotal.value = total;
          }
          function AmountClear(){
              document.getElementById("txtSubTot").value = "";
               document.getElementById("txtDisc").value = "";
                document.getElementById("txtVAT").value = "";
                 document.getElementById("txtTotal").value = "";
                        
          }
          
            
     </script>   
    </body>
    
</html>