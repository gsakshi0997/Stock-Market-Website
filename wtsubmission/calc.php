<html>
<head>
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
<center>
<script type="text/javascript" language="JavaScript">
	var res='';
	var ans;
	function press(a){
		res += a;
		document.getElementById("input").value=res;
	}
	function calculate(){
		ans=eval(document.getElementById("input").value);
		document.getElementById("input").value=ans;
	}
	function clr(){
		res='';
		document.getElementById("input").value="";
	}
</script>
<div id="calci">
	<input type="text" name="input" id="input" value=0 readonly>
	<br>
	<button type="text" name="1" value=1 onclick="press(1)">1</button>&nbsp;
	<button type="text" name="2" value=2 onclick="press(2)">2</button>&nbsp;
	<button type="text" name="3" value=3 onclick="press(3)">3</button>&nbsp;
	<button type="text" name="+" value=+ onclick="press('+')">+</button>
	<br>
	<button type="text" name="4" value=4 onclick="press(4)">4</button>&nbsp;
	<button type="text" name="5" value=5 onclick="press(5)">5</button>&nbsp;
	<button type="text" name="6" value=6 onclick="press(6)">6</button>&nbsp;
	<button type="text" name="-" value=- onclick="press('-')">-</button>
	<br>
	<button type="text" name="7" value=7 onclick="press(7)">7</button>&nbsp;
	<button type="text" name="8" value=8 onclick="press(8)">8</button>&nbsp;
	<button type="text" name="9" value=9 onclick="press(9)">9</button>&nbsp;
	<button type="text" name="x" value=* onclick="press('*')">*</button>
	<br>
	<button type="text" name="0" value=0 onclick="press(0)">0</button>&nbsp;
	<button type="text" name="/" value=/ onclick="press('/')">/</button>&nbsp;
	<button type="text" name="=" value== onclick="calculate()">=</button>&nbsp;
	<button type="text" name="C" value=C onclick="clr()">C</button>&nbsp;
</div>
</body>
<footer id="foot">
      <font face="Times New Roman" size="5px"><br> <br>Developed By Sakshi Gupta and Annuj Jain
        </footer>
</html>
