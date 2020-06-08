<html>
<head>
<style>
.container {
  position: relative;
  top:-750px;
  right:-2100px;
  width: 500px;
  height:400px;
}

.image {
  display: block;
  width: 100%;
  height: auto;
}

.overlay {
  position: relative;
  top:-440px;
  right:-2200px;
  
  bottom: 0;
  left: -800px;
  height: 380px;
  width: 520px;
  opacity: 0;
  transition: .5s ease;
  background-color: #008CBA;
}

.container:hover .overlay {
  opacity: 1;
}

.text {
  color: white;
  font-size: 20px;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
}
</style>
  <link rel="stylesheet" href="h11.css">
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
 
<?php session_start();
       if(isset($_SESSION["sess_user"])){ ?> 
  <td width="280px"> <a href="logout.php">Logout</a></td>

        <?php }else{ ?>
   <td width="280px"> <a href="login.php">Login</a></td>
   <?php }?>
  
     <?php
    if(isset($_SESSION["sess_user"])){ 
       echo "<script>";
         echo 'alert("Welcome User");';
         echo "</script>";
    	//echo "Welcome  ".$_SESSION["sess_user"];
    	 }
    	?>
      

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

<div class="besidenav" width="700px" align="left" >
<font size="9" color="white"> About Us</font>
<br>
<font  size="4" color="white" >
You have probably heard a popular definition of what a stock is:<br> A stock is a share in the ownership of a company. 
Stock represents a claim on the company's assets and earnings.<br>As you acquire more stock, your ownership stake in the 
company becomes greater.Unfortunately, this definition is incorrect in some key ways.<br>To start with, stock holders 
do not own corporations;<br>they own shares issued by corporations. But corporations are a special type of organization
 because the law treats them as legal persons.<br>In other words, corporations file taxes, can borrow, can own property, 
 can be sued, etc. The idea that a corporation is a personâ€ means that the corporation owns its own assets.<br> A corporate
 office full of chairs and tables belong to the corporation, and not to the shareholders.<br><br>
</font>
</div>

<div class="container">
  <img src="whatisstock.jpg" alt="Avatar" class="image">
  <div class="overlay">
    <div class="text">"Wall Street is the only place that people ride to in a Rolls Royce to get advice from those who take the subway.”
</div>
  </div>
</div>

<br> 
</body>
<footer id="foot">
      <font face="Times New Roman" size="5px"><br> <br>Developed By Sakshi Gupta and Annuj Jain
        </footer>
</html>
