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
$name=$_POST["name"];
//$gender=$_POST["sex"];
$birth =$_POST["dob"];
$addr=$_POST["address"];
//$local=$_POST["locality"];
$cityy=$_POST["city"];
$pin=$_POST["pincode"];
$phnum=$_POST["num"];
$user=$_POST["username"];
$pass=$_POST["password"];
    $sql="INSERT INTO stock VALUES('$name','$addr','$cityy','$pin','$phnum','$user','$pass')";
    mysqli_query($conn,$sql);
    $sql1="INSERT INTO buystock VALUES('$user','0','balance','999','0')";
    mysqli_query($conn,$sql1);
header("location:login.php"); 
   /* $sql="SELECT * FROM stock WHERE username='$user'";
$result=mysqli_query($conn,$sql);
//if($conn->query($sql))
$numrows=mysqli_num_rows($result);
if($numrows!=0)  
        {  
        while($row=mysqli_fetch_assoc($result))  
        {
    echo "Name:".$row["fname"]."<br> Gender: ".$row["gender"];
    print "Address:".$row["address"]."<br>City: ".$row["city"];
    print "Phone Number:".$row["pin"]."<br>Username: ".$row["username"];  
          }  
    }*/
}
?>


<html>

<head>

<title>

FORM 1

</title>

  <link rel="stylesheet" href="h11.css">
<script type="text/javascript">
function validateForm() {

       var x = document.forms["regform"]["username"].value;
            
    	if (x == "") {
        alert("Username cannot be blank");
        return false;
    }
       var x = document.forms["regform"]["password"].value;
            var pass=/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,14}$/;
    	if (!x.match(pass)) {
        alert("Invalid password,Try again");
        return false;
    }    var x=document.forms["regform"]["pincode"].value;
    if(x.length!=6)
    {
      alert("Invalid Pincode Number");
      return false;
    }
    var x=document.forms["regform"]["num"].value;
    if(x.length!=10)
    {
      alert("Invalid Phone Number");
      return false;
    }
alert("Thanks for submitting the form");

    return true;
} 
</script>
 
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
<div id="form">
<br>
<br>
<form name="regform" onsubmit="return validateForm()" method="post">
<table cellpadding="10 pixels">

<tr>

<td><b><font color="white">Full Name:</font> </b> </td>
 <td>
<input type="text" name="name" required></td>
 </tr>


<tr>

<td>
<b> <font color="white">Date of Birth:</font> </b>
</td>
<td>
<input type="date" name="dob" required>
</td>
</td>

</tr>

<tr> 
<td>
<b><font color="white">Postal Address:</font> </b> </td>
 <td>
<textarea name="address" col="20" row="4" required> </textarea> </td>
 </tr>



<tr>

<td>
<b> <font color="white">City:</font> </b>
</td>

<td>
<input type="text" name="city" required>
</td>

</tr>

<tr>
<td><b><font color="white">
Pincode :</font></b>
</td>
<td>
<input type="number" name="pincode" required>
</td>
</tr>
<tr>

<td> 
<b><font color="white">Mobile Number:</font> </b></td>
 <td>
<input type="number" name="num" required>
</td>
 </tr>

<td> 
<b><font color="white">Username:</font> </b></td>
 <td>
<input type="text" name="username" required>
</td>
 </tr>
 <tr><td><b><font color="white">Password:</font> </b></td>
 <td>
<input type="password" name="password" required>
</td>
 </tr>
<tr></tr>
<tr><td align="right"><button type="reset" name="reset" value="Reset">Reset</button>
</td><td><button type="submit" name="submit" value="Submit">Submit</button>
</td></tr></table>
</form>


</div>
</body>

<footer id="foot">
      <font face="Times New Roman" size="5px"><br> <br>Developed By Sakshi Gupta and Annuj Jain
        </footer>
</html>
