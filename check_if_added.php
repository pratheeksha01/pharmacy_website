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
             function check_if_added($item_id)
             {
                 include 'connect.php';
                  $con= mysqli_connect("localhost", "root", "","project1") or  die(mysqli_error($con));
                 $query="SELECT * FROM shopping WHERE item_id=$item_id and status='Added to cart'"; 
                 $execute_query=mysqli_query($con, $query);
                 $total_rows=mysqli_num_rows($execute_query);
                 if($total_rows>=1)
                 {
                     return 1;
                 }
                 else 
                 {
                     return 0;
                 }
             }
        ?> 
    </body>
</html>


