<?php
session_start();  
    if(!isset($_SESSION["sess_user"])){  
        header("location:buy.php");}
$servername="localhost";
$username="root";
$password="STOCK";
$dbname="stockmarket";
$conn=mysqli_connect("localhost","root","STOCK","stockmarket");
if(!$conn)
    die("Connection failed: ".mysqli_connect_error());
$user=$_SESSION['sess_user'];
        
            $ini=$_POST["stockname"];
        $unit=$_POST["units"];
if (isset($_POST['submit'])) {
        
         //$bal=$_POST["bal"];

        $sql1="SELECT username from buystock where (username='$user' AND units='$ini')";
        $res=mysqli_query($conn,$sql1);
        $numrows=mysqli_num_rows($res); 
        if($numrows!=0)  
        {  
        while($row=mysqli_fetch_assoc($res))  
        {  
        $name=$row["username"];  }  
        }
        
        
    if('$name'=='$user')
        {




          $just="balance";

                        $sql9="SELECT balance from buystock where (username='$user' AND sname='$just') ";
                        $res1=mysqli_query($conn,$sql9);
                    $numrows=mysqli_num_rows($res1); 
          if($numrows!=0)  
            {  
            while($row=mysqli_fetch_assoc($res1))  
            {  
             $money=$row["balance"];  }  
            }


             $price1="SELECT price from stockname where initial='$ini' ";
        //mysqli_query($conn,$price);
        $result=mysqli_query($conn,$price1);
        $numrows=mysqli_num_rows($result); 
            if($numrows!=0)  
            {  
            while($row=mysqli_fetch_assoc($result))  
            {  
                $price=$row["price"];  }  
            }

$paisa=$price*$unit;

            if($money<$paisa)
                    {
                     echo "Insufficient balance in account";
                     header("location:moeny.php"); 
                    }
            else
            	{
				$sql2="UPDATE buystock SET units=units+'$unit' WHERE (sname='$ini' AND username='$user')";
                mysqli_query($conn,$sql2);
                $sql3="UPDATE buystock SET balance=balance-($unit*$price) WHERE (sname='$just' AND username='$user')";
                mysqli_query($conn,$sql3);
            	}
        }
           
        else
    		{

          $just="balance";

                        $sql9="SELECT balance from buystock where (username='$user' AND sname='$just') ";
                        $res1=mysqli_query($conn,$sql9);
                    $numrows=mysqli_num_rows($res1); 
          if($numrows!=0)  
            {  
            while($row=mysqli_fetch_assoc($res1))  
            {  
             $money=$row["balance"];  }  
            }


             $price1="SELECT price from stockname where initial='$ini' ";
        //mysqli_query($conn,$price);
        $result=mysqli_query($conn,$price1);
        $numrows=mysqli_num_rows($result); 
            if($numrows!=0)  
            {  
            while($row=mysqli_fetch_assoc($result))  
            {  
                $price=$row["price"];  }  
            }


$paisa=$price*$unit;





             if($money<$paisa)
             {
              echo"Insufficient balance in account";
              header("location:moeny.php"); 
          		}
  	      	

  	      	else{
				$sql4="UPDATE buystock SET balance=balance-($unit*$price) WHERE (sname='$just' AND username='$user')";
                mysqli_query($conn,$sql4);

                $sql1="INSERT INTO buystock(username,balance,sname,units,price) VALUES('$user',0,'$ini','$unit','$price')";
    			mysqli_query($conn,$sql1);


          $sql1="SELECT balance from buystock where (username='$user' AND sname='$just')";
        $res=mysqli_query($conn,$sql1);
        $numrows=mysqli_num_rows($res); 
        if($numrows!=0)  
        {  
        while($row=mysqli_fetch_assoc($res))  
        {  
        $balance=$row["balance"];  }  
        }


         
    			 }
    		}
    }
    header("location:cart.php");
?>
