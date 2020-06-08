<?php
session_start();  
    if(!isset($_SESSION["sess_user"])){  
        header("location:login.php");  
}
?>

<html>
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
<div id="profile" class="pro">
<font color="white">
<?php

$servername="localhost";
$username="root";
$password="STOCK";
$dbname="stockmarket";

$conn=mysqli_connect("localhost","root","STOCK","stockmarket");
if(!$conn)
    die("Connection failed: ".mysqli_connect_error());
//echo "connection successful";
 $user=$_SESSION['sess_user'];
//if (isset($_POST['submit'])) {
    //print_r($_POST);
//mysql_select_db('stockmarket');

/*$name=$_POST["name"];
$gender=$_POST["sex"];
//$birth=$_POST["dob"];
$addr=$_POST["address"];
//$local=$_POST["locality"];
$cityy=$_POST["city"];
$pin=$_POST["pincode"];
$phnum=$_POST["num"];
$user=$_POST["username"];
$pass=$_POST["password"];*/
   // $sql="INSERT INTO stock VALUES('$name','$gender','$addr','$cityy','$pin','$phnum','$user','$pass')";
   // mysqli_query($conn, $sql);
//echo "i";
$sql="SELECT * FROM stock WHERE username='$user'";
$result=$conn->query($sql);
//if($conn->query($sql))
if(mysqli_num_rows($result)>0){
while($row=$result->fetch_array()){
 		print "<br>Name: ".$row['fname'];
 		print "<br>Address: ".$row['address']."<br>City: ".$row['city'];
 		print "<br>Phone Number: ".$row['phnum']."<br>Username: ".$row['username'];
 	}
}
?>
</font>
</div>
</body>
<footer id="foot">
      <font face="Times New Roman" size="5px"><br><br>Developed By Sakshi Gupta and Annuj Jain
</footer>
</html>
