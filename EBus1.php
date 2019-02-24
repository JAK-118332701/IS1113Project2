<?php
session_start();
$totalValue = "";
$_SESSION['txtTotal'] = $totalValue;
?>
<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta charset="utf-8" />
        <title>E Business1</title>
        <link rel="stylesheet" href="styles.css" type="text/css" />
        
    </head>
    <body>
        <div class="form">
            <form name="intCalc" method="post" action="ebus3.php">
                <h1>Consultancy services</h1>
                <hr />
                <center>
                    <table cellspacing="10">
                        <tr>
                            <td><b>Block Chain - 1000</b></td>
                            <td><input type="radio" id="basic" name="rdoGroup" value="1000" /></td>
                        </tr>
                        <tr>
                            <td>Autonomous things - 2000</td>
                            <td><input type="radio" id="pro" name="rdoGroup" value="2000"></td>
                        </tr>
                        <tr>
                            <td>Immersive Experience - 3000</td>
                            <td><input type="radio" id="immersive" name="rdoGroup" value="3000" /></td>
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
                            <td>SubTotal</td>
                            <td><input type="text" id="txtSubTot" name="txtSubTot" readonly /></td>
                        </tr>
                        <tr>
                            <td>Discount at 10 percent</td>
                            <td><input type="text" id="txtDisc" name="txtDisc" readonly /></td>
                        </tr>
                        <tr>
                            <td>Vat at 20 percent</td>
                            <td><input type="text" id="txtVat" name="txtDisc" readonly /></td>
                        </tr>
                        <tr>
                            <td>Total</td>
                            <td><input type="text" id="txtTotal" name="txtTotal" value="" readonly /></td>
                        </tr>
                    </table>
                </center>
                <center>
                    <input type="button" name="btnCalc" id="btnCalc" onclick="calcSub()" value="Calculate.Amount" />
                    <input type="button" name="btnClear" id="btnClear" onclick="AmountClear()" value="Clear" />
                    <input type="submit" name="btnProceed" id="btnProceed" onclick="" value="Proceed" />
                </center>
                <script type="text/javascript">
                function CalcSub() {
                    var subAmount = parseFloat(document.getElementById('txtSubTot').value);
                    var basic = parseFloat(document.getElementById('basic').value);
                    var pro = parseFloat(document.getElementById('pro').value);
                    
                    if (document.getElementById(basic).checked){
                        document.intCalc.txtSubTot.value = basic;
                        subAmount = basic;
                        calculation(subAmount);
                    }
                    else if (document.getElementById(pro).checked){
                        document.intCalc.txtSubTot.value = pro;
                        subAmount = pro;
                        calculation(subAmount);
                    }
                }
                    
                    function calculation(parmSTotoal){
                        var subTotal = parseFloat(parmSTotal);
                        var discCalc = parseFloat(subTotal * .1);
                        var vatCalc = parseFloat(subTotal .2);
                        var total = (subTotal - discCalc + vatCalc);
                        
                        document.intCalc.txtDisc.value = discCalc;
                        document.intCalc.txtVat.value = vatCalc;
                        ducument.intCalc.txtTotal.value = total;
                    }
                    function AmountClear() {
                        document.getElementById("txtSubtot").value="";
                        document.getElementById("txtDisc").value="";
                        document.getElementById("txtVat").value="";
                        document.getElementById("txtTotal").value="";
                    }
                    
                }
                </script>
            </form>
        </div>
    </body>
</html>


