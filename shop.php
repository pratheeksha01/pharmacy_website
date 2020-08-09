<!DOCTYPE html>
<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">

	<style>
	li{
			display: inline;
			padding: 60px;
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
		
</style>

</head>
<body>
	<div class="nav">
<nav>
	<ul>
		<li><a href="home.html">HOME</a></li>
		<li><a href="services.php">SERVICES</a></li>
		<li><a href="gallery.html">GALLERY</a></li>
		<li><img width="100" height="40" src="logo.jpg"></li>
		<li><a href="career.html">CAREER</a></li>
		<li><a href="med.html">MEDICINES</a></li>
        <li><a href="signuplogin.html">SHOP</a></li>
	</ul>
</nav>
</div>
	<
<?php
   include 'connect.php';
    $con= mysqli_connect("localhost", "root", "","project1") or  die(mysqli_error($con));
   include 'check_if_added.php';
 $email=$_SESSION['email'];
    
?>


	<style type="text/css">
		table{
			/*margin-top: 100px;*/
			background-color: #edf3f5;
			
		}
		.cart{
			padding-left: 1300px;	
			color:#57bc72;		
			}	
			th
		{
			 background-color:#57bc72;
			color: black;
			text-align: center;
		}	
	</style>


<body>
	<div style="color: #57bc72"><span class="glyphicon glyphicon-user"></span>
	<?php

 $email=$_SESSION['email'];
echo"  $email";

?>
<a href="cart1.php"><span class="glyphicon glyphicon-shopping-cart cart"></span></a>
	<span style="color:#57bc72; padding-left: 1310px">cart</span>
	</div>
	

	

<center>	
<table  cellpadding="50" cellspacing="100" >
	
	<tr cellpadding="20" cellspacing="100">
		<th>
			product
		</th>
		<th>
			image
		</th>
		<th>
			quantity
		</th>
		<th>
			price
		</th>
		<th>
			add to cart
		</th>
	</tr>
	<tr>
		<td>
			Iodex
		</td>
		<td>
			<img height="100" width="150" src="iodex-pack.png">
		</td>
		
		<td>
			<form action="cart-add.php" method="GET">
				<input type="checkbox" name="c1" value="1">
			<input type="text" name="quantity" value="">
			
		</td>
		<td>
			<input type="text" name="rate" value="100" readonly>
		</td>
		<td>
                    <!--Checks if iodex with item_id 1 is added to the cart or not. if it is added then
                     that button text is changed to "Added to cart" if not then it remains as "Add to cart".
                   
           <a href="cart-add.php?id=1" class="btn btn-block btn-primary" role="button">Add to cart</a>   -->
  <input type="submit" class="btn btn-block btn-success" name="add" value="add">
                
              </td>
                   	
        </form>
     
	</tr>
	<tr>
		<td>
			Kellogs
		</td>
		<td>
			<img height="200" width="150" src="kellogs.jpg">
		</td>
		<td>
			<form action="cart-add.php?id=2" method="GET">
				<input type="checkbox" name="c1" value="2">
			<input type="text" name="quantity" value="">
			
		</td>
		<td>
			<input type="text" name="rate" value="300" readonly>
		</td>
		<td>
                  <input type="submit" class="btn btn-block btn-success" name="add" value="add">
                   	
           </form>
      </td>
		</td>
	</tr>
	<tr>
		<td>
			mask
		</td>
		<td>
			<img height="100" width="150" src="mask.png">
		</td>
		
		<td>
			<form action="cart-add.php?id=3" method="GET">
				<input type="checkbox" name="c1" value="3">
			<input type="text" name="quantity" value="">
		</td>
		            <td>
		            	<input type="text" name="rate" value="50" readonly>
		            </td>
		<td>
			<input type="submit" class="btn btn-block btn-success" name="add" value="add">
      </td>
		</form>
	</tr>
	<tr>
		<td>
			hand sanitizer
		</td>
		<td>
			<img height="200" width="150" src="handsantizier.jpg">
		</td>
		
		<td>
			<form action="cart-add.php" method="GET">
				<input type="checkbox" name="c1" value="4">
			<input type="text" name="quantity" value="">
		</td>
		<td>
			<input type="text" name="rate" value="100" readonly>
		</td>
		<td>
		<input type="submit" class="btn btn-block btn-success" name="add" value="add">   
      </td>
	</form>
	</tr>
	<tr>
		<td>
			glouse
		</td>
		<td>
			<img height="100" width="150" src="iodex-pack.png">
		</td>
		
		<td>
			<form action="cart-add.php" method="GET">
				<input type="checkbox" name="c1" value="5">
			<input type="text" name="quantity" value="">
		</td>
		<td>
			<input type="text" name="rate" value="150" readonly>
		</td>
		<td>
	 <input type="submit" class="btn btn-block btn-success" name="add" value="add">
      </td>
	</form>
	</tr>
	<tr>
		<td>
			BENADRYL SYRUP
		</td>
		<td>
			<img height="100" width="150" src="benadryl.jpg">
		</td>
		
		<td>
			<form action="cart-add.php" method="GET">
				<input type="checkbox" name="c1" value="5">
			<input type="text" name="quantity" value="">
		</td>
		<td>
			<input type="text" name="rate" value="150" readonly>
		</td>
		<td>
	 <input type="submit" class="btn btn-block btn-success" name="add" value="add">
      </td>
	</form>
	</tr>
	<tr>
		<td>
			burnol
		</td>
		<td>
			<img height="200" width="150" src="burnol.jpg">
		</td>
		
		<td>
			<form action="cart-add.php" method="GET">
				<input type="checkbox" name="c1" value="6">
			<input type="text" name="quantity" value="">
		</td>
		<td>
			<input type="text" name="rate" value="100" readonly>
		</td>
		<td>
		<input type="submit" class="btn btn-block btn-success" name="add" value="add">  
		</form>
      </td>
		
	</tr>
	<tr>
		<td>
			INHALER
		</td>
		<td>
			<img height="100" width="150" src="inhaler.jpg">
		</td>
		
		<td>
			<form action="cart-add.php" method="GET">
				<input type="checkbox" name="c1" value="7">
			<input type="text" name="quantity" value="">
		</td>
		<td>
			<input type="text" name="rate" value="300" readonly>
		</td>
		<td>
			<input type="submit" class="btn btn-block btn-success" name="add" value="add">
			</form>
      </td>
	
	</tr>
	<tr>
		<td>
		HAND SANITIZER
		</td>
		<td>
			<img height="200" width="150" src="kellogs.jpg">
		</td>
		
		<td>
			<form action="cart-add.php" method="GET">
				<input type="checkbox" name="c1" value="8">
			<input type="text" name="quantity" value="">
		</td>
		<td>
			<input type="text" name="rate" value="100" readonly>
		</td>
		<td>
	 <input type="submit" class="btn btn-block btn-success" name="add" value="add">
     </form> </td>
	
	</tr>
	
	
</table>

	</center>


</body>
</html>