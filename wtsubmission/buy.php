
<?php
session_start();  
    if(!isset($_SESSION["sess_user"])){  
        header("location:login.php");}
?>

<html>
<head>
<link rel="stylesheet" href="h11.css">
<script type="text/javascript">
function bala()
{
var s=document.forms["data"]["stockname"].value;

	if(s!="GOOGL" && s!="IBM" && s!="HDFC" && s!="AAPL" && s!="MSFT" && s!="NFLX" && s!="TSLA" && s!="AMZN" && s!="BMW" && s!="FB" && s!="HINDALCO" && s!="HPQ" && s!="MARUTI" && s!="TATAMOTORS" && s!="TWTR" && s!="ORCL")
  {
    alert ("Enter valid stock name");
   return false; 
  } else {alert ("Purchase successful"); }
 
 /* <?php
//echo "<script>";
         //echo 'alert("successful Purchase");';
         //echo "</script>";
         ?>} */
         return true;
}
</script>
<title>Buy</title>
<header id="head">
    STOCK EXCHANGE
    <div class="image">
    <img src="logo.jpg" height="100" width="300">
    </div>
<div class="topnav" id="myTopnav" background="1.jpg">
<table id="table" align="center" border=0 border-width="thin" width="100%px" height="40px">
<tr>

<td width="280px"> <a href="buy.php">Buy</a></td>
<td width="280px"> <a href="sell.php">Sell</a></td>
<td width="280px"> <a href="form.php">Register</a></td>
<td width="280px"> <a href="profile.php">Profile</a></td>
<td width="280px"> <a href="logout.php">Logout</a></td>

</tr>
</div>
</header>

<body background="1.jpg"> 

<div class="sidenav">
<table id="table1" align="left"  border=0 border-width="thin" width="280px" height="300px"><br>
<tr><td><a href="side1.php" class="button">What is Stock</a></td></tr>
<tr><td><a href="whatstockstobuy.php" class="button">What stocks to buy</a></td></tr>
<tr><td><a href="calc.php" class="button">Calculator</a></td></tr>
<tr><td><a href="cart.php" class="button">Cart</a></td></tr>
<tr><td><a href="moeny.php" class="button">Add Money</a></td></tr>

</table>
</div>




<div class="buy">
<table class="white">
<font color="white">
<tr><th><font color="white">
STOCK</th><th><font color="white">
INITIALS</th><th><font color="white">
PRICE(In Dollars)</th></tr>
<tr><td><font color="white">
Maruti Suzuki India Ltd</td><td><font color="white">
MARUTI</td><td><font color="white">
7872</td></tr>
<tr><td><font color="white">
Tata Motors Limited Fully Paid Ord. Shrs</td><td><font color="white">
TATAMOTORS<td><font color="white">
425.45</td></tr>
<tr><td><font color="white">
Netflix, Inc.</td><td><font color="white">
NFLX</td><td><font color="white">
199.49</td></tr>
<tr><td><font color="white">
Housing Development Finance Corp Ltd</td><td><font color="white">
HDFC</td><td><font color="white">
1763.60</td></tr>
<tr><td><font color="white">
Hindalco Industries Ltd</td><td><font color="white">
HINDALCO</td><td><font color="white">
266.80</td></tr>
<tr><td><font color="white">
Amazon.com,Inc.</td><td><font color="white">
AMZN</td><td><font color="white">
1002.94</td></tr>
<tr><td><font color="white">
Alphabet Inc Class A</td><td><font color="white">
GOOGL</td><td><font color="white">
1007.87</td></tr>
<tr><td><font color="white">
Facebook, Inc. Common Stock</td><td><font color="white">
FB</td><td><font color="white">
173.74</td></tr>
<tr><td><font color="white">
Twitter Inc</td><td><font color="white">
TWTR</td><td><font color="white">
18.63</td></tr>
<tr><td><font color="white">
Tesla Inc</td><td><font color="white">
TSLA</td><td><font color="white">
355.57</td></tr>
<tr><td><font color="white">
Microsoft Corporation</td><td><font color="white">
MSFT</td><td><font color="white">
77.49</td></tr>
<tr><td><font color="white">
Oracle Corporation</td><td><font color="white">
ORCL</td><td><font color="white">
48.61</td></tr>
<tr><td><font color="white">
Bayerische Motoren Werke AG</td><td><font color="white">
BMW</td><td><font color="white">
87.27</td></tr>
<tr><td><font color="white">
Apple Inc.</td><td><font color="white">
AAPL</td><td><font color="white">
156.99</td></tr>
<tr><td><font color="white">
IBM Common Stock</td><td><font color="white">
IBM</td><td><font color="white">
147.10</td></tr>
<tr><td><font color="white">
HP Inc</td><td><font color="white">
HPQ</td><td><font color="white">
21.71</td></tr>
</font>
</table>
<br>
<form name="data" action="tt.php" method="post" >
<table>

<tr><td><font color="white">Enter Initials of the Stock you wish to purchase:</font></td>
<td><input type="text" name="stockname"></td></tr>
<tr><td><font color="white">Enter Number of Units:</font></td>
<td><input type="number" name="units"></td></tr>
<tr>
<td align="right"><button type="reset" name="reset" value="Reset">Reset</button>&nbsp;</td>
<td><button type="submit" name="submit" value="Submit" onClick=" return bala();">Submit</button></td>
</tr>
</table>
</form>
</font>
</div>
</body>
<footer id="foot">
      <font face="Times New Roman" size="5px"><br> <br>Developed By Sakshi Gupta and Annuj Jain
</footer></html>