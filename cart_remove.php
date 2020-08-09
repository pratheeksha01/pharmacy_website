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
          $item_id=$_REQUEST['id'];
          $email=$_SESSION['email'];
          $query="delete from shopping where item_id=$item_id and email='$email'";
          $res=mysqli_query($con, $query);
          header("Location: cart1.php");
     ?>
    </body>
</html>
