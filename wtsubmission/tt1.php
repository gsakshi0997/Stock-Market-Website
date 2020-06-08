
<?php
session_start();  
    if(!isset($_SESSION["sess_user"])){  
        header("location:sell.php");}



$servername="localhost";
$username="root";
$password="STOCK";
$dbname="stockmarket";
$conn=mysqli_connect("localhost","root","STOCK","stockmarket");
if(!$conn)
    die("Connection failed: ".mysqli_connect_error());
//echo "connection successful";
$flag=0;
$user=$_SESSION['sess_user'];
$name=$_POST["sname"];
$units=$_POST["units"];

/*$sql3="SELECT initial FROM buystock WHERE username='$user'";



$res=mysqli_query($conn,$sql3);
        $numrows=mysqli_num_rows($res); 
        if($numrows!=0)  
        {  
        while($row=mysqli_fetch_assoc($res))  
        {  
        $name=$row["initial"];
        if($name1==$name){
            $flag=1;}
          }  
        }
//echo "jbkj".$flag;
$sql4="SELECT units FROM buystock where initial='$name'";
$res=mysqli_query($conn,$sql4);
        $numrows=mysqli_num_rows($res); 
                if($numrows!=0)  
        {  
        while($row=mysqli_fetch_assoc($res))  
        {  
        $name=$row["units"];
        }
}*/





    /*  if($name<$units)
        {
                echo "Entered quantity exceeds the units client's hold on required stock";
        }
        else
        {*/
            $price1="SELECT price from stockname where initial='$name' ";
        //mysqli_query($conn,$price);
        $result=mysqli_query($conn,$price1);
        $numrows=mysqli_num_rows($result); 
        if($numrows!=0)  
        {  
            while($row=mysqli_fetch_assoc($result))  
            {  
                $price=$row["price"];  
            }  
        }
            $just="balance";
            $sql="UPDATE buystock SET units=units-$units,balance=balance+($price*$units) WHERE sname='$just' AND username='$user'";
            echo $price;
            mysqli_query($conn, $sql);
            $sql="UPDATE buystock SET Units=units-'$units' WHERE sname='$name' AND username='$user'";
            mysqli_query($conn, $sql);
/*$sql="SELECT * FROM buystock where username='$user'";
$result=$conn->query($sql);
        $numrows=mysqli_num_rows($result); 
*//*
if($numrows!=0)  
        {  
        while($row=mysqli_fetch_assoc($result))  
        {
        echo "<br>Stock Name:".$row['sname']."<br>Units:".$row['units'];  
          }  
        }*/
    header("location:sell.php");
?>