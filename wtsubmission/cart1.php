


<?php
session_start();  
    if(!isset($_SESSION["sess_user"])){  
        header("location:cart.php");}



$servername="localhost";
$username="root";
$password="STOCK";
$dbname="stockmarket";
$conn=mysqli_connect("localhost","root","STOCK","stockmarket");
if(!$conn)
    die("Connection failed: ".mysqli_connect_error());
//echo "connection successful";

$user=$_SESSION['sess_user'];

$sql='SELECT * FROM buystock where (username='$user' AND sname!="balance")';
$result=$conn->query($sql);
    	$numrows=mysqli_num_rows($result); 
if($numrows!=0)  
        {  
        while($row=mysqli_fetch_assoc($result))  
        {
		echo "<br>Stock Name:".$row['sname']."<br>Units:".$row['units'];  
          }  
      	}
      	header("location:cart.php");
 ?>