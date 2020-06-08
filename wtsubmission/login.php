
<?php

$servername="localhost";
$username="root";
$password="STOCK";
$dbname="stockmarket";
$conn=mysqli_connect("localhost","root","STOCK","stockmarket");
if(!$conn)
    die("Connection failed: ".mysqli_connect_error());
//echo "connection successful";
//session_start();
 
    if(isset($_POST["submit"])){  
    if(!empty($_POST['name']) && !empty($_POST['pass'])) {  
        $user=$_POST["name"];  
        $pass=$_POST["pass"];  
     
        $sql="SELECT * FROM stock WHERE username='".$user."' AND password='".$pass."' ";
        $query=mysqli_query($conn,$sql);  
        $numrows=mysqli_num_rows($query); 
        if($numrows!=0)  
        {  
        while($row=mysqli_fetch_assoc($query))  
        {  
        $dbusername=$row["username"];  
        $dbpassword=$row["password"];
        //$name=$row["Name"];  
        }  
      
        if($user == $dbusername && $pass == $dbpassword)  
        {  
        session_start();  
        $_SESSION['sess_user']=$user;
        //$_SESSION['email']=$user;  
      
          
        header("Location: h111.php");  
        }  
        } else {  
        echo "Invalid username or password!";  
        }  
      
    } else {  
        echo "All fields are required!";  
    }  
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
<td width="280px"> <a href="h111.php">Home</a></td>
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
<form method="post">
<table cellpadding="10 pixels" id="login">


<tr><td><b><font color="white">Username:</font> </b> </td>
 <td>
<input type="text" name="name"></td>
 </tr>


<tr><td><b><font color="white">Password: </font></b> </td>
 <td>
<input type="password" name="pass"></td>
 </tr>

<button type="reset" name="reset" value="Reset">Reset</button>&nbsp;
<button type="submit" name="submit" value="submit">Submit</button>



</table>


</form>


</body>
<footer id="foot">
      <font face="Times New Roman" size="5px"><br> <br>Developed By Sakshi Gupta and Annuj Jain
        </footer></html>

