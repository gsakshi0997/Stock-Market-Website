
<?php
session_start();  
    if(!isset($_SESSION["sess_user"])){  
        header("location:login.php");  
}
?>
<html >
<head>
  <link rel="stylesheet" href="h11.css">

<title>Login</title>
</head>
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
<div class="cart">
<h2 style="color:white; font-size: 30px; margin: 0px 0px 0.5em; padding: 0px;">





<?php
$servername="localhost";
$username="root";
$password="STOCK";
$dbname="stockmarket";
$conn=mysqli_connect("localhost","root","STOCK","stockmarket");
if(!$conn)
    die("Connection failed: ".mysqli_connect_error());
//echo "connection successful";

$user=$_SESSION["sess_user"];
echo $user;
$sql="SELECT * FROM buystock where username='$user' AND balance=0 ";
$result=$conn->query($sql);
      $numrows=mysqli_num_rows($result); 
if($numrows!=0)  
        {  
        while($row=mysqli_fetch_assoc($result))  
        {
    echo "<br>Stock Name:".$row['sname']."<br>Units:".$row['units'];  
          }  
        }
        
 ?>
 </h2>	
 </div>
 </body>
 <footer id="foot">
      <font face="Times New Roman" size="5px"><br> <br>Developed By Sakshi Gupta and Annuj Jain
</footer>
 </html>