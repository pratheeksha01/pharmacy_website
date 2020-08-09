<!DOCTYPE html>
<html>
<head>
	<title>cart</title>
	<style type="text/css">
  #remove{
    color:#49eb34;
  }
		table{
			margin-top: 100px;
			

		}
    th{
      background-color:#57bc72;
    }
    tr
    {
      background-color: #c9d6cc;
    }
    body
    {
      background-image: url('back2.png');
      background-repeat: repeat;
    }
    .nav{
      background-color: white;
      padding: 1px;

    }
    a{
      text-decoration: none;
       color: #4de85a;
      }
    li{
      font-family: "Times New Roman";
    }
    a:hover{color: #34eb89}
    li{
      display: inline;
      padding: 50px;
    }
    .color{
      background-color:#57bc72;
      color:red;
    }

</style>
	</style>
</head>
<body>
  <div class="nav">
<nav>
  <ul>
    <li><a href="home.html">HOME</a></li>
    <li><a href="services.php">SERVICES</a></li>
    <li><a href="gallery.html">GALLERY</a></li>
    <li><img width="80" height="40" src="logo.jpg"></li>
    <li><a href="career.html">CAREER</a></li>
    <li><a href="med.html">MEDICINES</a></li>
        <li><a href="signuplogin.html">SHOP</a></li>
  </ul>
</nav>
</div>
    <?php
        $sum=0;
        $num=0;
    ?>        
    <?php
    include 'connect.php';
     $con= mysqli_connect("localhost", "root", "","project1") or  die(mysqli_error($con));
    # session_start();
     $email=$_SESSION['email'];
     echo"current user is $email";
         $query="select i.item_id,i.item_name,i.price,s.totalcost,s.quantity from shopping s,item i where i.item_id=s.item_id AND s.email='$email' " or die(mysqli_error($query));
           $user_submit=mysqli_query($con,$query);
 $res=mysqli_num_rows($user_submit);
          if($res==0)
          {?>
       
            <h3 style="color:red">Your Cart Is Empty!</h3>
       
             
             
          <?php   exit();
          }
          else
          { ?>
        
<center>
  <h3 style="color:#57bc72;"> YOUR CART</h3>
  <? php echo"$_SESSION['email']"; ?>
        <table cellpadding="10" cellspacing="5" >
            <tbody>
                <tr><th>Sno</th>
                    <th>product</th>
	             <th>price</th>
               <th>quantitye</th>
		     <th>total price</th>
                     <th>remove</th></tr>
                
                <?php        
                while($row=mysqli_fetch_array($user_submit))
                { 
                          $num=$num+1;   
                          $id = $row['item_id']; ?>
                <tr><td><?php echo $num; ?></td>
                    <td><?php echo $row['item_name']; ?></td>
                     <td><?php echo$row['price']; ?></td>
                    <td><?php echo$row['quantity']; ?></td>
                   
                    <td><?php echo $row['totalcost']; ?></td>
                    <td><?php echo "<a href=cart_remove.php?id=$id>REMOVE</a>" ?></td>
                </tr>
                <?php  
                       $sum=$sum+$row['totalcost'];
                }
              }?>
                
                
                <tr><td> </td><td style="color:black">TOTAL</td><td>Rs.<?php echo $sum ?></td>
                   <td class="color"> <a href="success.php"><span class="color">Confirm Order</span></a></td></tr>
                
            </tbody>
        </table>
</center>
</body>
</html>
