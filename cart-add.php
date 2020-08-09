
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
             include 'connect.php';
             $con= mysqli_connect("localhost", "root", "","project1") or  die(mysqli_error($con));
             $item_id=$_GET['c1'];
             $quantity=$_GET['quantity'];
             $email=$_SESSION['email'];
             $rate=$_GET['rate'];
             $totalcost=$quantity*$rate;
             $query="INSERT INTO shopping(email,item_id,status,quantity,totalcost) VALUES('$email',$item_id, 'Added to cart',$quantity,
             $totalcost)";
             $res=mysqli_query($con, $query);
             header("Location: shop.php");
            
        ?> 
    </body>
</html>


