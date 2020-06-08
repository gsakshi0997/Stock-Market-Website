<?php
session_start();  
    if(!isset($_SESSION["sess_user"])){  
        header("location:login.php");  
}
?>

<html>
<head>
<link rel="stylesheet" href="h11.css">
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
<tr><td><a href="whatisstock.php" class="button">What is Stock</a></td></tr>
<tr><td><a href="whatstockstobuy.php" class="button">What stocks to buy</a></td></tr>
<tr><td><a href="calc.php" class="button">Calculator</a></td></tr>
<tr><td><a href="cart.php" class="button">Cart</a></td></tr>
<tr><td><a href="moeny.php" class="button">Add Money</a></td></tr>


</table>
</div>
<?php
$servername="localhost";
$username="root";
$password="STOCK";
$dbname="stockmarket";
$conn=mysqli_connect("localhost","root","STOCK","stockmarket");
if(!$conn)
    die("Connection failed: ".mysqli_connect_error());
//echo "connection successful";

        
        if (isset($_POST['submit'])) {
        $just=999;        
         $bal=$_POST["bal"];
                 $user=$_SESSION['sess_user'];

         $sql="UPDATE buystock SET balance=balance+$bal WHERE (units=$just AND username='$user') ";
         mysqli_query($conn,$sql);
         echo "<script>";
         echo 'alert("successful");';
         echo "</script>";
        }
         ?>
         <div class="money">
<form name="data"  action="" method="post">
<table cellspacing="10px">
<tr>
<td><font color="white">Enter Credits(In $ Thousand):</font></td>
<td>
<input type="number" name="bal" required>
</td>
</tr>
<tr><td></td><td>
<button type="submit" name="submit" value="Submit">Submit</button>
</td></tr></table>
</form>
</div>
</body>
<footer id="foot">
      <font face="Times New Roman" size="5px"><br> <br>Developed By Sakshi Gupta and Annuj Jain
</footer>
</html>